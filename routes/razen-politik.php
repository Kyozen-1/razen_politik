<?php
use App\Http\Controllers\RazenPolitik\Admin\DashboardController;
// Admin
use App\Http\Controllers\RazenPolitik\Admin\ProfilController;

// Master Data
use App\Http\Controllers\RazenPolitik\MasterData\DptController;
use App\Http\Controllers\RazenPolitik\MasterData\ProvinsiController;
use App\Http\Controllers\RazenPolitik\MasterData\KabupatenKotaController;
use App\Http\Controllers\RazenPolitik\MasterData\KecamatanController;
use App\Http\Controllers\RazenPolitik\MasterData\KelurahanController;

Route::prefix('admin')->group(function(){
    Route::prefix('dashboard')->group(function(){
        Route::get('/', [DashboardController::class, 'index'])->name('razen-politik.admin.dashboard.index');
        Route::post('/change', [DashboardController::class, 'change'])->name('razen-politik.admin.dashboard.change');
    });

    Route::prefix('profil')->group(function(){
        Route::get('/', [ProfilController::class, 'index'])->name('razen-politik.admin.profil.index');
        Route::get('/detail/{id}', [ProfilController::class, 'show']);
        Route::post('/',[ProfilController::class, 'store'])->name('razen-politik.admin.profil.store');
        Route::get('/edit/{id}',[ProfilController::class, 'edit']);
        Route::post('/update',[ProfilController::class, 'update'])->name('razen-politik.admin.profil.update');
        Route::get('/destroy/{id}',[ProfilController::class, 'destroy']);
        Route::post('/edit-media-sosial-profil', [ProfilController::class, 'edit_media_sosial_profil'])->name('razen-politik.admin.profil.edit-media-sosial-profil');
        Route::post('/tambah-media-sosial-profil', [ProfilController::class, 'tambah_media_sosial_profil'])->name('razen-politik.admin.profil.tambah-media-sosial-profil');
    });
});

Route::prefix('master-data')->group(function(){
    Route::prefix('dpt')->group(function(){
        Route::get('/', [DptController::class, 'index'])->name('razen-politik.master-data.dpt.index');
        Route::get('/detail/{id}', [DptController::class, 'show'])->name('razen-politik.master-data.dpt.show');
        Route::post('/',[DptController::class, 'store'])->name('razen-politik.master-data.dpt.store');
        Route::get('/edit/{id}',[DptController::class, 'edit'])->name('razen-politik.master-data.dpt.edit');
        Route::post('/update',[DptController::class, 'update'])->name('razen-politik.master-data.dpt.update');
        Route::get('/destroy/{id}',[DptController::class, 'destroy'])->name('razen-politik.master-data.dpt.destroy');
    });

    Route::prefix('provinsi')->group(function(){
        Route::get('/', [ProvinsiController::class, 'index'])->name('razen-politik.master-data.provinsi.index');
        Route::get('/detail/{id}', [ProvinsiController::class, 'show'])->name('razen-politik.master-data.provinsi.show');
        Route::post('/',[ProvinsiController::class, 'store'])->name('razen-politik.master-data.provinsi.store');
        Route::get('/edit/{id}',[ProvinsiController::class, 'edit'])->name('razen-politik.master-data.provinsi.edit');
        Route::post('/update',[ProvinsiController::class, 'update'])->name('razen-politik.master-data.provinsi.update');
        Route::get('/destroy/{id}',[ProvinsiController::class, 'destroy'])->name('razen-politik.master-data.provinsi.destroy');
        Route::post('/impor',[ProvinsiController::class, 'impor'])->name('razen-politik.master-data.provinsi.impor');
    });

    Route::prefix('kabupaten-kota')->group(function(){
        Route::get('/', [KabupatenKotaController::class, 'index'])->name('razen-politik.master-data.kabupaten-kota.index');
        Route::get('/detail/{id}', [KabupatenKotaController::class, 'show'])->name('razen-politik.master-data.kabupaten-kota.show');
        Route::post('/',[KabupatenKotaController::class, 'store'])->name('razen-politik.master-data.kabupaten-kota.store');
        Route::get('/edit/{id}',[KabupatenKotaController::class, 'edit'])->name('razen-politik.master-data.kabupaten-kota.edit');
        Route::post('/update',[KabupatenKotaController::class, 'update'])->name('razen-politik.master-data.kabupaten-kota.update');
        Route::get('/destroy/{id}',[KabupatenKotaController::class, 'destroy'])->name('razen-politik.master-data.kabupaten-kota.destroy');
        Route::post('/impor',[KabupatenKotaController::class, 'impor'])->name('razen-politik.master-data.kabupaten-kota.impor');
    });

    Route::prefix('kecamatan')->group(function(){
        Route::get('/', [KecamatanController::class, 'index'])->name('razen-politik.master-data.kecamatan.index');
        Route::get('/detail/{id}', [KecamatanController::class, 'show'])->name('razen-politik.master-data.kecamatan.show');
        Route::post('/',[KecamatanController::class, 'store'])->name('razen-politik.master-data.kecamatan.store');
        Route::get('/edit/{id}',[KecamatanController::class, 'edit'])->name('razen-politik.master-data.kecamatan.edit');
        Route::post('/update',[KecamatanController::class, 'update'])->name('razen-politik.master-data.kecamatan.update');
        Route::get('/destroy/{id}',[KecamatanController::class, 'destroy'])->name('razen-politik.master-data.kecamatan.destroy');
        Route::post('/get-kabupaten',[KecamatanController::class, 'get_kabupaten'])->name('razen-politik.master-data.kecamatan.get-kabupaten');
        Route::post('/impor',[KecamatanController::class, 'impor'])->name('razen-politik.master-data.kecamatan.impor');
    });

    Route::prefix('kelurahan')->group(function(){
        Route::get('/', [KelurahanController::class, 'index'])->name('razen-politik.master-data.kelurahan.index');
        Route::get('/detail/{id}', [KelurahanController::class, 'show'])->name('razen-politik.master-data.kelurahan.show');
        Route::post('/',[KelurahanController::class, 'store'])->name('razen-politik.master-data.kelurahan.store');
        Route::get('/edit/{id}',[KelurahanController::class, 'edit'])->name('razen-politik.master-data.kelurahan.edit');
        Route::post('/update',[KelurahanController::class, 'update'])->name('razen-politik.master-data.kelurahan.update');
        Route::get('/destroy/{id}',[KelurahanController::class, 'destroy'])->name('razen-politik.master-data.kelurahan.destroy');
        Route::post('/get-kecamatan',[KelurahanController::class, 'get_kecamatan'])->name('razen-politik.master-data.kelurahan.get-kecamatan');
        Route::post('/impor',[KelurahanController::class, 'impor'])->name('razen-politik.master-data.kelurahan.impor');
    });
});
