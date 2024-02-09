<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
        $dataPelanggan = $this->hitApiService->GET('api/pelanggan/toko/'.Session::get('toko')->id, []);

        $pelanggan = $dataPelanggan->data ?? [];
        $parfum = $dataParfum->data ?? [];
        $diskon = $dataDiskon->data ?? [];
        $pembayaran = $dataPembayaran->data ?? [];
        $pengiriman = $dataPengiriman->data ?? [];

        return view('transaksi.tambah_transaksi', compact('parfum', 'diskon', 'pembayaran', 'pengiriman', 'pelanggan'));
    }

    public function buatTransaksi(Request $request): \Illuminate\Http\JsonResponse
    {
        $layanan = [];
        foreach ($request->post('layanan') as $lay) {
            $layanan[] = [
                'id'        => $lay['id'],
                'jumlah'    => $lay['total'],
                'harga'     => $lay['harga']
            ];
        }

        $pelanggan = $request->post('pelanggan');

        $diskon = $request->post('diskon');
        if ($diskon == null) {
            $dataDiskon = $this->hitApiService->GET('api/diskon/toko/'.Session::get('toko')->id, []);
            $diskon = $dataDiskon->data ?? [];
            $diskon_id = $diskon[0]->id;
        } else {
            $diskon_id = $diskon['id'];
        }

        $parfum = $request->post('parfum');
        if ($parfum == null) {
            $dataParfum = $this->hitApiService->GET('api/parfum/toko/'.Session::get('toko')->id, []);
            $parfum = $dataParfum->data ?? [];
            $parfum_id = $parfum[0]->id;
        } else {
            $parfum_id = $parfum['id'];
        }

        $pengiriman = $request->post('pengiriman');
        if ($pengiriman == null) {
            $dataPengiriman = $this->hitApiService->GET('api/pengiriman/toko/'.Session::get('toko')->id, []);
            $pengiriman = $dataPengiriman->data ?? [];
            $pengiriman_id = $pengiriman[0]->id;
        } else {
            $pengiriman_id = $pengiriman['id'];
        }

        $dataApi['toko_id'] = Session::get('toko')->id;
        $dataApi['pelanggan_id'] = $pelanggan['id'];
        $dataApi['diskon_id'] = $diskon_id;
        $dataApi['parfum_id'] = $parfum_id;
        $dataApi['pengiriman_id'] = $pengiriman_id;
        $dataApi['pembayaran_id'] = $request->post('pembayaran');
        $dataApi['status_pembayaran'] = $request->post('statusPembayaran');
        $dataApi['harga'] = $request->post('harga');
        $dataApi['harga_diskon'] = $request->post('biayaDiskon');
        $dataApi['total_harga'] = $request->post('totalHarga');
        $dataApi['catatan'] = $request->post('catatan');
        $dataApi['layanan'] = $layanan;

        $create = $this->hitApiService->POST('api/transaksi', $dataApi);
        Log::info(json_encode($create));
        if (isset($create) && $create->status) {
            return response()->json([
                'status'    => true
            ], 200);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => $create->message ?? null
            ], 200);
        }
    }

    public function notifSuccessCreateTransaksi(): View
    {
        return view('transaksi.notif_berhasil');
    }

    public function detailStatusTransaksi($order_number): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $dataTransaksi = $this->hitApiService->GET('api/transaksi/'.$order_number, []);
        if (isset($dataTransaksi) && $dataTransaksi->status && $dataTransaksi->data->transaksi != null) {
            $transaksi = $dataTransaksi->data->transaksi;
            $detail = $dataTransaksi->data->detail;
            $histori = $dataTransaksi->data->transaksi->histori_status_transaksi;

            return view('transaksi.detail_status', compact('transaksi', 'detail', 'histori'));
        } else {
            return back();
        }
    }
}
