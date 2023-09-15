<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPage\HomeController;
use App\Http\Controllers\PerbaikanHomeController;
use App\Http\Controllers\Auth\RazenPolitik\LoginController;
use App\Http\Controllers\Auth\RazenPolitik\PenggunaLoginController;
use App\Http\Controllers\Auth\RazenPolitik\KoordinatorLoginController;
use App\Http\Controllers\Auth\RazenPolitik\RelawanLoginController;
use App\Http\Controllers\Auth\RazenPolitik\SaksiLoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['register' => false, 'login' => false]);
// Route::get('/', [HomeController::class, 'beranda'])->name('beranda');
// Route::get('/tentang-kami', [HomeController::class, 'tentang_kami'])->name('tentang-kami');
// Route::get('/solusi', [HomeController::class, 'solusi'])->name('solusi');
// Route::get('/harga', [HomeController::class, 'harga'])->name('harga');
// Route::get('/artikel', [HomeController::class, 'artikel'])->name('artikel');
// Route::get('/bantuan', [HomeController::class, 'bantuan'])->name('bantuan');

Route::get('/', [PerbaikanHomeController::class, 'beranda'])->name('beranda');
Route::get('/tentang-kami', [PerbaikanHomeController::class, 'tentang_kami'])->name('tentang-kami');
Route::get('/harga', [PerbaikanHomeController::class, 'harga'])->name('harga');
Route::get('/artikel', [PerbaikanHomeController::class, 'artikel'])->name('artikel');
Route::get('/bantuan', [PerbaikanHomeController::class, 'bantuan'])->name('bantuan');
Route::post('/kontak-kami',[PerbaikanHomeController::class, 'kontak_kami'])->name('kontak-kami');
Route::get('/get-paket/{id}',[PerbaikanHomeController::class, 'get_paket'])->name('get-paket');

// Route::prefix('perbaikan')->group(function(){
//     Route::get('/', [PerbaikanHomeController::class, 'beranda']);
//     Route::get('/tentang-kami', [PerbaikanHomeController::class, 'tentang_kami']);
//     Route::get('/harga', [PerbaikanHomeController::class, 'harga']);
//     Route::get('/artikel', [PerbaikanHomeController::class, 'artikel']);
//     Route::get('/bantuan', [PerbaikanHomeController::class, 'bantuan']);
//     Route::post('/kontak-kami',[PerbaikanHomeController::class, 'kontak_kami'])->name('kontak-kami');
// });

Route::get('/login',[LoginController::class, 'showLoginForm'])->name('razen-politik.login');
Route::post('/login', [LoginController::class, 'login'])->name('razen-politik.login.submit');
Route::get('/logout', [LoginController::class, 'logout'])->name('razen-politik.logout');

Route::prefix('razen-politik')->group(function(){
    Route::group(['middleware' => 'auth:razen_politik'], function(){
        @include('razen-politik.php');
    });
});

Route::get('/pengguna/login',[PenggunaLoginController::class, 'showLoginForm'])->name('pengguna.login');
Route::post('/pengguna/login', [PenggunaLoginController::class, 'login'])->name('pengguna.login.submit');
Route::get('/pengguna/logout', [PenggunaLoginController::class, 'logout'])->name('pengguna.logout');

Route::prefix('pengguna')->group(function(){
    Route::group(['middleware' => 'auth:pengguna'], function(){
        @include('pengguna.php');
    });
});

Route::get('/koordinator/login',[KoordinatorLoginController::class, 'showLoginForm'])->name('koordinator.login');
Route::post('/koordinator/login', [KoordinatorLoginController::class, 'login'])->name('koordinator.login.submit');
Route::get('/koordinator/logout', [KoordinatorLoginController::class, 'logout'])->name('koordinator.logout');

Route::prefix('koordinator')->group(function(){
    Route::group(['middleware' => 'auth:koordinator'], function(){
        @include('koordinator.php');
    });
});

Route::get('/relawan/login',[RelawanLoginController::class, 'showLoginForm'])->name('relawan.login');
Route::post('/relawan/login', [RelawanLoginController::class, 'login'])->name('relawan.login.submit');
Route::get('/relawan/logout', [RelawanLoginController::class, 'logout'])->name('relawan.logout');

Route::prefix('relawan')->group(function(){
    Route::group(['middleware' => 'auth:relawan'], function(){
        @include('relawan.php');
    });
});

Route::get('/saksi/login',[SaksiLoginController::class, 'showLoginForm'])->name('saksi.login');
Route::post('/saksi/login', [SaksiLoginController::class, 'login'])->name('saksi.login.submit');
Route::get('/saksi/logout', [SaksiLoginController::class, 'logout'])->name('saksi.logout');

Route::prefix('saksi')->group(function(){
    Route::group(['middleware' => 'auth:saksi'], function(){
        @include('saksi.php');
    });
});
