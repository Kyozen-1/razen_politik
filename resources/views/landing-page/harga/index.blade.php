@extends('landing-page.layouts.app')
@section('title', 'Harga | Razen Politik')

@section('content')
<section class="bg-white">
    <main class="flex flex-col gap-12 px-4 py-20 mx-auto md:px-6 max-w-screen-2xl lg:px-24">
        <div class="grid items-center gap-20 md:grid-cols-12 lg:gap-0">
            <div class="md:col-span-10 lg:col-span-6">
            <img class="mx-auto" src="https://cms.polapoli.id/storage/image_uploaded/null" width="80%" alt="Harga Transparan">
            </div>
            <div class="lg:col-span-6 md:col-span-10 lg:pr-16">
            <div class="flex flex-col gap-5">
                <h1 class="text-black text-3xl lg:text-4xl font-bold ">Harga Transparan</h1>
                <p class="text-grey1 text-sm font-medium leading-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. At cupiditate ipsam nobis cumque totam deleniti a odio amet eos, labore et? Placeat, cumque? Modi eaque consequuntur illo blanditiis, accusantium sapiente!</p>
            </div>
            </div>
        </div>
    </main>
</section>
<section class="h-auto bg-primary">
    <main class="relative px-4 py-32 mx-auto overflow-hidden max-w-screen-2xl lg:px-24">
        <div class="text-center">
            <h3 class="text-white text-3xl lg:text-4xl font-bold leading-snug mb-24">Ulasan tentang Razen Politik dari para Klien bahagia kami</h3>
        </div>
        <div class="relative w-full card-testimonial">
            <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
            <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(1335px, 0px, 0px);"></div>
            <div class="swiper-button-prev swiper-button-disabled swiper-button-lock"></div>
            <div class="swiper-button-next swiper-button-disabled swiper-button-lock"></div>
            </div>
        </div>
    </main>
