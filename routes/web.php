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
    });
});
