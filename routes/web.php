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

    Route::controller(\App\Http\Controllers\ParfumController::class)->group(function () {
        Route::get('/parfum', 'index')->name('parfum');
        Route::get('/tambah-parfum', 'tambah')->name('tambahParfum');
        Route::post('/parfum', 'tambahParfumProses')->name('tambahParfumProses');
        Route::get('/hapus-parfum', 'hapusParfum')->name('hapusParfum');
        Route::get('/edit-parfum/{id}', 'editParfum');
        Route::post('/edit-parfum', 'prosesEditParfum')->name('prosesEditParfum');
    });

    Route::controller(\App\Http\Controllers\PembayaranController::class)->group(function () {
        Route::get('/pembayaran', 'index')->name('pembayaran');
        Route::get('/tambah-pembayaran', 'tambah')->name('tambahPembayaran');
        Route::post('/pembayaran', 'tambahPembayaranProses')->name('tambahPembayaranProses');
        Route::get('/hapus-pembayaran', 'hapusPembayaran')->name('hapusPembayaran');
        Route::get('/edit-pembayaran/{id}', 'editPembayaran');
        Route::post('/edit-pembayaran', 'prosesEditPembayaran')->name('prosesEditPembayaran');
    });

    Route::controller(\App\Http\Controllers\PelangganController::class)->group(function () {
        Route::get('/pelanggan', 'index')->name('pelanggan');
        Route::get('/tambah-pelanggan', 'tambah')->name('tambahPelanggan');
        Route::post('/pelanggan', 'tambahPelangganProses')->name('tambahPelangganProses');
        Route::post('/tambah-pelanggan-ajax', 'tambahPelangganAjax')->name('tambahPelangganAjax');
        Route::get('/get-pelanggan', 'getPelanggan')->name('getPelanggan');
        Route::get('/hapus-pelanggan', 'hapusPelanggan')->name('hapusPelanggan');
        Route::get('/edit-pelanggan/{id}', 'editPelanggan');
        Route::post('/edit-pelanggan', 'prosesEditPelanggan')->name('prosesEditPelanggan');
    });

    Route::controller(\App\Http\Controllers\DiskonController::class)->group(function () {
        Route::get('/diskon', 'index')->name('diskon');
        Route::get('/tambah-diskon', 'tambah')->name('tambahDiskon');
        Route::post('/diskon', 'tambahDiskonProses')->name('tambahDiskonProses');
        Route::get('/hapus-diskon', 'hapusDiskon')->name('hapusDiskon');
        Route::get('/edit-diskon/{id}', 'editDiskon');
        Route::post('/edit-diskon', 'prosesEditDiskon')->name('prosesEditDiskon');
    });
});
