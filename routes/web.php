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
    Route::get('/verifikasi-otp', 'verifikasiOtp')->name('verifikasiOtp');
    Route::post('/proses-verifikasi-otp', 'prosesOTP')->name('prosesOTP');
    Route::get('/logout', 'logout')->name('logout');
    Route::get('/generate-new-otp', 'generateNewOTP')->name('generateNewOTP');
    Route::get('/lupa-kata-sandi', 'lupaKataSandi')->name('lupaKataSandi');
    Route::post('/lupa-kata-sandi', 'lupaKataSandiProses')->name('lupaKataSandiProses');
    Route::get('/lupa-password/{link}', 'changePassword')->name('changePassword');
    Route::post('/lupa-password', 'changePasswordProses')->name('changePasswordProses');
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
        Route::get('/transaksi-list-layanan', 'listLayanan')->name('transaksiListLayanan');
        Route::get('/tambah-transaksi', 'tambahTransaksi')->name('tambahTransaksi');
        Route::post('/buat-transaksi', 'buatTransaksi')->name('buatTransaksi');
        Route::get('/notifikasi-berhasil', 'notifSuccessCreateTransaksi')->name('notifSuccessCreateTransaksi');
        Route::get('/detail-status-transaksi/{orderNumber}','detailStatusTransaksi');
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
        Route::get('/pelanggan-by-json', 'getByJson')->name('getByJson');
    });

    Route::controller(\App\Http\Controllers\DiskonController::class)->group(function () {
        Route::get('/diskon', 'index')->name('diskon');
        Route::get('/tambah-diskon', 'tambah')->name('tambahDiskon');
        Route::post('/diskon', 'tambahDiskonProses')->name('tambahDiskonProses');
        Route::get('/hapus-diskon', 'hapusDiskon')->name('hapusDiskon');
        Route::get('/edit-diskon/{id}', 'editDiskon');
        Route::post('/edit-diskon', 'prosesEditDiskon')->name('prosesEditDiskon');
    });

    Route::controller(\App\Http\Controllers\PegawaiController::class)->group(function () {
        Route::get('/pegawai', 'index')->name('pegawai');
        Route::post('/tambah-pegawai', 'create')->name('tambahPegawai');
        Route::get('/absensi-pegawai', 'absensiPegawai')->name('absensiPegawai');
        Route::post('/create-absen-pegawai', 'createAbsenPegawai')->name('createAbsenPegawai');
        Route::get('/gaji-pegawai', 'gajiPegawai')->name('gajiPegawai');
        Route::get('/detail-absen-pegawai/{pegawaiId}', 'detailAbsenPegawai');
    });

    Route::controller(\App\Http\Controllers\KodePosController::class)->group(function () {
        Route::get('/get-kota', 'getKota')->name('getKota');
        Route::get('/get-kecamatan', 'getKecamatan')->name('getKecamatan');
        Route::get('/get-kelurahan', 'getKelurahan')->name('getKelurahan');
        Route::get('/get-kode-pos', 'getKodePos')->name('getKodePos');
    });

    Route::controller(\App\Http\Controllers\LaporanController::class)->group(function () {
        Route::get('/laporan', 'index')->name('laporan');
        Route::get('/laporan/ops-transaksi', 'ops_transaksi')->name('ops_transaksi');
        Route::get('/laporan/ops-layanan', 'ops_layanan')->name('ops_layanan');
        Route::get('/laporan/ops-parfum', 'ops_parfum')->name('ops_parfum');
        Route::get('/laporan/ops-diskon', 'ops_diskon')->name('ops_diskon');
        Route::get('/laporan/ops-pembayaran', 'ops_pembayaran')->name('ops_pembayaran');
    });

    Route::controller(\App\Http\Controllers\ChatController::class)->group(function () {
        Route::get('/chat', 'index')->name('chat');
        Route::get('/chat/get-chat', 'getChat')->name('getChat');
        Route::post('/chat', 'create')->name('sendChat');
    });

    Route::controller(\App\Http\Controllers\BarangController::class)->group(function () {
        Route::get('/inventory/list-pembelian', 'listPembelianBarang')->name('listPembelianBarang');
        Route::get('/pembelian-barang-baru', 'pembelianBarang')->name('pembelianBarang');
        Route::post('/proses-pembelian', 'pembelian')->name('prosesPembelian');
        Route::get('/tambah-stok-barang', 'tambahStokBarang')->name('tambahStokBarang');
        Route::post('/proses-tambah-stok-barang', 'prosesTambahStokBarang')->name('prosesTambahStokBarang');
        Route::get('/list-barang', 'listBarang')->name('listBarang');
        Route::get('/list-penggunaan-barang', 'listPenggunaan')->name('listPenggunaan');
        Route::get('/tambah-penggunaan-barang', 'tambahPenggunaan')->name('tambahPenggunaan');
        Route::post('/proses-penggunaan-barang', 'prosesPenggunaan')->name('prosesPenggunaan');
    });
});
