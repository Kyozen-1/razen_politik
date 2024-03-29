<?php
use App\Http\Controllers\Relawan\DashboardController;
use App\Http\Controllers\Relawan\RelawanProfilController;
use App\Http\Controllers\Relawan\GetDataController;
use App\Http\Controllers\Relawan\JadwalKunjunganRelawanController;
use App\Http\Controllers\Relawan\DataDptController;
use App\Http\Controllers\Relawan\DataPemilihController;

Route::prefix('dashboard')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('relawan.dashboard.index');
    Route::post('/change', [DashboardController::class, 'change'])->name('relawan.dashboard.change');
});

Route::prefix('profil')->group(function(){
    Route::get('/', [RelawanProfilController::class, 'index'])->name('relawan.profil.index');
    Route::post('/', [RelawanProfilController::class, 'store'])->name('relawan.profil.store');
    Route::post('/ganti-password', [RelawanProfilController::class, 'ganti_password'])->name('relawan.profil.ganti-password');
});

Route::prefix('get-data')->group(function(){
    Route::post('/kabupaten', [GetDataController::class, 'get_data_kabupaten'])->name('relawan.get-data.kabupaten');
    Route::post('/kecamatan', [GetDataController::class, 'get_data_kecamatan'])->name('relawan.get-data.kecamatan');
    Route::post('/kelurahan', [GetDataController::class, 'get_data_kelurahan'])->name('relawan.get-data.kelurahan');
});

Route::prefix('jadwal-kunjungan-relawan')->group(function(){
    Route::get('/', [JadwalKunjunganRelawanController::class, 'index'])->name('relawan.jadwal-kunjungan-relawan.index');
    Route::get('/detail/{id}', [JadwalKunjunganRelawanController::class, 'show'])->name('relawan.jadwal-kunjungan-relawan.show');
    Route::post('/impor',[JadwalKunjunganRelawanController::class, 'impor'])->name('relawan.jadwal-kunjungan-relawan.impor');
});

Route::prefix('data-dpt')->group(function(){
    Route::get('/', [DataDptController::class, 'index'])->name('relawan.data-dpt.index');
    Route::get('/detail/{id}', [DataDptController::class, 'show'])->name('relawan.data-dpt.show');
    Route::get('/destroy/{id}',[DataDptController::class, 'destroy'])->name('relawan.data-dpt.destroy');
    Route::post('/get-data/dapil',[DataDptController::class, 'get_data_dapil'])->name('relawan.data-dpt.get-data-dapil');
    Route::post('/impor', [DataDptController::class, 'impor'])->name('relawan.data-dpt.impor');
});

Route::prefix('data-pemilih')->group(function(){
    Route::get('/', [DataPemilihController::class, 'index'])->name('relawan.data-pemilih.index');
    Route::get('/detail/{id}', [DataPemilihController::class, 'show'])->name('relawan.data-pemilih.show');
    Route::get('/destroy/{id}',[DataPemilihController::class, 'destroy'])->name('relawan.data-pemilih.destroy');
    Route::post('/get-data/dapil',[DataPemilihController::class, 'get_data_dapil'])->name('relawan.data-pemilih.get-data-dapil');
    Route::post('/impor', [DataPemilihController::class, 'impor'])->name('relawan.data-pemilih.impor');
});
