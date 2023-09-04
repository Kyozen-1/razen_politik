<?php
use App\Http\Controllers\Koordinator\DashboardController;
use App\Http\Controllers\Koordinator\KoordinatorProfilController;
use App\Http\Controllers\Koordinator\GetDataController;
use App\Http\Controllers\Koordinator\JadwalKunjunganRelawanController;
use App\Http\Controllers\Koordinator\DataDptController;
use App\Http\Controllers\Koordinator\DataPemilihController;

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

Route::prefix('data-dpt')->group(function(){
    Route::get('/', [DataDptController::class, 'index'])->name('koordinator.data-dpt.index');
    Route::get('/detail/{id}', [DataDptController::class, 'show'])->name('koordinator.data-dpt.show');
    Route::get('/destroy/{id}',[DataDptController::class, 'destroy'])->name('koordinator.data-dpt.destroy');
    Route::post('/get-data/dapil',[DataDptController::class, 'get_data_dapil'])->name('koordinator.data-dpt.get-data-dapil');
    Route::post('/impor', [DataDptController::class, 'impor'])->name('koordinator.data-dpt.impor');
});

Route::prefix('data-pemilih')->group(function(){
    Route::get('/', [DataPemilihController::class, 'index'])->name('koordinator.data-pemilih.index');
    Route::get('/detail/{id}', [DataPemilihController::class, 'show'])->name('koordinator.data-pemilih.show');
    Route::get('/destroy/{id}',[DataPemilihController::class, 'destroy'])->name('koordinator.data-pemilih.destroy');
    Route::post('/get-data/dapil',[DataPemilihController::class, 'get_data_dapil'])->name('koordinator.data-pemilih.get-data-dapil');
    Route::post('/impor', [DataPemilihController::class, 'impor'])->name('koordinator.data-pemilih.impor');
});
