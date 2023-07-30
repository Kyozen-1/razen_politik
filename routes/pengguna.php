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

Route::prefix('dashboard')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('pengguna.dashboard.index');
    Route::post('/change', [DashboardController::class, 'change'])->name('pengguna.dashboard.change');
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

    Route::prefix('jadwal-kunjungan-relawan')->group(function(){
        Route::get('/', [JadwalKunjunganRelawanController::class, 'index'])->name('pengguna.koordinator.jadwal-kunjungan-relawan.index');
    });
});

Route::prefix('relawan')->group(function(){
    Route::prefix('list-relawan')->group(function(){
        Route::get('/', [ListRelawanController::class, 'index'])->name('pengguna.relawan.list-relawan.index');
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
});

Route::prefix('data-dpt')->group(function(){
    Route::get('/', [DataDptController::class, 'index'])->name('pengguna.data-dpt.index');
});

Route::prefix('data-pemilih')->group(function(){
    Route::get('/', [DataPemilihController::class, 'index'])->name('pengguna.data-pemilih.index');
});

Route::prefix('simulasi-kemenangan')->group(function(){
    Route::get('/', [SimulasiKemenanganController::class, 'index'])->name('pengguna.simulasi-kemenangan.index');
});

Route::prefix('monitoring-isu')->group(function(){
    Route::get('/', [MonitoringIsuController::class, 'index'])->name('pengguna.monitoring-isu.index');
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
