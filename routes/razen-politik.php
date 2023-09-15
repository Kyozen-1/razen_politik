<?php
use App\Http\Controllers\RazenPolitik\Admin\DashboardController;
// Admin
use App\Http\Controllers\RazenPolitik\Admin\ProfilController;
use App\Http\Controllers\RazenPolitik\Admin\PemiluController;
use App\Http\Controllers\RazenPolitik\Admin\TestimoniController as AdminTestimoniController;
use App\Http\Controllers\RazenPolitik\Admin\TimController;
use App\Http\Controllers\RazenPolitik\Admin\PaketController;

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
use App\Http\Controllers\RazenPolitik\MasterData\MediaSosialController;
use App\Http\Controllers\RazenPolitik\MasterData\MasterRoleController;
use App\Http\Controllers\RazenPolitik\MasterData\MasterPaketController;
use App\Http\Controllers\RazenPolitik\MasterData\MasterFiturController;

// Landing Page
use App\Http\Controllers\RazenPolitik\LandingPage\BerandaController;
use App\Http\Controllers\RazenPolitik\LandingPage\TentangKamiController;
use App\Http\Controllers\RazenPolitik\LandingPage\HargaController;
use App\Http\Controllers\RazenPolitik\LandingPage\ArtikelController;
use App\Http\Controllers\RazenPolitik\LandingPage\BantuanController;
use App\Http\Controllers\RazenPolitik\LandingPage\TestimoniController;
use App\Http\Controllers\RazenPolitik\LandingPage\FooterController;
use App\Http\Controllers\RazenPolitik\LandingPage\ProdukLainController as LandingPageProdukLainController;

// Penawaran
use App\Http\Controllers\RazenPolitik\Penawaran\ProdukLainController;

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

    Route::prefix('testimoni')->group(function(){
        Route::get('/', [AdminTestimoniController::class, 'index'])->name('razen-politik.admin.testimoni.index');
        Route::get('/detail/{id}', [AdminTestimoniController::class, 'show'])->name('razen-politik.admin.testimoni.show');
        Route::post('/',[AdminTestimoniController::class, 'store'])->name('razen-politik.admin.testimoni.store');
        Route::get('/edit/{id}',[AdminTestimoniController::class, 'edit'])->name('razen-politik.admin.testimoni.edit');
        Route::post('/update',[AdminTestimoniController::class, 'update'])->name('razen-politik.admin.testimoni.update');
        Route::get('/destroy/{id}',[AdminTestimoniController::class, 'destroy'])->name('razen-politik.admin.testimoni.destroy');
    });

    Route::prefix('tim')->group(function(){
        Route::get('/', [TimController::class, 'index'])->name('razen-politik.admin.tim.index');
        Route::get('/detail/{id}', [TimController::class, 'show'])->name('razen-politik.admin.tim.show');
        Route::post('/',[TimController::class, 'store'])->name('razen-politik.admin.tim.store');
        Route::get('/edit/{id}',[TimController::class, 'edit'])->name('razen-politik.admin.tim.edit');
        Route::post('/update',[TimController::class, 'update'])->name('razen-politik.admin.tim.update');
        Route::get('/destroy/{id}',[TimController::class, 'destroy'])->name('razen-politik.admin.tim.destroy');
    });

    Route::prefix('paket')->group(function(){
        Route::get('/', [PaketController::class, 'index'])->name('razen-politik.admin.paket.index');
        Route::get('/atur-fitur/{id}', [PaketController::class, 'atur_fitur'])->name('razen-politik.admin.paket.atur-fitur');
        Route::post('/atur-fitur/{id}', [PaketController::class, 'atur_fitur_store'])->name('razen-politik.admin.paket.atur-fitur.store');
        Route::get('/detail/{id}', [PaketController::class, 'show'])->name('razen-politik.admin.paket.show');
        Route::post('/',[PaketController::class, 'store'])->name('razen-politik.admin.paket.store');
        Route::get('/edit/{id}',[PaketController::class, 'edit'])->name('razen-politik.admin.paket.edit');
        Route::post('/update',[PaketController::class, 'update'])->name('razen-politik.admin.paket.update');
        Route::get('/destroy/{id}',[PaketController::class, 'destroy'])->name('razen-politik.admin.paket.destroy');
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

    Route::prefix('media-sosial')->group(function(){
        Route::get('/', [MediaSosialController::class, 'index'])->name('razen-politik.master-data.media-sosial.index');
        Route::get('/detail/{id}', [MediaSosialController::class, 'show'])->name('razen-politik.master-data.media-sosial.show');
        Route::post('/',[MediaSosialController::class, 'store'])->name('razen-politik.master-data.media-sosial.store');
        Route::get('/edit/{id}',[MediaSosialController::class, 'edit'])->name('razen-politik.master-data.media-sosial.edit');
        Route::post('/update',[MediaSosialController::class, 'update'])->name('razen-politik.master-data.media-sosial.update');
        Route::get('/destroy/{id}',[MediaSosialController::class, 'destroy'])->name('razen-politik.master-data.media-sosial.destroy');
    });

    Route::prefix('role')->group(function(){
        Route::get('/', [MasterRoleController::class, 'index'])->name('razen-politik.master-data.role.index');
        Route::get('/detail/{id}', [MasterRoleController::class, 'show'])->name('razen-politik.master-data.role.show');
        Route::post('/',[MasterRoleController::class, 'store'])->name('razen-politik.master-data.role.store');
        Route::get('/edit/{id}',[MasterRoleController::class, 'edit'])->name('razen-politik.master-data.role.edit');
        Route::post('/update',[MasterRoleController::class, 'update'])->name('razen-politik.master-data.role.update');
        Route::get('/destroy/{id}',[MasterRoleController::class, 'destroy'])->name('razen-politik.master-data.role.destroy');
    });

    Route::prefix('paket')->group(function(){
        Route::get('/', [MasterPaketController::class, 'index'])->name('razen-politik.master-data.paket.index');
        Route::get('/detail/{id}', [MasterPaketController::class, 'show'])->name('razen-politik.master-data.paket.show');
        Route::post('/',[MasterPaketController::class, 'store'])->name('razen-politik.master-data.paket.store');
        Route::get('/edit/{id}',[MasterPaketController::class, 'edit'])->name('razen-politik.master-data.paket.edit');
        Route::post('/update',[MasterPaketController::class, 'update'])->name('razen-politik.master-data.paket.update');
        Route::get('/destroy/{id}',[MasterPaketController::class, 'destroy'])->name('razen-politik.master-data.paket.destroy');
    });

    Route::prefix('fitur')->group(function(){
        Route::get('/', [MasterFiturController::class, 'index'])->name('razen-politik.master-data.fitur.index');
        Route::get('/detail/{id}', [MasterFiturController::class, 'show'])->name('razen-politik.master-data.fitur.show');
        Route::post('/',[MasterFiturController::class, 'store'])->name('razen-politik.master-data.fitur.store');
        Route::get('/edit/{id}',[MasterFiturController::class, 'edit'])->name('razen-politik.master-data.fitur.edit');
        Route::post('/update',[MasterFiturController::class, 'update'])->name('razen-politik.master-data.fitur.update');
        Route::get('/destroy/{id}',[MasterFiturController::class, 'destroy'])->name('razen-politik.master-data.fitur.destroy');
    });
});

