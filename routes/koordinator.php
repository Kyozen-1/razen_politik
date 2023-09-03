<?php
use App\Http\Controllers\Koordinator\DashboardController;
use App\Http\Controllers\Koordinator\KoordinatorProfilController;
use App\Http\Controllers\Koordinator\GetDataController;
use App\Http\Controllers\Koordinator\JadwalKunjunganRelawanController;

Route::prefix('dashboard')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('koordinator.dashboard.index');
    Route::post('/change', [DashboardController::class, 'change'])->name('koordinator.dashboard.change');
});

Route::prefix('profil')->group(function(){
    Route::get('/', [KoordinatorProfilController::class, 'index'])->name('koordinator.profil.index');
    Route::post('/', [KoordinatorProfilController::class, 'store'])->name('koordinator.profil.store');
    Route::post('/ganti-password', [KoordinatorProfilController::class, 'ganti_password'])->name('koordinator.profil.ganti-password');
});

Route::prefix('get-data')->group(function(){
    Route::post('/kabupaten', [GetDataController::class, 'get_data_kabupaten'])->name('koordinator.get-data.kabupaten');
    Route::post('/kecamatan', [GetDataController::class, 'get_data_kecamatan'])->name('koordinator.get-data.kecamatan');
    Route::post('/kelurahan', [GetDataController::class, 'get_data_kelurahan'])->name('koordinator.get-data.kelurahan');
});

Route::prefix('jadwal-kunjungan-relawan')->group(function(){
    Route::get('/', [JadwalKunjunganRelawanController::class, 'index'])->name('koordinator.jadwal-kunjungan-relawan.index');
    Route::get('/detail/{id}', [JadwalKunjunganRelawanController::class, 'show'])->name('koordinator.jadwal-kunjungan-relawan.show');
    Route::post('/',[JadwalKunjunganRelawanController::class, 'store'])->name('koordinator.jadwal-kunjungan-relawan.store');
    Route::get('/edit/{id}',[JadwalKunjunganRelawanController::class, 'edit'])->name('koordinator.jadwal-kunjungan-relawan.edit');
    Route::post('/update',[JadwalKunjunganRelawanController::class, 'update'])->name('koordinator.jadwal-kunjungan-relawan.update');
    Route::get('/destroy/{id}',[JadwalKunjunganRelawanController::class, 'destroy'])->name('koordinator.jadwal-kunjungan-relawan.destroy');
});
