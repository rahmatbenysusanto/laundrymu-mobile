<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class LayananController extends Controller
{
    public function index(): View
    {
        $dataLayanan = $this->hitApiService->GET('api/layanan/toko/'.Session::get('toko')->id, []);

        $layanan = $dataLayanan->data ?? [];

        $title = "layanan";
        return view('layanan.index', compact('title', 'layanan'));
    }

    public function tambah(): View
    {
        return view('layanan.tambah');
    }

    public function tambahLayananProses(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data['toko_id'] = Session::get('toko')->id;
        $data['nama'] = $request->post('nama');
        $data['type'] = $request->post('type');
        $data['harga'] = $request->post('harga');

        $create = $this->hitApiService->POST('api/layanan', $data);
        if (isset($create) && $create->status) {
            Session::flash('success', 'Layanan berhasil ditambahkan');
        } else {
            Session::flash('error', 'Layanan gagal ditambahkan');
        }
        return back();
    }

    public function hapusLayanan(Request $request): \Illuminate\Http\JsonResponse
    {
        $delete = $this->hitApiService->DELETE('api/layanan/'.$request->id);
        if (isset($delete) && $delete->status) {
            return response()->json([
                'status'    => true,
                'message'   => $delete->message
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => 'Layanan sudah dipakai dan tidak bisa dihapus'
            ]);
        }
    }

    public function editLayanan($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $result = $this->hitApiService->GET('api/layanan/'.base64_decode($id), []);

        if (isset($result) && $result->status && $result->data != null) {
            $title = 'layanan';
            $layanan = $result->data;
            return view('layanan.edit', compact('title', 'layanan'));
        } else {
            return back();
        }
    }

    public function prosesEditLayanan(Request $request): \Illuminate\Http\RedirectResponse
    {
        $result = $this->hitApiService->PATCH('api/layanan/'.$request->post('id'), [
            'toko_id'   => Session::get('toko')->id,
            'nama'      => $request->post('nama'),
            'type'      => $request->post('type'),
            'harga'     => $request->post('harga'),
        ]);

        if (isset($result) && $result->status) {
            Session::flash('success', 'Edit layanan berhasil');
        } else {
            Session::flash('error', 'Edit layanan gagal');
        }
        return redirect()->route('layanan');
    }
}
