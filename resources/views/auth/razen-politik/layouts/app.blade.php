<!DOCTYPE html>
<html lang="en" data-override='{"attributes": {"color": "light-red" }}'>
    <head>
        @include('auth.razen-politik.layouts.head')
    </head>

    <body class="h-100">
        <div id="root" class="h-100">
        <!-- Background Start -->
            <div class="fixed-background"></div>
            <!-- Background End -->

            <div class="container-fluid p-0 h-100 position-relative">
                <div class="row g-0 h-100">
                    <!-- Left Side Start -->
                    <div class="offset-0 col-12 d-none d-lg-flex offset-md-1 col-lg h-lg-100">
                        <div class="min-h-100 d-flex align-items-center">
                            <div class="w-100 w-lg-75 w-xxl-50">
                                <div>
                                    <div class="mb-5">
                                        <h1 class="display-3 text-white">Razen Politik</h1>
                                    </div>
                                    <p class="h6 text-white lh-1-5 mb-5">
                                        Razen Politik memahami, menjangkau, dan melibatkan konstituen Anda melalui berbagai platform sosial media dengan tujuan meningkatkan hubungan baik, kepercayaan, mengukur kinerja Anda sebagai wakil rakyat, sehingga dapat Terpilih Kembali pada Pemilihan Umum selanjutnya
                                    </p>
                                    <div class="mb-5">
                                        <a class="btn btn-lg btn-outline-white" href="{{ url('/') }}">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Left Side End -->

                    <!-- Right Side Start -->
                    @yield('content')
                    <!-- Right Side End -->
                </div>
            </div>
        </div>
        @include('auth.razen-politik.layouts.js')
    </body>
</html>
