<?php
use App\Http\Controllers\Pengguna\DashboardController;
use App\Http\Controllers\Pengguna\DataTpsController;
use App\Http\Controllers\Pengguna\DataJumlahDptController;
use App\Http\Controllers\Pengguna\KoordinatorController;
use App\Http\Controllers\Pengguna\JadwalKunjunganRelawanController;
use App\Http\Controllers\Pengguna\ListRelawanController;
use App\Http\Controllers\Pengguna\RiwayatKunjunganController;
use App\Http\Controllers\Pengguna\RuteHarianController;
use App\Http\Controllers\Pengguna\SaksiController;
use App\Http\Controllers\Pengguna\DataDptController;
use App\Http\Controllers\Pengguna\DataPemilihController;
use App\Http\Controllers\Pengguna\SimulasiKemenanganController;
use App\Http\Controllers\Pengguna\MonitoringIsuController;
use App\Http\Controllers\Pengguna\Logistik\StokController;
use App\Http\Controllers\Pengguna\Logistik\PemesananController;
use App\Http\Controllers\Pengguna\Logistik\PenerimaanController;
use App\Http\Controllers\Pengguna\Logistik\PengeluaranController;
use App\Http\Controllers\Pengguna\Rekapitulasi\KoordinatorController as RekapitulasiKoordinatorController;
use App\Http\Controllers\Pengguna\Rekapitulasi\RelawanController;
use App\Http\Controllers\Pengguna\Rekapitulasi\SaksiController as RekapitulasiSaksiController;
use App\Http\Controllers\Pengguna\Rekapitulasi\PemilihPendukungController;
use App\Http\Controllers\Pengguna\Rekapitulasi\DptController;
use App\Http\Controllers\Pengguna\Rekapitulasi\DptManualController;
use App\Http\Controllers\Pengguna\Rekapitulasi\TpsController;
use App\Http\Controllers\Pengguna\QuickCount\InputDataController;
use App\Http\Controllers\Pengguna\QuickCount\HasilController;
use App\Http\Controllers\Pengguna\RealCount\InputDataController as RealCountInputDataController;
use App\Http\Controllers\Pengguna\RealCount\HasilController as RealCountHasilController;
use App\Http\Controllers\Pengguna\UserController;
use App\Http\Controllers\Pengguna\RoleController;
use App\Http\Controllers\Pengguna\GetDataController;
use App\Http\Controllers\Pengguna\PenggunaProfilController;

Route::prefix('dashboard')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('pengguna.dashboard.index');
    Route::post('/change', [DashboardController::class, 'change'])->name('pengguna.dashboard.change');
});

Route::prefix('profil')->group(function(){
    Route::get('/', [PenggunaProfilController::class, 'index'])->name('pengguna.profil.index');
    Route::post('/', [PenggunaProfilController::class, 'store'])->name('pengguna.profil.store');
    Route::post('/ganti-password', [PenggunaProfilController::class, 'ganti_password'])->name('pengguna.profil.ganti-password');
});

Route::prefix('master-data')->group(function(){
    Route::prefix('tps')->group(function(){
        Route::get('/', [DataTpsController::class, 'index'])->name('pengguna.master-data.tps.index');
    });

    Route::prefix('jumlah-dpt')->group(function(){
        Route::get('/', [DataJumlahDptController::class, 'index'])->name('pengguna.master-data.jumlah-dpt.index');
    });
});

Route::prefix('koordinator')->group(function(){
    Route::get('/', [KoordinatorController::class, 'index'])->name('pengguna.koordinator.index');
    Route::get('/detail/{id}', [KoordinatorController::class, 'show'])->name('pengguna.koordinator.show');
    Route::post('/',[KoordinatorController::class, 'store'])->name('pengguna.koordinator.store');
    Route::get('/edit/{id}',[KoordinatorController::class, 'edit'])->name('pengguna.koordinator.edit');
    Route::post('/update',[KoordinatorController::class, 'update'])->name('pengguna.koordinator.update');
    Route::get('/destroy/{id}',[KoordinatorController::class, 'destroy'])->name('pengguna.koordinator.destroy');

    Route::prefix('jadwal-kunjungan-relawan')->group(function(){
        Route::get('/', [JadwalKunjunganRelawanController::class, 'index'])->name('pengguna.koordinator.jadwal-kunjungan-relawan.index');
        Route::get('/detail/{id}', [JadwalKunjunganRelawanController::class, 'show'])->name('pengguna.koordinator.jadwal-kunjungan-relawan.show');
        Route::post('/',[JadwalKunjunganRelawanController::class, 'store'])->name('pengguna.koordinator.jadwal-kunjungan-relawan.store');
        Route::get('/edit/{id}',[JadwalKunjunganRelawanController::class, 'edit'])->name('pengguna.koordinator.jadwal-kunjungan-relawan.edit');
        Route::post('/update',[JadwalKunjunganRelawanController::class, 'update'])->name('pengguna.koordinator.jadwal-kunjungan-relawan.update');
        Route::get('/destroy/{id}',[JadwalKunjunganRelawanController::class, 'destroy'])->name('pengguna.koordinator.jadwal-kunjungan-relawan.destroy');
    });
});

