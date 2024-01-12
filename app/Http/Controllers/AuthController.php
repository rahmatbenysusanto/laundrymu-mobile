<?php

namespace App\Http\Controllers;

use App\Http\Services\hitApiService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function __construct(
        protected hitApiService $hitApiService
    ){}

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

    public function prosesRegister(Request $request)
    {
        dd($request);
    }

    public function generateNewToken(Request $request): \Illuminate\Http\JsonResponse
    {
        $userId = base64_decode($request->checkLoginId);
        $hit = $this->hitApiService->GETNOTLOGIN('api/user/generate-new-token/'.$userId, []);

        Session::put("data_user", $hit->data);
        Session::put("token", base64_decode($request->checkLogin));

        return response()->json([
            'status'    => true,
            'message'   => 'GET Data Berhasil',
        ]);
    }
}
