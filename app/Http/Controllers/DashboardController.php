<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view("dashboard.index");
    }

    public function statusLaundry(): \Illuminate\Http\JsonResponse
    {
        $dataStatusTransaksi = $this->hitApiService->GET('api/get-status-transaksi/'.Session::get('toko')->id, []);
        $statusTransaksi = $dataStatusTransaksi->data ?? [];

        return response()->json([
            'status'    => $statusTransaksi->status,
            'diambil'   => $statusTransaksi->diambil
        ]);
    }

    public function transaksiHarian(): \Illuminate\Http\JsonResponse
    {
        $dataTransaksiHarian = $this->hitApiService->GET('api/get-transaksi-harian/'.Session::get('toko')->id, []);
        $transaksi = $dataTransaksiHarian->data ?? [];

        return response()->json([
            'data'    => $transaksi,
        ]);
    }

    public function getChart(): \Illuminate\Http\JsonResponse
    {
        $dataTransaksiHarian = $this->hitApiService->GET('api/get-chart-dashboard-mobile/'.Session::get('toko')->id, []);
        $transaksi = $dataTransaksiHarian->data ?? [];

        return response()->json([
            'data'    => $transaksi,
        ]);
    }
}