Route::prefix('landing-page')->group(function(){
    Route::prefix('beranda')->group(function(){
        Route::get('/', [BerandaController::class, 'index'])->name('razen-politik.landing-page.beranda.index');

        Route::post('/store/section-1', [BerandaController::class, 'store_section_1'])->name('razen-politik.landing-page.beranda.store.section-1');
        Route::post('/store/section-2', [BerandaController::class, 'store_section_2'])->name('razen-politik.landing-page.beranda.store.section-2');
        Route::post('/store/section-3', [BerandaController::class, 'store_section_3'])->name('razen-politik.landing-page.beranda.store.section-3');
        Route::post('/store/section-4', [BerandaController::class, 'store_section_4'])->name('razen-politik.landing-page.beranda.store.section-4');
        Route::post('/store/section-5', [BerandaController::class, 'store_section_5'])->name('razen-politik.landing-page.beranda.store.section-5');
        Route::post('/store/section-6', [BerandaController::class, 'store_section_6'])->name('razen-politik.landing-page.beranda.store.section-6');
    });

    Route::prefix('tentang-kami')->group(function(){
        Route::get('/', [TentangKamiController::class, 'index'])->name('razen-politik.landing-page.tentang-kami.index');

        Route::post('/store/section-1', [TentangKamiController::class, 'store_section_1'])->name('razen-politik.landing-page.tentang-kami.store.section-1');
        Route::post('/store/section-2', [TentangKamiController::class, 'store_section_2'])->name('razen-politik.landing-page.tentang-kami.store.section-2');
        Route::post('/store/section-2/konten', [TentangKamiController::class, 'store_section_2_konten'])->name('razen-politik.landing-page.tentang-kami.store.section-2.konten');
        Route::post('/hapus/section-2/konten', [TentangKamiController::class, 'hapus_section_2_konten'])->name('razen-politik.landing-page.tentang-kami.hapus.section-2.konten');
        Route::post('/store/section-3', [TentangKamiController::class, 'store_section_3'])->name('razen-politik.landing-page.tentang-kami.store.section-3');
        Route::post('/store/section-3/konten', [TentangKamiController::class, 'store_section_3_konten'])->name('razen-politik.landing-page.tentang-kami.store.section-3.konten');
        Route::post('/hapus/section-3/konten', [TentangKamiController::class, 'hapus_section_3_konten'])->name('razen-politik.landing-page.tentang-kami.hapus.section-3.konten');
        Route::post('/store/section-4', [TentangKamiController::class, 'store_section_4'])->name('razen-politik.landing-page.tentang-kami.store.section-4');
        Route::post('/store/section-5', [TentangKamiController::class, 'store_section_5'])->name('razen-politik.landing-page.tentang-kami.store.section-5');
        Route::post('/store/section-5/konten', [TentangKamiController::class, 'store_section_5_konten'])->name('razen-politik.landing-page.tentang-kami.store.section-5.konten');
        Route::post('/hapus/section-5/konten', [TentangKamiController::class, 'hapus_section_5_konten'])->name('razen-politik.landing-page.tentang-kami.hapus.section-5.konten');
    });

    Route::prefix('harga')->group(function(){
        Route::get('/', [HargaController::class, 'index'])->name('razen-politik.landing-page.harga.index');

        Route::post('/store/section-1', [HargaController::class, 'store_section_1'])->name('razen-politik.landing-page.harga.store.section-1');
        Route::post('/store/section-2', [HargaController::class, 'store_section_2'])->name('razen-politik.landing-page.harga.store.section-2');
        Route::post('/store/section-2/konten', [HargaController::class, 'store_section_2_konten'])->name('razen-politik.landing-page.harga.store.section-2.konten');
        Route::post('/hapus/section-2/konten', [HargaController::class, 'hapus_section_2_konten'])->name('razen-politik.landing-page.harga.hapus.section-2.konten');
    });

    Route::prefix('artikel')->group(function(){
        Route::get('/', [ArtikelController::class, 'index'])->name('razen-politik.landing-page.artikel.index');

        Route::post('/store/section-1', [ArtikelController::class, 'store_section_1'])->name('razen-politik.landing-page.artikel.store.section-1');
    });

    Route::prefix('bantuan')->group(function(){
        Route::get('/', [BantuanController::class, 'index'])->name('razen-politik.landing-page.bantuan.index');

        Route::post('/store/section-1', [BantuanController::class, 'store_section_1'])->name('razen-politik.landing-page.bantuan.store.section-1');
        Route::post('/store/section-2', [BantuanController::class, 'store_section_2'])->name('razen-politik.landing-page.bantuan.store.section-2');
        Route::post('/store/section-3', [BantuanController::class, 'store_section_3'])->name('razen-politik.landing-page.bantuan.store.section-3');
        Route::post('/store/section-4', [BantuanController::class, 'store_section_4'])->name('razen-politik.landing-page.bantuan.store.section-4');
    });

    Route::prefix('testimoni')->group(function(){
        Route::get('/', [TestimoniController::class, 'index'])->name('razen-politik.landing-page.testimoni.index');

        Route::post('/store/testimoni', [TestimoniController::class, 'store_testimoni'])->name('razen-politik.landing-page.testimoni.store.testimoni');
    });

    Route::prefix('footer')->group(function(){
        Route::get('/', [FooterController::class, 'index'])->name('razen-politik.landing-page.footer.index');

        Route::post('/store/footer', [FooterController::class, 'store_footer'])->name('razen-politik.landing-page.footer.store.footer');
    });

    Route::prefix('produk-lain')->group(function(){
        Route::get('/', [LandingPageProdukLainController::class, 'index'])->name('razen-politik.landing-page.produk-lain.index');

        Route::post('/store/produk-lain', [LandingPageProdukLainController::class, 'store_produk_lain'])->name('razen-politik.landing-page.produk-lain.store.produk-lain');
    });
});

Route::prefix('penawaran')->group(function(){
    Route::prefix('produk-lain')->group(function(){
        Route::get('/', [ProdukLainController::class, 'index'])->name('razen-politik.penawaran.produk-lain.index');
        Route::get('/detail/{id}', [ProdukLainController::class, 'show'])->name('razen-politik.penawaran.produk-lain.show');
        Route::post('/',[ProdukLainController::class, 'store'])->name('razen-politik.penawaran.produk-lain.store');
        Route::get('/edit/{id}',[ProdukLainController::class, 'edit'])->name('razen-politik.penawaran.produk-lain.edit');
        Route::post('/update',[ProdukLainController::class, 'update'])->name('razen-politik.penawaran.produk-lain.update');
        Route::get('/destroy/{id}',[ProdukLainController::class, 'destroy'])->name('razen-politik.penawaran.produk-lain.destroy');
    });
});
