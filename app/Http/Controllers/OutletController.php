<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class OutletController extends Controller
{
    public function outlet(): View
    {
        $dataOutlet = $this->hitApiService->GET('api/toko/user/'.Session::get('data_user')->id, []);

        $outlet = $dataOutlet->data ?? [];

        return view('lainnya.outlet.daftar_outlet', compact('outlet'));
    }

    public function gunakanOutlet($outletId): \Illuminate\Http\JsonResponse
    {
        $dataOutlet = $this->hitApiService->GET('api/toko/user/'.Session::get('data_user')->id, []);

        foreach ($dataOutlet->data as $outlet) {
            if ($outletId == $outlet->id) {
                Session::put('toko', $outlet);
            }
        }

        return response()->json([
            'status' => true
        ]);
    }

    public function lihatOutlet($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $dataToko = $this->hitApiService->GET('api/toko/'.(int)base64_decode($id), []);
        if (isset($dataToko) && $dataToko->status) {
            $toko = $dataToko->data;
            $title = "outlet";
            return view('outlet.lihat', compact('title', 'toko'));
        } else {
            Session::flash('error', 'Outlet tidak ditemukan');
            return back();
        }
    }

    function perpanjangLisensi($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $dataToko = $this->hitApiService->GET('api/toko/'.$id, []);
        if (isset($dataToko) && $dataToko->status) {
            $dataLisensi = $this->hitApiService->GET('api/get-lisensi', []);
            $dataMetodePembayaran = $this->hitApiService->GET('api/get-metode-pembayaran', []);
            $lisensi = $dataLisensi->data ?? [];
            $metodePembayaran = $dataMetodePembayaran->data ?? [];
            $toko = $dataToko->data;

            $title = "outlet";
            return view('lainnya.outlet.perpanjang_lisensi', compact('title', 'toko', 'lisensi', 'metodePembayaran'));
        } else {
            return back();
        }
    }

    public function perpanjangLisensiProses(Request $request): \Illuminate\Http\RedirectResponse
    {
        $result = $this->hitApiService->POST('api/toko/perpanjang-lisensi', [
            'toko_id'               => $request->post('toko_id'),
            'user_id'               => Session::get('data_user')->id,
            'lisensi_id'            => $request->post('lisensi'),
            'metode_pembayaran_id'  => $request->post('metode_pembayaran')
        ]);

        if (isset($result) && $result->status) {
            Session::flash('success', 'Perpanjang Lisensi Berhasil, Silahkan melakukan pembayaran');
            return redirect()->route('historiPembayaran');
        } else {
            Session::flash('error', 'Perpanjang Lisensi Gagal');
            return back();
        }
    }

    public function tambahOutlet(): View
    {
        $dataProvinsi = $this->hitApiService->GET('api/get-provinsi', []);
        $dataLisensi = $this->hitApiService->GET('api/get-lisensi', []);
        $dataMetodePembayaran = $this->hitApiService->GET('api/get-metode-pembayaran', []);
        $provinsi = $dataProvinsi->data ?? [];
        $lisensi = $dataLisensi->data ?? [];
        $metodePembayaran = $dataMetodePembayaran->data ?? [];

        $title = "outlet";
        return view('lainnya.outlet.tambah', compact('title', 'provinsi', 'lisensi', 'metodePembayaran'));
    }

    public function createOutlet(Request $request): \Illuminate\Http\JsonResponse
    {
        $create = $this->hitApiService->POST('api/toko', [
            'user_id'               => Session::get('data_user')->id,
            'nama'                  => $request->post('nama'),
            'no_hp'                 => $request->post('no_hp'),
            'logo'                  => 'image.png',
            'alamat'                => $request->post('alamat'),
            'provinsi'              => $request->post('provinsi'),
            'kabupaten'             => $request->post('kota'),
            'kecamatan'             => $request->post('kecamatan'),
            'kelurahan'             => $request->post('kelurahan'),
            'kode_pos'              => $request->post('kodePos'),
            'lisensi_id'            => $request->post('lisensiId'),
            'metode_pembayaran_id'  => $request->post('metodePembayaran')
        ]);

        Log::info(json_encode($create));

        if (isset($create) && $create->status) {
            return response()->json([
                'status'    => true,
            ]);
        } else {
            return response()->json([
                'status'    => true,
                'message'   => $create->message
            ]);
        }
    }

    public function historiPembayaran(): View
    {
        $dataPembayaran = $this->hitApiService->GET('api/toko/histori-pembayaran-outlet/'.Session::get('data_user')->id, []);
        $pembayaran = $dataPembayaran->data ?? [];

        $title = "pembayaran outlet";
        return view('lainnya.outlet.histori_pembayaran', compact('title', 'pembayaran'));
    }

    public function detailPembayaran($nomor_pembayaran): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $dataPembayaran = $this->hitApiService->GET('api/toko/get-detail-pembayaran/'.$nomor_pembayaran, []);

        if ($dataPembayaran->data != null) {
            $pembayaran = $dataPembayaran->data;

            $title = "pembayaran outlet";
            return view('lainnya.outlet.detail_pembayaran', compact('title', 'pembayaran'));
        } else {
            return back();
        }
    }

    public function uploadBuktiPembayaran(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('bukti_pembayaran'), $imageName);

        $result = $this->hitApiService->POST('api/toko/upload-bukti-pembayaran', [
            'id'    => $request->post('pembayaran_id'),
            'image' => $imageName
        ]);

        if (isset($result) && $result->status) {
            Session::flash('success', 'Upload bukti pembayaran berhasil');
        } else {
            Session::flash('error', 'Upload bukti pembayaran gagal');
        }

        return back();
    }
}
