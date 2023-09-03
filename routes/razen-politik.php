<?php
use App\Http\Controllers\RazenPolitik\Admin\DashboardController;
// Admin
use App\Http\Controllers\RazenPolitik\Admin\ProfilController;
use App\Http\Controllers\RazenPolitik\Admin\PemiluController;

// Master Data
use App\Http\Controllers\RazenPolitik\MasterData\JenisIsuController;
use App\Http\Controllers\RazenPolitik\MasterData\JabatanPilihanController;
use App\Http\Controllers\RazenPolitik\MasterData\JenisSurveyController;
use App\Http\Controllers\RazenPolitik\MasterData\DptController;
use App\Http\Controllers\RazenPolitik\MasterData\TpsController;
use App\Http\Controllers\RazenPolitik\MasterData\ProvinsiController;
use App\Http\Controllers\RazenPolitik\MasterData\KabupatenKotaController;
use App\Http\Controllers\RazenPolitik\MasterData\KecamatanController;
use App\Http\Controllers\RazenPolitik\MasterData\KelurahanController;
use App\Http\Controllers\RazenPolitik\MasterData\DapilController;

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

    Route::prefix('pemilu')->group(function(){
        Route::get('/', [PemiluController::class, 'index'])->name('razen-politik.admin.pemilu.index');
        Route::get('/detail/{id}', [PemiluController::class, 'show'])->name('razen-politik.admin.pemilu.show');
        Route::post('/',[PemiluController::class, 'store'])->name('razen-politik.admin.pemilu.store');
        Route::get('/edit/{id}',[PemiluController::class, 'edit'])->name('razen-politik.admin.pemilu.edit');
        Route::post('/update',[PemiluController::class, 'update'])->name('razen-politik.admin.pemilu.update');
        Route::get('/destroy/{id}',[PemiluController::class, 'destroy'])->name('razen-politik.admin.pemilu.destroy');
    });
});

Route::prefix('master-data')->group(function(){
    Route::prefix('jenis-survey')->group(function(){
        Route::get('/', [JenisSurveyController::class, 'index'])->name('razen-politik.master-data.jenis-survey.index');
        Route::get('/detail/{id}', [JenisSurveyController::class, 'show'])->name('razen-politik.master-data.jenis-survey.show');
        Route::post('/',[JenisSurveyController::class, 'store'])->name('razen-politik.master-data.jenis-survey.store');
        Route::get('/edit/{id}',[JenisSurveyController::class, 'edit'])->name('razen-politik.master-data.jenis-survey.edit');
        Route::post('/update',[JenisSurveyController::class, 'update'])->name('razen-politik.master-data.jenis-survey.update');
        Route::get('/destroy/{id}',[JenisSurveyController::class, 'destroy'])->name('razen-politik.master-data.jenis-survey.destroy');
    });

    Route::prefix('jabatan-pilihan')->group(function(){
        Route::get('/', [JabatanPilihanController::class, 'index'])->name('razen-politik.master-data.jabatan-pilihan.index');
        Route::get('/detail/{id}', [JabatanPilihanController::class, 'show'])->name('razen-politik.master-data.jabatan-pilihan.show');
        Route::post('/',[JabatanPilihanController::class, 'store'])->name('razen-politik.master-data.jabatan-pilihan.store');
        Route::get('/edit/{id}',[JabatanPilihanController::class, 'edit'])->name('razen-politik.master-data.jabatan-pilihan.edit');
        Route::post('/update',[JabatanPilihanController::class, 'update'])->name('razen-politik.master-data.jabatan-pilihan.update');
        Route::get('/destroy/{id}',[JabatanPilihanController::class, 'destroy'])->name('razen-politik.master-data.jabatan-pilihan.destroy');
    });

    Route::prefix('dpt')->group(function(){
        Route::get('/', [DptController::class, 'index'])->name('razen-politik.master-data.dpt.index');
        Route::get('/detail/{id}', [DptController::class, 'show'])->name('razen-politik.master-data.dpt.show');
        Route::post('/',[DptController::class, 'store'])->name('razen-politik.master-data.dpt.store');
        Route::get('/edit/{id}',[DptController::class, 'edit'])->name('razen-politik.master-data.dpt.edit');
        Route::post('/update',[DptController::class, 'update'])->name('razen-politik.master-data.dpt.update');
        Route::get('/destroy/{id}',[DptController::class, 'destroy'])->name('razen-politik.master-data.dpt.destroy');
    });

    Route::prefix('tps')->group(function(){
        Route::get('/', [TpsController::class, 'index'])->name('razen-politik.master-data.tps.index');
        Route::get('/detail/{id}', [TpsController::class, 'show'])->name('razen-politik.master-data.tps.show');
        Route::post('/',[TpsController::class, 'store'])->name('razen-politik.master-data.tps.store');
        Route::get('/edit/{id}',[TpsController::class, 'edit'])->name('razen-politik.master-data.tps.edit');
        Route::post('/update',[TpsController::class, 'update'])->name('razen-politik.master-data.tps.update');
        Route::get('/destroy/{id}',[TpsController::class, 'destroy'])->name('razen-politik.master-data.tps.destroy');
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

    Route::prefix('jenis-isu')->group(function(){
        Route::get('/', [JenisIsuController::class, 'index'])->name('razen-politik.master-data.jenis-isu.index');
        Route::get('/detail/{id}', [JenisIsuController::class, 'show'])->name('razen-politik.master-data.jenis-isu.show');
        Route::post('/',[JenisIsuController::class, 'store'])->name('razen-politik.master-data.jenis-isu.store');
        Route::get('/edit/{id}',[JenisIsuController::class, 'edit'])->name('razen-politik.master-data.jenis-isu.edit');
        Route::post('/update',[JenisIsuController::class, 'update'])->name('razen-politik.master-data.jenis-isu.update');
        Route::get('/destroy/{id}',[JenisIsuController::class, 'destroy'])->name('razen-politik.master-data.jenis-isu.destroy');
    });

    Route::prefix('dapil')->group(function(){
        Route::get('/', [DapilController::class, 'index'])->name('razen-politik.master-data.dapil.index');
        Route::get('/detail/{id}', [DapilController::class, 'show'])->name('razen-politik.master-data.dapil.show');
        Route::post('/',[DapilController::class, 'store'])->name('razen-politik.master-data.dapil.store');
        Route::get('/edit/{id}',[DapilController::class, 'edit'])->name('razen-politik.master-data.dapil.edit');
        Route::post('/update',[DapilController::class, 'update'])->name('razen-politik.master-data.dapil.update');
        Route::get('/destroy/{id}',[DapilController::class, 'destroy'])->name('razen-politik.master-data.dapil.destroy');
    });
});
