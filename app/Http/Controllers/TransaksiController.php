<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class TransaksiController extends Controller
{
    public function index(): View
    {
        $dataTransaksi = $this->hitApiService->GET('api/transaksi/toko/'.Session::get('toko')->id, []);
        $transaksi = $dataTransaksi->data ?? [];

        return view('transaksi.list_transaksi', compact('transaksi'));
    }

    public function detail($orderNumber): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $dataTransaksi = $this->hitApiService->GET('api/transaksi/'.$orderNumber, []);
        if (isset($dataTransaksi) && $dataTransaksi->status && $dataTransaksi->data->transaksi != null) {
            $transaksi = $dataTransaksi->data->transaksi;
            $detail = $dataTransaksi->data->detail;
            $histori = $dataTransaksi->data->transaksi->histori_status_transaksi;
            $title = "list transaksi";
            return view('transaksi.detail', compact('title', 'transaksi', 'detail', 'histori'));
        } else {
            return back();
        }
    }

    public function prosesTransaksi($order_number, $status): \Illuminate\Http\JsonResponse
    {
        $prosesTransaksi = $this->hitApiService->PATCH('api/transaksi/'.$order_number.'/'.$status, []);
        if (isset($prosesTransaksi) && $prosesTransaksi->status) {
            return response()->json([
                'status'    => true,
            ]);
        } else {
            return response()->json([
                'status'    => false,
            ]);
        }
    }

    public function listLayanan(): View
    {
        $dataLayanan = $this->hitApiService->GET('api/layanan/toko/'.Session::get('toko')->id, []);
        $layanan = $dataLayanan->data ?? [];

        return view('transaksi.list_layanan', compact('layanan'));
    }

    public function tambahTransaksi(): View
    {
        $dataParfum = $this->hitApiService->GET('api/parfum/toko/'.Session::get('toko')->id, []);
        $dataDiskon = $this->hitApiService->GET('api/diskon/toko/'.Session::get('toko')->id, []);
        $dataPembayaran = $this->hitApiService->GET('api/pembayaran/toko/'.Session::get('toko')->id, []);
        $dataPengiriman = $this->hitApiService->GET('api/pengiriman/toko/'.Session::get('toko')->id, []);

        $parfum = $dataParfum->data ?? [];
        $diskon = $dataDiskon->data ?? [];
        $pembayaran = $dataPembayaran->data ?? [];
        $pengiriman = $dataPengiriman->data ?? [];

        return view('transaksi.tambah_transaksi', compact('parfum', 'diskon', 'pembayaran', 'pengiriman'));
    }
}
