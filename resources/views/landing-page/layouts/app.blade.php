<!DOCTYPE html>
<html lang="id">
    <head>
        @include('landing-page.layouts.head')
    </head>
    <body>
        <div id="__next" data-reactroot="">
            <header class="navbar sticky top-0 z-40">
                <div class="mx-auto flex flex-wrap flex-row items-center justify-between xl:px-26 lg:px-20 md:px-20 px-8 py-8">
                <a class="flex font-medium items-center">
                    <a href="/">
                    <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                        <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                        <img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20
                                            xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%27200%27%20height=%2745%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                        </span>
                        <img alt="Logo PolaPoli" src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fpolapoli_logo.0eb9583e.png&amp;w=640&amp;q=75" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;" srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fpolapoli_logo.0eb9583e.png&amp;w=256&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fpolapoli_logo.0eb9583e.png&amp;w=640&amp;q=75 2x">
                        <noscript></noscript>
                    </span>
                    </a>
                </a>
                <label for="menu-toggle" class="cursor-pointer lg:hidden block">
                    <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </label>
                <div class="hidden lg:flex lg:items-center lg:w-auto w-full lg:ml-24 lg:mr-auto flex-wrap items-center text-base justify-center" id="menu">
                    <nav class="lg:space-x-6 space-x-0 lg:flex items-center justify-between font-medium pt-8 lg:pt-0 lg:space-y-0 space-y-6">
                    <ul class="flex flex-col lg:flex-row lg:justify-around lg:items-center mb-4 lg:mb-0">
                        <li class="mx-3 py-2 lg:py-0">
                        <a class="text-base font-medium capitalize text-black hover:text-primary hover:font-semibold transition-all duration-150" href="{{ route('beranda') }}">Beranda</a>
                        </li>
                        <li class="mx-3 py-2 lg:py-0">
                        <a class="text-base font-medium capitalize text-black hover:text-primary hover:font-semibold transition-all duration-150" href="{{ route('tentang-kami') }}">Tentang Kami</a>
                        </li>
                        <li class="mx-3 py-2 lg:py-0">
                        <a class="text-base font-medium capitalize text-black hover:text-primary hover:font-semibold transition-all duration-150" href="{{ route('solusi') }}">Solusi</a>
                        </li>
                        <li class="mx-3 py-2 lg:py-0">
                        <a class="text-base font-medium capitalize text-black hover:text-primary hover:font-semibold transition-all duration-150" href="{{ route('harga') }}">Harga</a>
                        </li>
                        <li class="mx-3 py-2 lg:py-0">
                        <a class="text-base font-medium capitalize text-black hover:text-primary hover:font-semibold transition-all duration-150" href="{{ route('artikel') }}">Artikel</a>
                        </li>
                        <li class="mx-3 py-2 lg:py-0">
                        <a class="text-base font-medium capitalize text-black hover:text-primary hover:font-semibold transition-all duration-150" href="{{ route('bantuan') }}">Bantuan</a>
                        </li>
                    </ul>
                    </nav>
                </div>
                <div class="hidden lg:flex justify-start  lg:items-center lg:w-auto w-full" id="menu">
                    <a class="items-center py-3 px-8 focus:outline-none rounded-xl transition-all duration-150 text-sm font-semibold  border-0 bg-grey3 text-black undefined" href="{{ route('pengguna.login') }}">Masuk</a>
                    <div style="width:12px;height:2px;display:inline-block"></div>
                    <a class="items-center py-3 px-8 focus:outline-none rounded-xl transition-all duration-150 text-sm font-normal  border-0 bg-primary text-white undefined" href="#">Daftar</a>
                </div>
                </div>
            </header>
            <main>
                <main>
                    @yield('content')

                    <section class="start bg-rose">
                        <div class="absolute z-0 max-w-screen-2xl mx-auto lg:-mt-80"></div>
                        <main class="relative z-10 px-4 mx-auto py-24 max-w-screen-2xl lg:px-16">
                        <div class="flex flex-col items-center w-full text-center">
                            <h3 class="text-white text-4xl font-bold ">Tunggu Apalagi, Daftar Sekarang!</h3>
                            <div class="w-full mt-8 mb-20">
                            <p class="text-white text-lg font-normal leading-snug lg:leading-normal">Kami selalu membantu Anda Sebagai asisten wakil rakyat digital Anda</p>
                            </div>
                            <div class="flex">
                            <button class="items-center py-3 px-8 focus:outline-none rounded-xl transition-all duration-150 text-xl font-semibold  border-0 bg-white text-primary undefined">Daftar Sekarang</button>
                            </div>
                        </div>
                        </main>
                    </section>
                    <section class="h-full pt-20 pb-12 lg:px-24 md:px-16 sm:px-8 px-4 transition-all duration-500 linear" style="background-color: rgb(20, 20, 50);">
                        <footer class="footer-2-3">
                        <div class="lg:pb-24 pb-16 mx-auto">
                            <div class="grid lg:grid-cols-3 sm:grid-cols-2 lg:gap-0 gap-y-6">
                            <div class="pr-16">
                                <div class="mb-5">
                                <img src="/_next/static/media/polapoli_logo_bottom.42692c3e.png" alt="" class="w-auto h-40 object-contain">
                                </div>
                                <nav class="list-none list-footer space-y-5">
                                <p style="color: rgb(112, 112, 146); line-height: 1.8;">Description</p>
                                </nav>
                            </div>
                            <div class="">
                                <h2 class="title-font font-semibold text-2xl mb-5 text-white">Company</h2>
                                <nav class="list-none list-footer space-y-5">
                                <li>
                                    <a href="/about">Tentang Kami</a>
                                </li>
                                <li>
                                    <a href="">Solusi</a>
                                </li>
                                <li>
                                    <a href="">Harga</a>
                                </li>
                                <li>
                                    <a href="">Artikel</a>
                                </li>
                                </nav>
                            </div>
                            <div class="">
                                <h2 class="title-font font-semibold text-2xl mb-5 text-white">Bantuan</h2>
                                <nav class="list-none list-footer space-y-5">
                                <li>
                                    <a href="">FAQ</a>
                                </li>
                                <li>
                                    <a target="_blank" href="Facebook.com" rel="noreferrer">Facebook</a>
                                </li>
                                <li>
                                    <a target="_blank" href="instagram.com" rel="noreferrer">Instagram</a>
                                </li>
                                </nav>
                            </div>
                            </div>
                        </div>
                        <div class="border-color mx-auto">
                            <div class="">
                            <hr style="border-color: rgb(46, 46, 90);">
                            </div>
                            <div class="container mx-auto flex pt-12 flex-col lg:flex-row items-center space-y-5 lg:space-y-0">
                            <div class="flex title-font font-medium items-center text-gray-900 mb-4 lg:mb-0 md:mb-0 space-x-5 cursor-pointer">
                                <a href="https://www.instagram.com/aldi.ansyah.id/" target="_blank" rel="noreferrer">
                                <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                    <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                    <img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20
                                                                                                                                                                                                                                            xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2724%27%20height=%2724%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                    </span>
                                    <img alt="icon instagram" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                    <noscript></noscript>
                                </span>
                                </a>
                                <a href="facebook.com" target="_blank" rel="noreferrer">
                                <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                    <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                    <img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20
                                                                                                                                                                                                                                                    xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2724%27%20height=%2724%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                    </span>
                                    <img alt="icon facebook" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                    <noscript></noscript>
                                </span>
                                </a>
                                <a target="_blank" rel="noreferrer">
                                <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                    <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                    <img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20
                                                                                                                                                                                                                                                            xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2724%27%20height=%2724%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                    </span>
                                    <img alt="icon twitter" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                    <noscript></noscript>
                                </span>
                                </a>
                                <a target="_blank" rel="noreferrer">
                                <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                    <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                    <img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20
                                                                                                                                                                                                                                                                    xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2724%27%20height=%2724%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                    </span>
                                    <img alt="icon youtube" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                    <noscript></noscript>
                                </span>
                                </a>
                                <a target="_blank" rel="noreferrer">
                                <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                    <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                    <img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20
                                                                                                                                                                                                                                                                            xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2724%27%20height=%2724%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                    </span>
                                    <img alt="icon tiktok" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                    <noscript></noscript>
                                </span>
                                </a>
                            </div>
                            <nav class="mx-auto flex flex-wrap items-center text-base justify-center space-x-5"></nav>
                            <nav class="flex lg:flex-row flex-col items-center text-base justify-center">
                                <p>Copyright © 2023 PolaPoli</p>
                            </nav>
                            </div>
                        </div>
                        </footer>
                    </section>
                </main>
            </main>
        </div>
        @include('landing-page.layouts.js')
    </body>
</html>
