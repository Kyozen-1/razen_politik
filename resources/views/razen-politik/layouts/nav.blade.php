@php
    use App\Models\Profil;

    $profil = Profil::first();
@endphp
<div id="nav" class="nav-container d-flex">
    <div class="nav-content d-flex">
        <!-- Logo Start -->
        <div class="logo position-relative">
            <a href="index.html">
            <!-- Logo can be added directly -->
            <img src="{{ asset('images/razen-politik/logo/'.$profil->logo_kecil) }}" alt="logo" />

            <!-- Or added via css to provide different ones for different color themes -->
            {{-- <div class="img"></div> --}}
            </a>
        </div>
        <!-- Logo End -->

        <!-- User Menu Start -->
        <div class="user-container d-flex">
            <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="profile" alt="profile" src="{{ asset('acorn/acorn-elearning-portal/img/profile/profile-3.webp') }}" height="1rem"/>
            <div class="name">{{$profil->nama}}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-end user-menu wide">
            <div class="row mb-3 ms-0 me-0">
                <div class="col-12 ps-1 mb-2">
                    <div class="text-extra-small text-primary">Akun</div>
                </div>
                <div class="col-6 ps-1 pe-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">Info Pengguna</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mb-1 ms-0 me-0">
                <div class="col-12 p-1 mb-3 pt-3">
                    <div class="separator-light"></div>
                </div>
                <div class="col-6 pe-1 ps-1">
                <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('razen-politik.logout') }}">
                                <i data-acorn-icon="logout" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
        <!-- User Menu End -->

        <!-- Menu Start -->
        <div class="menu-container flex-grow-1">
            <ul id="menu" class="menu">
                <li>
                    @if (request()->routeIs('razen-politik.admin.dashboard.index'))
                        <a href="{{ route('razen-politik.admin.dashboard.index') }}" class="active">
                    @else
                        <a href="{{ route('razen-politik.admin.dashboard.index') }}">
                    @endif
                        <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                        <span class="label">Dashboard</span>
                    </a>
                </li>
                <li>
                    @if (request()->routeIs('razen-politik.admin.profil.index'))
                        <a href="{{ route('razen-politik.admin.profil.index') }}" class="active">
                    @else
                        <a href="{{ route('razen-politik.admin.profil.index') }}">
                    @endif
                        <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                        <span class="label">Profil</span>
                    </a>
                </li>
                <li>
                    @if (request()->routeIs('razen-politik.admin.pemilu.index'))
                        <a href="{{ route('razen-politik.admin.pemilu.index') }}" class="active">
                    @else
                        <a href="{{ route('razen-politik.admin.pemilu.index') }}">
                    @endif
                        <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                        <span class="label">Pemilu</span>
                    </a>
                </li>
                <li>
                    @if (request()->routeIs('razen-politik.admin.testimoni.index'))
                        <a href="{{ route('razen-politik.admin.testimoni.index') }}" class="active">
                    @else
                        <a href="{{ route('razen-politik.admin.testimoni.index') }}">
                    @endif
                        <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                        <span class="label">Testimoni</span>
                    </a>
                </li>
                <li>
                    @if (request()->routeIs('razen-politik.admin.tim.index'))
                        <a href="{{ route('razen-politik.admin.tim.index') }}" class="active">
                    @else
                        <a href="{{ route('razen-politik.admin.tim.index') }}">
                    @endif
                        <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                        <span class="label">Tim</span>
                    </a>
                </li>
                <li>
                    @if (request()->routeIs('razen-politik.admin.paket.index'))
                        <a href="{{ route('razen-politik.admin.paket.index') }}" class="active">
                    @else
                        <a href="{{ route('razen-politik.admin.paket.index') }}">
                    @endif
                        <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                        <span class="label">Paket</span>
                    </a>
                </li>
                <li>
                    @if (request()->routeIs('razen-politik.master-data.provinsi.index') ||
                    request()->routeIs('razen-politik.master-data.kabupaten-kota.index') ||
                    request()->routeIs('razen-politik.master-data.kecamatan.index') ||
                    request()->routeIs('razen-politik.master-data.kelurahan.index') ||
                    request()->routeIs('razen-politik.master-data.dpt.index') ||
                    request()->routeIs('razen-politik.master-data.jabatan-pilihan.index') ||
                    request()->routeIs('razen-politik.master-data.jenis-survey.index') ||
                    request()->routeIs('razen-politik.master-data.jenis-isu.index') ||
                    request()->routeIs('razen-politik.master-data.tps.index') ||
                    request()->routeIs('razen-politik.master-data.dapil.index') ||
                    request()->routeIs('razen-politik.master-data.media-sosial.index') ||
                    request()->routeIs('razen-politik.master-data.role.index') ||
                    request()->routeIs('razen-politik.master-data.paket.index') ||
                    request()->routeIs('razen-politik.master-data.fitur.index'))
                    <a href="#master_data" class="active">
                    @else
                    <a href="#master_data">
                    @endif
                        <i data-acorn-icon="notebook-1" class="icon" data-acorn-size="18"></i>
                        <span class="label">Master Data</span>
                    </a>
                    <ul id="master_data">
                        <li>
                            @if (request()->routeIs('razen-politik.master-data.fitur.index'))
                                <a href="{{ route('razen-politik.master-data.fitur.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-politik.master-data.fitur.index') }}">
                            @endif
                                <span class="label">Fitur</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-politik.master-data.paket.index'))
                                <a href="{{ route('razen-politik.master-data.paket.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-politik.master-data.paket.index') }}">
                            @endif
                                <span class="label">Paket</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-politik.master-data.role.index'))
                                <a href="{{ route('razen-politik.master-data.role.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-politik.master-data.role.index') }}">
                            @endif
                                <span class="label">Role</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-politik.master-data.media-sosial.index'))
                                <a href="{{ route('razen-politik.master-data.media-sosial.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-politik.master-data.media-sosial.index') }}">
                            @endif
                                <span class="label">Media Sosial</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-politik.master-data.jenis-isu.index'))
                                <a href="{{ route('razen-politik.master-data.jenis-isu.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-politik.master-data.jenis-isu.index') }}">
                            @endif
                                <span class="label">Jenis Isu</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-politik.master-data.jenis-survey.index'))
                                <a href="{{ route('razen-politik.master-data.jenis-survey.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-politik.master-data.jenis-survey.index') }}">
                            @endif
                                <span class="label">Jenis Survey</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-politik.master-data.jabatan-pilihan.index'))
                                <a href="{{ route('razen-politik.master-data.jabatan-pilihan.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-politik.master-data.jabatan-pilihan.index') }}">
                            @endif
                                <span class="label">Jabatan Pilihan</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-politik.master-data.dpt.index'))
                                <a href="{{ route('razen-politik.master-data.dpt.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-politik.master-data.dpt.index') }}">
                            @endif
                                <span class="label">DPT</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-politik.master-data.tps.index'))
                                <a href="{{ route('razen-politik.master-data.tps.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-politik.master-data.tps.index') }}">
                            @endif
                                <span class="label">TPS</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-politik.master-data.dapil.index'))
                                <a href="{{ route('razen-politik.master-data.dapil.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-politik.master-data.dapil.index') }}">
                            @endif
                                <span class="label">Dapil</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-politik.master-data.provinsi.index'))
                                <a href="{{ route('razen-politik.master-data.provinsi.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-politik.master-data.provinsi.index') }}">
                            @endif
                                <span class="label">Provinsi</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-politik.master-data.kabupaten-kota.index'))
                                <a href="{{ route('razen-politik.master-data.kabupaten-kota.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-politik.master-data.kabupaten-kota.index') }}">
                            @endif
                                <span class="label">Kabupaten / Kota</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-politik.master-data.kecamatan.index'))
                                <a href="{{ route('razen-politik.master-data.kecamatan.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-politik.master-data.kecamatan.index') }}">
                            @endif
                                <span class="label">Kecamatan</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-politik.master-data.kelurahan.index'))
                                <a href="{{ route('razen-politik.master-data.kelurahan.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-politik.master-data.kelurahan.index') }}">
                            @endif
                                <span class="label">Kelurahan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    @if (request()->routeIs('razen-politik.landing-page.beranda.index') ||
                    request()->routeIs('razen-politik.landing-page.tentang-kami.index') ||
                    request()->routeIs('razen-politik.landing-page.harga.index') ||
                    request()->routeIs('razen-politik.landing-page.artikel.index') ||
                    request()->routeIs('razen-politik.landing-page.bantuan.index') ||
                    request()->routeIs('razen-politik.landing-page.testimoni.index') ||
                    request()->routeIs('razen-politik.landing-page.footer.index') ||
                    request()->routeIs('razen-politik.landing-page.produk-lain.index'))
                    <a href="#landing_page" class="active">
                    @else
                    <a href="#landing_page">
                    @endif
                        <i data-acorn-icon="notebook-1" class="icon" data-acorn-size="18"></i>
                        <span class="label">Landing Page</span>
                    </a>
                    <ul id="landing_page">
                        <li>
                            @if (request()->routeIs('razen-politik.landing-page.beranda.index'))
                                <a href="{{ route('razen-politik.landing-page.beranda.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-politik.landing-page.beranda.index') }}">
                            @endif
                                <span class="label">Beranda</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-politik.landing-page.tentang-kami.index'))
                                <a href="{{ route('razen-politik.landing-page.tentang-kami.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-politik.landing-page.tentang-kami.index') }}">
                            @endif
                                <span class="label">Tentang Kami</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-politik.landing-page.harga.index'))
                                <a href="{{ route('razen-politik.landing-page.harga.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-politik.landing-page.harga.index') }}">
                            @endif
                                <span class="label">Harga</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-politik.landing-page.artikel.index'))
                                <a href="{{ route('razen-politik.landing-page.artikel.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-politik.landing-page.artikel.index') }}">
                            @endif
                                <span class="label">Artikel</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-politik.landing-page.bantuan.index'))
                                <a href="{{ route('razen-politik.landing-page.bantuan.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-politik.landing-page.bantuan.index') }}">
                            @endif
                                <span class="label">Bantuan</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-politik.landing-page.testimoni.index'))
                                <a href="{{ route('razen-politik.landing-page.testimoni.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-politik.landing-page.testimoni.index') }}">
                            @endif
                                <span class="label">Testimoni</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-politik.landing-page.produk-lain.index'))
                                <a href="{{ route('razen-politik.landing-page.produk-lain.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-politik.landing-page.produk-lain.index') }}">
                            @endif
                                <span class="label">Produk Lain</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-politik.landing-page.footer.index'))
                                <a href="{{ route('razen-politik.landing-page.footer.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-politik.landing-page.footer.index') }}">
                            @endif
                                <span class="label">Footer</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    @if (request()->routeIs('razen-politik.penawaran.produk-lain.index'))
                    <a href="#penawaran" class="active">
                    @else
                    <a href="#penawaran">
                    @endif
                        <i data-acorn-icon="notebook-1" class="icon" data-acorn-size="18"></i>
                        <span class="label">Penawaran</span>
                    </a>
                    <ul id="penawaran">
                        <li>
                            @if (request()->routeIs('razen-politik.penawaran.produk-lain.index'))
                                <a href="{{ route('razen-politik.penawaran.produk-lain.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-politik.penawaran.produk-lain.index') }}">
                            @endif
                                <span class="label">Produk Lain</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Menu End -->

        <!-- Mobile Buttons Start -->
        <div class="mobile-buttons-container">
            <!-- Scrollspy Mobile Button Start -->
            <a href="#" id="scrollSpyButton" class="spy-button" data-bs-toggle="dropdown">
                <i data-acorn-icon="menu-dropdown"></i>
            </a>
            <!-- Scrollspy Mobile Button End -->

            <!-- Scrollspy Mobile Dropdown Start -->
            <div class="dropdown-menu dropdown-menu-end" id="scrollSpyDropdown"></div>
            <!-- Scrollspy Mobile Dropdown End -->

            <!-- Menu Button Start -->
            <a href="#" id="mobileMenuButton" class="menu-button">
                <i data-acorn-icon="menu"></i>
            </a>
            <!-- Menu Button End -->
        </div>
        <!-- Mobile Buttons End -->
    </div>
    <div class="nav-shadow"></div>
</div>
