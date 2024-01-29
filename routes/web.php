<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\CekLogin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/register', 'register')->name('register');
    Route::post('/proses-register', 'prosesRegister')->name('prosesRegister');
    Route::get('/login', 'login')->name('login');
    Route::post('/proses-login', 'prosesLogin')->name('prosesLogin');
    Route::get('/generate-new-token', 'generateNewToken')->name('generateNewToken');
    Route::get('/logout', 'logout')->name('logout');
});

Route::middleware([CekLogin::class])->group(function () {
    Route::controller(\App\Http\Controllers\DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    Route::controller(\App\Http\Controllers\LainnyaController::class)->group(function () {
       Route::get('/lainnya', 'index')->name('lainnya');
    });

    Route::controller(\App\Http\Controllers\LayananController::class)->group(function () {
        Route::get('/layanan', 'index')->name('layanan');
        Route::get('/tambah-layanan', 'tambah')->name('tambahLayanan');
        Route::post('/tambah-layanan-proses', 'tambahLayananProses')->name('tambahLayananProses');
        Route::get('/hapus-layanan', 'hapusLayanan')->name('hapusLayanan');
        Route::get('/edit-layanan/{id}', 'editLayanan');
        Route::post('/edit-layanan', 'prosesEditLayanan')->name('prosesEditLayanan');
    });

    Route::controller(\App\Http\Controllers\TransaksiController::class)->group(function () {
        Route::get('/transaksi', 'index')->name('transaksi');
        Route::get('/detail-transaksi/{orderNumber}', 'detail');
        Route::get('/proses-transaksi/{orderNumber}/{status}', 'prosesTransaksi')->name('prosesTransaksi');
    });

    Route::controller(\App\Http\Controllers\OutletController::class)->group(function () {
        Route::get('/outlet', 'outlet')->name('outlet');
        Route::get('/gunakan-outlet', 'gunakanOutlet')->name('gunakanOutlet');
        Route::get('/lihat-outlet/{id}', 'lihatOutlet');
        Route::get('/perpanjang-lisensi-outlet/{id}', 'perpanjangLisensi');
        Route::get('/tambah-outlet', 'tambahOutlet')->name('tambahOutlet');
        Route::post('/buat-outlet', 'createOutlet')->name('createOutlet');
        Route::get('/histori-pembayaran-outlet', 'historiPembayaran')->name('historiPembayaran');
        Route::get('/pembayaran-outlet/{nomorPembayaran}', 'detailPembayaran');
        Route::post('/upload-bukti-pembayaran', 'uploadBuktiPembayaran')->name('uploadBuktiPembayaran');
        Route::post('/perpanjang-lisensi-proses', 'perpanjangLisensiProses')->name('perpanjangLisensiProses');
    });
});