Route::prefix('relawan')->group(function(){
    Route::prefix('list-relawan')->group(function(){
        Route::get('/', [ListRelawanController::class, 'index'])->name('pengguna.relawan.list-relawan.index');
        Route::get('/detail/{id}', [ListRelawanController::class, 'show'])->name('pengguna.relawan.list-relawan.show');
        Route::post('/',[ListRelawanController::class, 'store'])->name('pengguna.relawan.list-relawan.store');
        Route::get('/edit/{id}',[ListRelawanController::class, 'edit'])->name('pengguna.relawan.list-relawan.edit');
        Route::post('/update',[ListRelawanController::class, 'update'])->name('pengguna.relawan.list-relawan.update');
        Route::get('/destroy/{id}',[ListRelawanController::class, 'destroy'])->name('pengguna.relawan.list-relawan.destroy');
    });

    Route::prefix('riwayat-kunjungan')->group(function(){
        Route::get('/', [RiwayatKunjunganController::class, 'index'])->name('pengguna.relawan.riwayat-kunjungan.index');
    });

    Route::prefix('rute-harian')->group(function(){
        Route::get('/', [RuteHarianController::class, 'index'])->name('pengguna.relawan.rute-harian.index');
    });
});

Route::prefix('saksi')->group(function(){
    Route::get('/', [SaksiController::class, 'index'])->name('pengguna.saksi.index');
    Route::get('/detail/{id}', [SaksiController::class, 'show'])->name('pengguna.saksi.show');
    Route::post('/',[SaksiController::class, 'store'])->name('pengguna.saksi.store');
    Route::get('/edit/{id}',[SaksiController::class, 'edit'])->name('pengguna.saksi.edit');
    Route::post('/update',[SaksiController::class, 'update'])->name('pengguna.saksi.update');
    Route::get('/destroy/{id}',[SaksiController::class, 'destroy'])->name('pengguna.saksi.destroy');
});

Route::prefix('data-dpt')->group(function(){
    Route::get('/', [DataDptController::class, 'index'])->name('pengguna.data-dpt.index');
    Route::get('/detail/{id}', [DataDptController::class, 'show'])->name('pengguna.data-dpt.show');
    Route::get('/destroy/{id}',[DataDptController::class, 'destroy'])->name('pengguna.data-dpt.destroy');
    Route::post('/get-data/dapil',[DataDptController::class, 'get_data_dapil'])->name('pengguna.data-dpt.get-data-dapil');
    Route::post('/impor', [DataDptController::class, 'impor'])->name('pengguna.data-dpt.impor');
});

Route::prefix('data-pemilih')->group(function(){
    Route::get('/', [DataPemilihController::class, 'index'])->name('pengguna.data-pemilih.index');
    Route::get('/detail/{id}', [DataPemilihController::class, 'show'])->name('pengguna.data-pemilih.show');
    Route::get('/destroy/{id}',[DataPemilihController::class, 'destroy'])->name('pengguna.data-pemilih.destroy');
    Route::post('/get-data/dapil',[DataPemilihController::class, 'get_data_dapil'])->name('pengguna.data-pemilih.get-data-dapil');
    Route::post('/impor', [DataPemilihController::class, 'impor'])->name('pengguna.data-pemilih.impor');
});

Route::prefix('simulasi-kemenangan')->group(function(){
    Route::get('/', [SimulasiKemenanganController::class, 'index'])->name('pengguna.simulasi-kemenangan.index');
});

