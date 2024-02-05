<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $dataStatusTransaksi = $this->hitApiService->GET('api/get-status-transaksi/'.Session::get('toko')->id, []);
        $statusTransaksi = $dataStatusTransaksi->data ?? [];

        return view("dashboard.index", compact('statusTransaksi'));
    }
}
