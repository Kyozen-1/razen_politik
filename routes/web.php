<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPage\HomeController;
use App\Http\Controllers\Auth\RazenPolitik\LoginController;
use App\Http\Controllers\Auth\RazenPolitik\PenggunaLoginController;


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
Route::get('/', [HomeController::class, 'beranda'])->name('beranda');
Route::get('/tentang-kami', [HomeController::class, 'tentang_kami'])->name('tentang-kami');
Route::get('/solusi', [HomeController::class, 'solusi'])->name('solusi');
Route::get('/harga', [HomeController::class, 'harga'])->name('harga');
Route::get('/artikel', [HomeController::class, 'artikel'])->name('artikel');
Route::get('/bantuan', [HomeController::class, 'bantuan'])->name('bantuan');

Route::get('/login',[LoginController::class, 'showLoginForm'])->name('razen-politik.login');
Route::post('/login', [LoginController::class, 'login'])->name('razen-politik.login.submit');
Route::get('/logout', [LoginController::class, 'logout'])->name('razen-politik.logout');

Route::get('/pengguna/login',[PenggunaLoginController::class, 'showLoginForm'])->name('pengguna.login');
Route::post('/pengguna/login', [PenggunaLoginController::class, 'login'])->name('pengguna.login.submit');
Route::get('/pengguna/logout', [PenggunaLoginController::class, 'logout'])->name('pengguna.logout');

Route::prefix('razen-politik')->group(function(){
    Route::group(['middleware' => 'auth:razen_politik'], function(){
        @include('razen-politik.php');
    });
});

Route::prefix('pengguna')->group(function(){
    Route::group(['middleware' => 'auth:pengguna'], function(){
        @include('pengguna.php');
    });
});
