<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class BarangController extends Controller
{
    public function listPembelianBarang(): View
    {
        $dataPembelian = $this->hitApiService->GET('api/barang/histori-pembelian/'.Session::get('toko')->id, []);
        $pembelian = $dataPembelian->data ?? [];

        return view('barang.list_pembelian', compact('pembelian'));
    }

    public function pembelianBarang(): View
    {
        return view('barang.pembelian');
    }

    public function pembelian(Request $request): \Illuminate\Http\RedirectResponse
    {
        $create = $this->hitApiService->POST('api/barang', [
            "user_id"   => Session::get('data_user')->id,
            "toko_id"   => Session::get('toko')->id,
            "nama"      => $request->post('nama'),
            "tipe"      => $request->post('tipe'),
            "harga"     => $request->post('harga'),
            "stok"      => $request->post('stok'),
            "tanggal"   => date('Y-m-d H:i:s', time())
        ]);

        if (isset($create) && $create->status) {
            Session::flash('success', 'Tambah Barang Berhasil');
        } else {
            Session::flash('error', 'Tambah Barang Gagal');
        }

        return back();
    }

    public function tambahStokBarang(): View
    {
        $dataBarang = $this->hitApiService->GET('api/barang/stok/'.Session::get('toko')->id, []);
        $barang = $dataBarang->data ?? [];

        return view('barang.tambah_stok', compact('barang'));
    }

    public function prosesTambahStokBarang(Request $request): \Illuminate\Http\RedirectResponse
    {
        $tambahStok = $this->hitApiService->PATCH('api/barang/tambah-stok', [
            "user_id"   => Session::get('data_user')->id,
            "toko_id"   => Session::get('toko')->id,
            "barang_id" => $request->post('barang'),
            "harga"     => $request->post('harga'),
            "stok"      => $request->post('stok'),
            "tanggal"   => date('Y-m-d H:i:s', time())
        ]);

        if (isset($tambahStok) && $tambahStok->status) {
            Session::flash('success', 'Tambah Stok Barang Berhasil');
        } else {
            Session::flash('error', 'Tambah Stok Barang Gagal');
        }

        return back();
    }

    public function listBarang(): View
    {
        $dataBarang = $this->hitApiService->GET('api/barang/stok/'.Session::get('toko')->id, []);
        $barang = $dataBarang->data ?? [];

        return view('barang.list_barang', compact('barang'));
    }

    public function listPenggunaan(): View
    {
        $dataPenggunaan = $this->hitApiService->GET('api/barang/histori-penggunaan/'.Session::get('toko')->id, []);
        $penggunaan = $dataPenggunaan->data ?? [];

        return view('barang.list_penggunaan', compact('penggunaan'));
    }

    public function tambahPenggunaan(): View
    {
        $dataBarang = $this->hitApiService->GET('api/barang/stok/'.Session::get('toko')->id, []);
        $barang = $dataBarang->data ?? [];

        return view('barang.tambah_penggunaan', compact('barang'));
    }

    public function prosesPenggunaan(Request $request): \Illuminate\Http\RedirectResponse
    {
        $create = $this->hitApiService->PATCH('api/barang/kurangi-stok', [
            "user_id"   => Session::get('data_user')->id,
            "toko_id"   => Session::get('toko')->id,
            "barang_id" => $request->post('barang'),
            "stok"      => $request->post('stok'),
            "tanggal"   => date('Y-m-d H:i:s', time())
        ]);

        if (isset($create) && $create->status) {
            Session::flash('success', 'Penggunaan Stok Barang Berhasil');
        } else {
            Session::flash('error', 'Penggunaan Stok Barang Gagal');
        }

        return back();
    }
}
