<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class LainnyaController extends Controller
{
    public function index(): View
    {
        $dataTransaksiHarian = $this->hitApiService->GET('api/get-transaksi-harian/'.Session::get('toko')->id, []);

        $transaksiHarian = $dataTransaksiHarian->data ?? [];

        return view('lainnya.index', compact('transaksiHarian'));
    }
}