</section>
<section class="w-full h-full px-8 pt-20 transition-all duration-500 bg-white border-box xl:px-36 lg:px-30 md:px-14 sm:px-8 pb-28 linear">
    <div class="overflow-hidden content-3-7">
        <div class="container mx-auto">
            <div class="flex flex-col w-full text-center mb-9">
            <h1 class="text-black text-3xl lg:text-4xl font-bold mb-4">Daftar Paket Harga</h1>
            <p class="text-grey1 text-base undefined mx-auto tracking-wide caption max-w-3xl mx-auto">Perbedaan harga di bawah ini bergantung kepada jenis paket dan lamanya durasi yang anda pilih</p>
            </div>
            <div class="grid items-center grid-cols-1 lg:grid-cols-4">
            <div class="lg:pr-10 lg:border-r-2 lg:border-r-logan ">
                <div class="flex flex-wrap items-center justify-center w-full gap-2 py-10 bg-flashWhite lg:flex-col lg:items-stretch lg:justify-between px-9 lg:space-y-6">
                <button class="lg:text-left text-center text-primary font-bold lg:border-r-4 lg:border-r-primary lg:border-b-0 lg:border-b-primary border-b-4 border-b-primary">DPR RI</button>
                <button class="lg:text-left text-center ">DPRD</button>
                <button class="lg:text-left text-center ">DPD RI</button>
                <button class="lg:text-left text-center ">BUPATI</button>
                <button class="lg:text-left text-center ">WALIKOTA</button>
                <button class="lg:text-left text-center ">GUBERNUR</button>
                </div>
            </div>
            <div class="flex flex-wrap col-span-3 px-8">
                <div class="sm:p-4 px-0 py-4 lg:w-1/2 w-full mx-auto card">
                <div class="h-full py-8 px-11 rounded-2xl bg-white card-outline flex flex-col justify-between relative overflow-hidden">
                    <div class="flex flex-col justify-center">
                    <h1 class="text-black text-2xl font-bold tracking-wide mb-3 text-center">Standard</h1>
                    <p class="text-xl tracking-wide flex flex-wrap justify-center items-center font-semibold text-center text-medium-black mb-10">
                        <span>Rp&nbsp;49.000.000</span>
                        <span class="text-xs ml-2.5 font-normal price-month price-month">/6 Bulan</span>
                    </p>
                    <div class="price-list-3-7">
                        <p class="flex tracking-wide items-center text-sm mb-7 check-3-7 text-black">
                        <span class="w-4 h-4 mr-3 inline-flex items-center justify-center flex-shrink-0">
                            <div class="ant-image">
                            <img alt="me" class="ant-image-img" src="/checked.png">
                            <div class="ant-image-mask">
                                <div class="ant-image-mask-info">
                                <span role="img" aria-label="eye" class="anticon anticon-eye">
                                    <svg viewBox="64 64 896 896" focusable="false" data-icon="eye" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                    <path d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 000 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z"></path>
                                    </svg>
                                </span>Preview
                                </div>
                            </div>
                            </div>
                        </span>50.000 maksimum relawan
                        </p>
                        <p class="flex tracking-wide items-center text-sm mb-7 check-3-7 text-black">
                        <span class="w-4 h-4 mr-3 inline-flex items-center justify-center flex-shrink-0">
                            <div class="ant-image">
                            <img alt="me" class="ant-image-img" src="/checked.png">
                            <div class="ant-image-mask">
                                <div class="ant-image-mask-info">
                                <span role="img" aria-label="eye" class="anticon anticon-eye">
                                    <svg viewBox="64 64 896 896" focusable="false" data-icon="eye" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                    <path d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 000 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z"></path>
                                    </svg>
                                </span>Preview
                                </div>
                            </div>
                            </div>
                        </span>Dasbor
                        </p>
                        <p class="flex tracking-wide items-center text-sm mb-7 check-3-7 text-black">
                        <span class="w-4 h-4 mr-3 inline-flex items-center justify-center flex-shrink-0">
                            <div class="ant-image">
                            <img alt="me" class="ant-image-img" src="/checked.png">
                            <div class="ant-image-mask">
                                <div class="ant-image-mask-info">
                                <span role="img" aria-label="eye" class="anticon anticon-eye">
                                    <svg viewBox="64 64 896 896" focusable="false" data-icon="eye" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                    <path d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 000 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z"></path>
                                    </svg>
                                </span>Preview
                                </div>
                            </div>
                            </div>
                        </span>Master Data TPS dan DPT
                        </p>
                        <p class="flex tracking-wide items-center text-sm mb-7 check-3-7 text-black">
                        <span class="w-4 h-4 mr-3 inline-flex items-center justify-center flex-shrink-0">
                            <div class="ant-image">
                            <img alt="me" class="ant-image-img" src="/checked.png">
                            <div class="ant-image-mask">
                                <div class="ant-image-mask-info">
                                <span role="img" aria-label="eye" class="anticon anticon-eye">
                                    <svg viewBox="64 64 896 896" focusable="false" data-icon="eye" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                    <path d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 000 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z"></path>
                                    </svg>
                                </span>Preview
                                </div>
                            </div>
                            </div>
                        </span>Pasangan Calon
                        </p>
                        <p class="flex tracking-wide items-center text-sm mb-7 check-3-7 text-black">
                        <span class="w-4 h-4 mr-3 inline-flex items-center justify-center flex-shrink-0">
                            <div class="ant-image">
                            <img alt="me" class="ant-image-img" src="/checked.png">
                            <div class="ant-image-mask">
                                <div class="ant-image-mask-info">
                                <span role="img" aria-label="eye" class="anticon anticon-eye">
                                    <svg viewBox="64 64 896 896" focusable="false" data-icon="eye" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                    <path d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 000 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z"></path>
                                    </svg>
                                </span>Preview
                                </div>
                            </div>
                            </div>
                        </span>Manajemen Donasi
                        </p>
                        <p class="flex tracking-wide items-center text-sm mb-7 check-3-7 text-black">
                        <span class="w-4 h-4 mr-3 inline-flex items-center justify-center flex-shrink-0">
                            <div class="ant-image">
                            <img alt="me" class="ant-image-img" src="/checked.png">
                            <div class="ant-image-mask">
                                <div class="ant-image-mask-info">
                                <span role="img" aria-label="eye" class="anticon anticon-eye">
                                    <svg viewBox="64 64 896 896" focusable="false" data-icon="eye" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                    <path d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 000 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z"></path>
                                    </svg>
                                </span>Preview
                                </div>
                            </div>
                            </div>
                        </span>Manajemen Koordinator
                        </p>
                        <p class="flex tracking-wide items-center text-sm mb-7 check-3-7 text-black">
                        <span class="w-4 h-4 mr-3 inline-flex items-center justify-center flex-shrink-0">
                            <div class="ant-image">
                            <img alt="me" class="ant-image-img" src="/unchecked.png">
                            <div class="ant-image-mask">
                                <div class="ant-image-mask-info">
                                <span role="img" aria-label="eye" class="anticon anticon-eye">
                                    <svg viewBox="64 64 896 896" focusable="false" data-icon="eye" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                    <path d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 000 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z"></path>
                                    </svg>
                                </span>Preview
                                </div>
                            </div>
                            </div>
                        </span>Manajemen Partai
                        </p>
                        <p class="flex tracking-wide items-center text-sm mb-7 check-3-7 text-black">
                        <span class="w-4 h-4 mr-3 inline-flex items-center justify-center flex-shrink-0">
                            <div class="ant-image">
                            <img alt="me" class="ant-image-img" src="/checked.png">
                            <div class="ant-image-mask">
                                <div class="ant-image-mask-info">
                                <span role="img" aria-label="eye" class="anticon anticon-eye">
                                    <svg viewBox="64 64 896 896" focusable="false" data-icon="eye" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                    <path d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 000 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z"></path>
                                    </svg>
                                </span>Preview
                                </div>
                            </div>
                            </div>
                        </span>Manajemen Relawan Terbatas
                        </p>
                    </div>
                    <button class="text-primary2 w-full text-center mb-6 hover:text-red">Lihat semua fitur</button>
                    </div>
                    <button class="items-center py-3 px-8 focus:outline-none rounded-xl transition-all duration-150 text-base font-normal w-full border-0 bg-primary text-white undefined">Beli Paket</button>
                </div>
                </div>
                <div class="sm:p-4 px-0 py-4 lg:w-1/2 w-full mx-auto card">
                <div class="h-full py-8 px-11 rounded-2xl bg-primary card-outline flex flex-col justify-between relative overflow-hidden">
                    <div>
                    <h1 class="text-white text-2xl font-bold tracking-wide mb-3 text-center">Pro</h1>
                    <p class="text-xl tracking-wide flex flex-wrap justify-center items-center font-semibold text-center text-medium-black mb-10 text-white">
                        <span>Rp&nbsp;69.000.000</span>
                        <span class="text-xs ml-2.5 font-normal price-month price-month">/6 Bulan</span>
                    </p>
                    <div class="price-list-3-7">
                        <p class="flex tracking-wide items-center text-sm mb-7 check-3-7 text-white">
                        <span class="w-4 h-4 mr-3 inline-flex items-center justify-center flex-shrink-0">
                            <div class="ant-image">
                            <img alt="me" class="ant-image-img" src="/checked.png">
                            <div class="ant-image-mask">
                                <div class="ant-image-mask-info">
                                <span role="img" aria-label="eye" class="anticon anticon-eye">
                                    <svg viewBox="64 64 896 896" focusable="false" data-icon="eye" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                    <path d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 000 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z"></path>
                                    </svg>
                                </span>Preview
                                </div>
                            </div>
                            </div>
                        </span>100.000 maksimum relawan
                        </p>
                        <p class="flex tracking-wide items-center text-sm mb-7 check-3-7 text-white">
                        <span class="w-4 h-4 mr-3 inline-flex items-center justify-center flex-shrink-0">
                            <div class="ant-image">
                            <img alt="me" class="ant-image-img" src="/checked.png">
                            <div class="ant-image-mask">
                                <div class="ant-image-mask-info">
                                <span role="img" aria-label="eye" class="anticon anticon-eye">
                                    <svg viewBox="64 64 896 896" focusable="false" data-icon="eye" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                    <path d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 000 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z"></path>
                                    </svg>
                                </span>Preview
                                </div>
                            </div>
                            </div>
                        </span>Quick Count
                        </p>
                        <p class="flex tracking-wide items-center text-sm mb-7 check-3-7 text-white">
                        <span class="w-4 h-4 mr-3 inline-flex items-center justify-center flex-shrink-0">
                            <div class="ant-image">
                            <img alt="me" class="ant-image-img" src="/checked.png">
                            <div class="ant-image-mask">
                                <div class="ant-image-mask-info">
                                <span role="img" aria-label="eye" class="anticon anticon-eye">
                                    <svg viewBox="64 64 896 896" focusable="false" data-icon="eye" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                    <path d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 000 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z"></path>
                                    </svg>
                                </span>Preview
                                </div>
                            </div>
                            </div>
                        </span>Real Count
                        </p>
                        <p class="flex tracking-wide items-center text-sm mb-7 check-3-7 text-white">
                        <span class="w-4 h-4 mr-3 inline-flex items-center justify-center flex-shrink-0">
                            <div class="ant-image">
                            <img alt="me" class="ant-image-img" src="/checked.png">
                            <div class="ant-image-mask">
                                <div class="ant-image-mask-info">
                                <span role="img" aria-label="eye" class="anticon anticon-eye">
                                    <svg viewBox="64 64 896 896" focusable="false" data-icon="eye" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                    <path d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 000 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z"></path>
                                    </svg>
                                </span>Preview
                                </div>
                            </div>
                            </div>
                        </span>Manajemen Donasi
                        </p>
                        <p class="flex tracking-wide items-center text-sm mb-7 check-3-7 text-white">
                        <span class="w-4 h-4 mr-3 inline-flex items-center justify-center flex-shrink-0">
                            <div class="ant-image">
                            <img alt="me" class="ant-image-img" src="/checked.png">
                            <div class="ant-image-mask">
                                <div class="ant-image-mask-info">
                                <span role="img" aria-label="eye" class="anticon anticon-eye">
                                    <svg viewBox="64 64 896 896" focusable="false" data-icon="eye" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                    <path d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 000 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z"></path>
                                    </svg>
                                </span>Preview
                                </div>
                            </div>
                            </div>
                        </span>Manajemen Saksi
                        </p>
                        <p class="flex tracking-wide items-center text-sm mb-7 check-3-7 text-white">
                        <span class="w-4 h-4 mr-3 inline-flex items-center justify-center flex-shrink-0">
                            <div class="ant-image">
                            <img alt="me" class="ant-image-img" src="/checked.png">
                            <div class="ant-image-mask">
                                <div class="ant-image-mask-info">
                                <span role="img" aria-label="eye" class="anticon anticon-eye">
                                    <svg viewBox="64 64 896 896" focusable="false" data-icon="eye" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                    <path d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 000 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z"></path>
                                    </svg>
                                </span>Preview
                                </div>
                            </div>
                            </div>
                        </span>Rekapitulasi
                        </p>
                        <p class="flex tracking-wide items-center text-sm mb-7 check-3-7 text-white">
                        <span class="w-4 h-4 mr-3 inline-flex items-center justify-center flex-shrink-0">
                            <div class="ant-image">
                            <img alt="me" class="ant-image-img" src="/checked.png">
                            <div class="ant-image-mask">
                                <div class="ant-image-mask-info">
                                <span role="img" aria-label="eye" class="anticon anticon-eye">
                                    <svg viewBox="64 64 896 896" focusable="false" data-icon="eye" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                    <path d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 000 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z"></path>
                                    </svg>
                                </span>Preview
                                </div>
                            </div>
                            </div>
                        </span>Manajemen Partai
                        </p>
                        <p class="flex tracking-wide items-center text-sm mb-7 check-3-7 text-white">
                        <span class="w-4 h-4 mr-3 inline-flex items-center justify-center flex-shrink-0">
                            <div class="ant-image">
                            <img alt="me" class="ant-image-img" src="/checked.png">
                            <div class="ant-image-mask">
                                <div class="ant-image-mask-info">
                                <span role="img" aria-label="eye" class="anticon anticon-eye">
                                    <svg viewBox="64 64 896 896" focusable="false" data-icon="eye" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                    <path d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 000 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z"></path>
                                    </svg>
                                </span>Preview
                                </div>
                            </div>
                            </div>
                        </span>Manajemen Relawan Unlimited
                        </p>
                    </div>
                    <button class="text-viola w-full text-center mb-6 hover:text-white">Lihat semua fitur</button>
                    </div>
                    <button class="items-center py-3 px-8 focus:outline-none rounded-xl transition-all duration-150 text-base font-normal w-full border-0 bg-rose text-white undefined">Beli Paket</button>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
@endsection