Route::prefix('monitoring-isu')->group(function(){
    Route::get('/', [MonitoringIsuController::class, 'index'])->name('pengguna.monitoring-isu.index');
    Route::get('/detail/{id}', [MonitoringIsuController::class, 'show'])->name('pengguna.monitoring-isu.show');
    Route::post('/',[MonitoringIsuController::class, 'store'])->name('pengguna.monitoring-isu.store');
    Route::get('/edit/{id}',[MonitoringIsuController::class, 'edit'])->name('pengguna.monitoring-isu.edit');
    Route::post('/update',[MonitoringIsuController::class, 'update'])->name('pengguna.monitoring-isu.update');
    Route::get('/destroy/{id}',[MonitoringIsuController::class, 'destroy'])->name('pengguna.monitoring-isu.destroy');
});

Route::prefix('logistik')->group(function(){
    Route::prefix('stok')->group(function(){
        Route::get('/', [StokController::class, 'index'])->name('pengguna.logistik.stok.index');
    });

    Route::prefix('pemesanan')->group(function(){
        Route::get('/', [PemesananController::class, 'index'])->name('pengguna.logistik.pemesanan.index');
    });

    Route::prefix('penerimaan')->group(function(){
        Route::get('/', [PenerimaanController::class, 'index'])->name('pengguna.logistik.penerimaan.index');
    });

    Route::prefix('pengeluaran')->group(function(){
        Route::get('/', [PengeluaranController::class, 'index'])->name('pengguna.logistik.pengeluaran.index');
    });
});

Route::prefix('rekapitulasi')->group(function(){
    Route::prefix('koordinator')->group(function(){
        Route::get('/', [RekapitulasiKoordinatorController::class, 'index'])->name('pengguna.rekapitulasi.koordinator.index');
    });
    Route::prefix('relawan')->group(function(){
        Route::get('/', [RelawanController::class, 'index'])->name('pengguna.rekapitulasi.relawan.index');
    });
    Route::prefix('saksi')->group(function(){
        Route::get('/', [RekapitulasiSaksiController::class, 'index'])->name('pengguna.rekapitulasi.saksi.index');
    });
    Route::prefix('pemilih-pendukung')->group(function(){
        Route::get('/', [PemilihPendukungController::class, 'index'])->name('pengguna.rekapitulasi.pemilih-pendukung.index');
    });
    Route::prefix('dpt')->group(function(){
        Route::get('/', [DptController::class, 'index'])->name('pengguna.rekapitulasi.dpt.index');
    });
    Route::prefix('dpt-manual')->group(function(){
        Route::get('/', [DptManualController::class, 'index'])->name('pengguna.rekapitulasi.dpt-manual.index');
    });
    Route::prefix('tps')->group(function(){
        Route::get('/', [TpsController::class, 'index'])->name('pengguna.rekapitulasi.tps.index');
    });
});

Route::prefix('quick-count')->group(function(){
    Route::prefix('input-data')->group(function(){
        Route::get('/', [InputDataController::class, 'index'])->name('pengguna.quick-count.input-data.index');
    });

    Route::prefix('hasil')->group(function(){
        Route::get('/', [HasilController::class, 'index'])->name('pengguna.quick-count.hasil.index');
    });
});

Route::prefix('real-count')->group(function(){
    Route::prefix('input-data')->group(function(){
        Route::get('/', [RealCountInputDataController::class, 'index'])->name('pengguna.real-count.input-data.index');
    });

    Route::prefix('hasil')->group(function(){
        Route::get('/', [RealCountHasilController::class, 'index'])->name('pengguna.real-count.hasil.index');
    });
});

Route::prefix('user')->group(function(){
    Route::get('/', [UserController::class, 'index'])->name('pengguna.user.index');
});

Route::prefix('role')->group(function(){
    Route::get('/', [RoleController::class, 'index'])->name('pengguna.role.index');
});

Route::prefix('get-data')->group(function(){
    Route::post('/kabupaten', [GetDataController::class, 'get_data_kabupaten'])->name('pengguna.get-data.kabupaten');
    Route::post('/kecamatan', [GetDataController::class, 'get_data_kecamatan'])->name('pengguna.get-data.kecamatan');
    Route::post('/kelurahan', [GetDataController::class, 'get_data_kelurahan'])->name('pengguna.get-data.kelurahan');
    Route::post('/relawan', [GetDataController::class, 'get_data_relawan'])->name('pengguna.get-data.relawan');
});
