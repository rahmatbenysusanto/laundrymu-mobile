<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class ParfumController extends Controller
{
    public function index(): View
    {
        $dataParfum = $this->hitApiService->GET('api/parfum/toko/'.Session::get('toko')->id, []);

        $parfum = $dataParfum->data ?? [];

        $title = "parfum";
        return view('parfum.index', compact('title', 'parfum'));
    }

    public function tambah(): View
    {
        return view('parfum.tambah');
    }

    public function tambahParfumProses(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data['toko_id'] = Session::get('toko')->id;
        $data['nama'] = $request->post('nama');
        $data['harga'] = $request->post('harga');

        $create = $this->hitApiService->POST('api/parfum', $data);
        if (isset($create) && $create->status) {
            Session::flash('success', 'Parfum berhasil ditambahkan');
        } else {
            Session::flash('error', 'Parfum gagal ditambahkan');
        }
        return back();
    }

    public function hapusParfum(Request $request): \Illuminate\Http\JsonResponse
    {
        $delete = $this->hitApiService->DELETE('api/parfum/'.base64_decode($request->id), []);
        if (isset($delete) && $delete->status) {
            return response()->json([
                'status'    => true,
                'message'   => $delete->message
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => 'Parfum sudah digunakan dalam transaksi, parfum tidak bisa dihapus'
            ]);
        }
    }

    public function editParfum($id)
    {
        $result = $this->hitApiService->GET('api/parfum/'.base64_decode($id), []);

        if (isset($result) && $result->status && $result->data != null) {
            $title = 'parfum';
            $parfum = $result->data;
            return view('parfum.edit', compact('title', 'parfum'));
        } else {
            Session::flash('error', 'Parfum tidak ditemukan');
            return back();
        }
    }

    public function prosesEditParfum(Request $request): \Illuminate\Http\RedirectResponse
    {
        $result = $this->hitApiService->PATCH('api/parfum/'.$request->post('id'), [
            'toko_id'   => Session::get('toko')->id,
            'nama'      => $request->post('nama'),
            'harga'     => $request->post('harga'),
        ]);

        if (isset($result) && $result->status) {
            Session::flash('success', 'Edit parfum berhasil');
        } else {
            Session::flash('error', 'Edit parfum gagal');
        }
        return redirect()->route('parfum');
    }
}
