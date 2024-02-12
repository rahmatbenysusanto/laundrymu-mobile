<?php

namespace App\Http\Controllers;

use App\Http\Services\hitApiService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function index(): View
    {
        return view('index');
    }

    public function login(): View
    {
        return view('auth.login');
    }

    public function prosesLogin(Request $request)
    {
        $data["no_hp"] = $request->post("username");
        $data["password"] = $request->post("password");

        $hit = $this->hitApiService->POSTLOGIN("api/user/login", $data);
        if (isset($hit) && $hit->status) {
            Session::put("data_user", $hit->data);
            Session::put("token", $hit->data->token);

            // Get Toko
            if ($hit->data->role == "owner") {
                $toko = $this->hitApiService->GET('api/toko/user/'.$hit->data->id, []);
                Session::put('toko', $toko->data[0]);
                if ($hit->data->status != "active") {
                    return redirect()->to(route('verifikasiOtp'));
                }
            } else {
                $toko = $this->hitApiService->GET('api/toko/pegawai/'.$hit->data->id, []);
                Session::put('toko', $toko->data->toko);
            }

            return redirect()->action([DashboardController::class, 'index']);
        } else {
            Session::flash("error", "Login gagal, email atau password salah!");
            return back();
        }
    }

    public function register(): View
    {
        return view('auth.register');
    }

    public function prosesRegister(Request $request): \Illuminate\Http\RedirectResponse
    {
        $result = $this->hitApiService->POSTLOGIN('api/user/register', [
            'nama'      => $request->post('nama'),
            'no_hp'     => $request->post('no_hp'),
            'email'     => $request->post('email'),
            'password'  => $request->post('password'),
            'role'      => 'owner',
            'outlet'    => $request->post('outlet')
        ]);

        Log::info(json_encode($result));

        if (isset($result) && $result->status) {
            Session::flash('success', 'Buat akun berhasil, silahkan login');
        } else {
            Session::flash('error', $result->errors);
        }

        return back();
    }

    public function generateNewToken(Request $request): \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
    {
        try {
            $userId = base64_decode($request->checkLoginId);
            $hit = $this->hitApiService->GETNOTLOGIN('api/user/generate-new-token/'.$userId, []);
            Log::info(json_encode($hit));

            Session::put("data_user", $hit->data->user);
            Session::put("token", $hit->data->token);

            // Get Toko
            if ($hit->data->user->role == "owner") {
                $toko = $this->hitApiService->GET('api/toko/user/'.$userId, []);
                Session::put('toko', $toko->data[0]);
                if ($hit->data->user->status != "active") {
                    return redirect()->to(route('verifikasiOtp'));
                }
            } else {
                $toko = $this->hitApiService->GET('api/toko/pegawai/'.$userId, []);
                Session::put('toko', $toko->data->toko);
            }

            return response()->json([
                'status'    => true,
                'message'   => 'GET Data Berhasil',
            ]);
        } catch (\Exception $err) {
            return response()->json([
                'status'    => false,
                'message'   => 'GET Data Failed',
                'error'     => $err->getMessage()
            ]);
        }
    }

    public function verifikasiOtp(): View
    {
        return view('auth.otp');
    }

    public function prosesOTP(Request $request): \Illuminate\Http\RedirectResponse
    {
        $result = $this->hitApiService->POST('api/verifikasi-otp', [
            'user_id'   => Session::get('data_user')->id,
            'otp'       => $request->post('kode1').$request->post('kode2').$request->post('kode3').$request->post('kode4')
        ]);

        if (isset($result) && $result->status) {
            return redirect()->to(route('dashboard'));
        } else {
            Session::flash('error', 'Kode OTP salah, silahkan coba lagi');
            return back();
        }
    }

    public function generateNewOTP(Request $request): \Illuminate\Http\JsonResponse
    {
        $result = $this->hitApiService->GET('api/generate-new-otp/'.Session::get('data_user')->id, []);

        return response()->json([
            'status'  => $result->status
        ], 200);
    }

    public function logout(): \Illuminate\Http\RedirectResponse
    {
        Session::forget('data_user');
        Session::forget('toko');

        return redirect()->to(route('login'));
    }
}
