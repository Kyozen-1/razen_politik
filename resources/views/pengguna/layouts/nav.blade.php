@php
    use App\Models\Profil;

    $profil = Profil::first();
@endphp
<div id="nav" class="nav-container d-flex">
    <div class="nav-content d-flex">
        <!-- Logo Start -->
        <div class="position-relative">
            <a href="index.html">
            <!-- Logo can be added directly -->
            <img src="{{ asset('images/razen-politik/logo/'.$profil->logo_kecil) }}" alt="logo" height="40rem"/>

            <!-- Or added via css to provide different ones for different color themes -->
            {{-- <div class="img"></div> --}}
            </a>
        </div>
        <!-- Logo End -->

        <!-- User Menu Start -->
        <div class="user-container d-flex">
            <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="profile" alt="profile" src="{{ asset('acorn/acorn-elearning-portal/img/profile/profile-3.webp') }}" height="1rem"/>
            <div class="name">{{Auth::user()->name}}</div>
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
                    @if (request()->routeIs('pengguna.dashboard.index'))
                        <a href="{{ route('pengguna.dashboard.index') }}" class="active">
                    @else
                        <a href="{{ route('pengguna.dashboard.index') }}">
                    @endif
                        <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                        <span class="label">Dashboard</span>
                    </a>
                </li>
                <li>
                    @if (request()->routeIs('pengguna.profil.index'))
                        <a href="{{ route('pengguna.profil.index') }}" class="active">
                    @else
                        <a href="{{ route('pengguna.profil.index') }}">
                    @endif
                        <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                        <span class="label">Profil</span>
                    </a>
                </li>
                <li>
                    @if (request()->routeIs('pengguna.master-data.tps.index') ||
                    request()->routeIs('pengguna.master-data.jumlah-dpt.index'))
                        <a href="#master_data" class="active">
                    @else
                        <a href="#master_data">
                    @endif
                        <i data-acorn-icon="notebook-1" class="icon" data-acorn-size="18"></i>
                        <span class="label">Master Data</span>
                    </a>
                    <ul id="master_data">
                        <li>
                            @if (request()->routeIs('pengguna.master-data.tps.index'))
                                <a href="{{ route('pengguna.master-data.tps.index') }}" class="active">
                            @else
                                <a href="{{ route('pengguna.master-data.tps.index') }}">
                            @endif
                                <span class="label">Data TPS</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('pengguna.master-data.jumlah-dpt.index'))
                                <a href="{{ route('pengguna.master-data.jumlah-dpt.index') }}" class="active">
                            @else
                                <a href="{{ route('pengguna.master-data.jumlah-dpt.index') }}">
                            @endif
                                <span class="label">Data Jumlah DPT</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    @if (request()->routeIs('pengguna.koordinator.index') ||
                    request()->routeIs('pengguna.koordinator.jadwal-kunjungan-relawan.index'))
                        <a href="#koordinator" class="active">
                    @else
                        <a href="#koordinator">
                    @endif
                        <i data-acorn-icon="notebook-1" class="icon" data-acorn-size="18"></i>
                        <span class="label">Koordinator</span>
                    </a>
                    <ul id="koordinator">
                        <li>
                            @if (request()->routeIs('pengguna.koordinator.index'))
                                <a href="{{ route('pengguna.koordinator.index') }}" class="active">
                            @else
                                <a href="{{ route('pengguna.koordinator.index') }}">
                            @endif
                                <span class="label">List Koordinator</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('pengguna.koordinator.jadwal-kunjungan-relawan.index'))
                                <a href="{{ route('pengguna.koordinator.jadwal-kunjungan-relawan.index') }}" class="active">
                            @else
                                <a href="{{ route('pengguna.koordinator.jadwal-kunjungan-relawan.index') }}">
                            @endif
                                <span class="label">Pembagian Rute Relawan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    @if (request()->routeIs('pengguna.relawan.list-relawan.index') ||
                    request()->routeIs('pengguna.relawan.riwayat-kunjungan.index') ||
                    request()->routeIs('pengguna.relawan.rute-harian.index'))
                        <a href="#relawan"class="active">
                    @else
                        <a href="#relawan">
                    @endif
                        <i data-acorn-icon="notebook-1" class="icon" data-acorn-size="18"></i>
                        <span class="label">Relawan</span>
                    </a>
                    <ul id="relawan">
                        <li>
                            @if (request()->routeIs('pengguna.relawan.list-relawan.index'))
                                <a href="{{ route('pengguna.relawan.list-relawan.index') }}" class="active">
                            @else
                                <a href="{{ route('pengguna.relawan.list-relawan.index') }}">
                            @endif
                                <span class="label">List Relawan</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('pengguna.relawan.riwayat-kunjungan.index'))
                                <a href="{{ route('pengguna.relawan.riwayat-kunjungan.index') }}" class="active">
                            @else
                                <a href="{{ route('pengguna.relawan.riwayat-kunjungan.index') }}">
                            @endif
                                <span class="label">Riwayat Kunjungan</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('pengguna.relawan.rute-harian.index'))
                                <a href="{{ route('pengguna.relawan.rute-harian.index') }}" class="active">
                            @else
                                <a href="{{ route('pengguna.relawan.rute-harian.index') }}">
                            @endif
                                <span class="label">Rute Harian</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    @if (request()->routeIs('pengguna.saksi.index'))
                        <a href="{{ route('pengguna.saksi.index') }}" class="active">
                    @else
                        <a href="{{ route('pengguna.saksi.index') }}">
                    @endif
                        <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                        <span class="label">Saksi</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                        <span class="label">Feed</span>
                    </a>
                </li>
                <li>
                    @if (request()->routeIs('pengguna.data-dpt.index'))
                        <a href="{{ route('pengguna.data-dpt.index') }}" class="active">
                    @else
                        <a href="{{ route('pengguna.data-dpt.index') }}">
                    @endif
                        <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                        <span class="label">Data DPT</span>
                    </a>
                </li>
                <li>
                    @if (request()->routeIs('pengguna.data-pemilih.index'))
                        <a href="{{ route('pengguna.data-pemilih.index') }}" class="active">
                    @else
                        <a href="{{ route('pengguna.data-pemilih.index') }}">
                    @endif
                        <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                        <span class="label">Data Pemilih</span>
                    </a>
                </li>
                <li>
                    @if (request()->routeIs('pengguna.simulasi-kemenangan.index'))
                        <a href="{{ route('pengguna.simulasi-kemenangan.index') }}" class="active">
                    @else
                        <a href="{{ route('pengguna.simulasi-kemenangan.index') }}">
                    @endif
                        <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                        <span class="label">Kemenangan</span>
                    </a>
                </li>
                <li>
                    @if (request()->routeIs('pengguna.monitoring-isu.index'))
                        <a href="{{ route('pengguna.monitoring-isu.index') }}" class="active">
                    @else
                        <a href="{{ route('pengguna.monitoring-isu.index') }}">
                    @endif
                        <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                        <span class="label">Monitoring Isu</span>
                    </a>
                </li>
                <li>
                    @if (request()->routeIs('pengguna.logistik.stok.index') ||
                    request()->routeIs('pengguna.logistik.pemesanan.index') ||
                    request()->routeIs('pengguna.logistik.penerimaan.index') ||
                    request()->routeIs('pengguna.logistik.pengeluaran.index'))
                        <a href="#logistik"class="active">
                    @else
                        <a href="#logistik">
                    @endif
                        <i data-acorn-icon="notebook-1" class="icon" data-acorn-size="18"></i>
                        <span class="label">Logistik</span>
                    </a>
                    <ul id="logistik">
                        <li>
                            @if (request()->routeIs('pengguna.logistik.stok.index'))
                                <a href="{{ route('pengguna.logistik.stok.index') }}" class="active">
                            @else
                                <a href="{{ route('pengguna.logistik.stok.index') }}">
                            @endif
                                <span class="label">Daftar Stok Barang</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('pengguna.logistik.pemesanan.index'))
                                <a href="{{ route('pengguna.logistik.pemesanan.index') }}" class="active">
                            @else
                                <a href="{{ route('pengguna.logistik.pemesanan.index') }}">
                            @endif
                                <span class="label">Pemesanan Barang</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('pengguna.logistik.penerimaan.index'))
                                <a href="{{ route('pengguna.logistik.penerimaan.index') }}" class="active">
                            @else
                                <a href="{{ route('pengguna.logistik.penerimaan.index') }}">
                            @endif
                                <span class="label">Penerimaan Barang</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('pengguna.logistik.pengeluaran.index'))
                                <a href="{{ route('pengguna.logistik.pengeluaran.index') }}" class="active">
                            @else
                                <a href="{{ route('pengguna.logistik.pengeluaran.index') }}">
                            @endif
                                <span class="label">Pengeluarkan Barang</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    @if (request()->routeIs('pengguna.rekapitulasi.koordinator.index') ||
                    request()->routeIs('pengguna.rekapitulasi.relawan.index') ||
                    request()->routeIs('pengguna.rekapitulasi.saksi.index') ||
                    request()->routeIs('pengguna.rekapitulasi.pemilih-pendukung.index') ||
                    request()->routeIs('pengguna.rekapitulasi.dpt.index') ||
                    request()->routeIs('pengguna.rekapitulasi.dpt-manual.index') ||
                    request()->routeIs('pengguna.rekapitulasi.tps.index'))
                        <a href="#rekapitulasi"class="active">
                    @else
                        <a href="#rekapitulasi">
                    @endif
                        <i data-acorn-icon="notebook-1" class="icon" data-acorn-size="18"></i>
                        <span class="label">Rekapitulasi</span>
                    </a>
                    <ul id="rekapitulasi">
                        <li>
                            @if (request()->routeIs('pengguna.rekapitulasi.koordinator.index'))
                                <a href="{{ route('pengguna.rekapitulasi.koordinator.index') }}" class="active">
                            @else
                                <a href="{{ route('pengguna.rekapitulasi.koordinator.index') }}">
                            @endif
                                <span class="label">Koordinator</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('pengguna.rekapitulasi.relawan.index'))
                                <a href="{{ route('pengguna.rekapitulasi.relawan.index') }}" class="active">
                            @else
                                <a href="{{ route('pengguna.rekapitulasi.relawan.index') }}">
                            @endif
                                <span class="label">Relawan</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('pengguna.rekapitulasi.saksi.index'))
                                <a href="{{ route('pengguna.rekapitulasi.saksi.index') }}" class="active">
                            @else
                                <a href="{{ route('pengguna.rekapitulasi.saksi.index') }}">
                            @endif
                                <span class="label">Saksi</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('pengguna.rekapitulasi.pemilih-pendukung.index'))
                                <a href="{{ route('pengguna.rekapitulasi.pemilih-pendukung.index') }}" class="active">
                            @else
                                <a href="{{ route('pengguna.rekapitulasi.pemilih-pendukung.index') }}">
                            @endif
                                <span class="label">Pemilih / Pendukung</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('pengguna.rekapitulasi.dpt.index'))
                                <a href="{{ route('pengguna.rekapitulasi.dpt.index') }}" class="active">
                            @else
                                <a href="{{ route('pengguna.rekapitulasi.dpt.index') }}">
                            @endif
                                <span class="label">DPT</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('pengguna.rekapitulasi.dpt-manual.index'))
                                <a href="{{ route('pengguna.rekapitulasi.dpt-manual.index') }}" class="active">
                            @else
                                <a href="{{ route('pengguna.rekapitulasi.dpt-manual.index') }}">
                            @endif
                                <span class="label">DPT Manual</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('pengguna.rekapitulasi.tps.index'))
                                <a href="{{ route('pengguna.rekapitulasi.tps.index') }}" class="active">
                            @else
                                <a href="{{ route('pengguna.rekapitulasi.tps.index') }}">
                            @endif
                                <span class="label">TPS</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    @if (request()->routeIs('pengguna.quick-count.input-data.index') ||
                    request()->routeIs('pengguna.quick-count.hasil.index'))
                        <a href="#quick_count"class="active">
                    @else
                        <a href="#quick_count">
                    @endif
                        <i data-acorn-icon="notebook-1" class="icon" data-acorn-size="18"></i>
                        <span class="label">Quick Count</span>
                    </a>
                    <ul id="quick_count">
                        <li>
                            @if (request()->routeIs('pengguna.quick-count.input-data.index'))
                                <a href="{{ route('pengguna.quick-count.input-data.index') }}" class="active">
                            @else
                                <a href="{{ route('pengguna.quick-count.input-data.index') }}">
                            @endif
                                <span class="label">Input Data</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('pengguna.quick-count.hasil.index'))
                                <a href="{{ route('pengguna.quick-count.hasil.index') }}" class="active">
                            @else
                                <a href="{{ route('pengguna.quick-count.hasil.index') }}">
                            @endif
                                <span class="label">Hasil Quick Count</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    @if (request()->routeIs('pengguna.real-count.input-data.index') ||
                    request()->routeIs('pengguna.real-count.hasil.index'))
                        <a href="#real_count"class="active">
                    @else
                        <a href="#real_count">
                    @endif
                        <i data-acorn-icon="notebook-1" class="icon" data-acorn-size="18"></i>
                        <span class="label">Real Count</span>
                    </a>
                    <ul id="real_count">
                        <li>
                            @if (request()->routeIs('pengguna.real-count.input-data.index'))
                                <a href="{{ route('pengguna.real-count.input-data.index') }}" class="active">
                            @else
                                <a href="{{ route('pengguna.real-count.input-data.index') }}">
                            @endif
                                <span class="label">Input Data</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('pengguna.real-count.hasil.index'))
                                <a href="{{ route('pengguna.real-count.hasil.index') }}" class="active">
                            @else
                                <a href="{{ route('pengguna.real-count.hasil.index') }}">
                            @endif
                                <span class="label">Hasil Real Login</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    @if (request()->routeIs('pengguna.user.index'))
                        <a href="#user_hak_akses"class="active">
                    @else
                        <a href="#user_hak_akses">
                    @endif
                        <i data-acorn-icon="notebook-1" class="icon" data-acorn-size="18"></i>
                        <span class="label">User & Hak Akses</span>
                    </a>
                    <ul id="user_hak_akses">
                        <li>
                            @if (request()->routeIs('pengguna.user.index'))
                                <a href="{{ route('pengguna.user.index') }}" class="active">
                            @else
                                <a href="{{ route('pengguna.user.index') }}">
                            @endif
                                <span class="label">Admin & Konsultan</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('pengguna.role.index'))
                                <a href="{{ route('pengguna.role.index') }}" class="active">
                            @else
                                <a href="{{ route('pengguna.role.index') }}">
                            @endif
                                <span class="label">Role</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                        <span class="label">Web Kemenangan</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                        <span class="label">Pengaturan Tim</span>
                    </a>
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
