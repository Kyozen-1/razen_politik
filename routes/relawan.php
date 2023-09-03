<?php
use App\Http\Controllers\Relawan\DashboardController;
use App\Http\Controllers\Relawan\RelawanProfilController;
use App\Http\Controllers\Relawan\GetDataController;
use App\Http\Controllers\Relawan\JadwalKunjunganRelawanController;

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
