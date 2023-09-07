@php
    use App\Models\Profil;

    $profil = Profil::first();
@endphp
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('title',  'Beranda | Razen Politik')</title>
    <!-- favicon -->
    <link rel="icon" href="{{ asset('images/razen-politik/logo/'.$profil->logo_kecil) }}" sizes="20x20" type="image/png"/>
    <!-- animate -->
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/animate.css') }}"/>
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/bootstrap.min.css') }}"/>
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/magnific-popup.css') }}"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/owl.carousel.min.css') }}"/>
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/font-awesome.min.css') }}"/>
    <!-- iconmoon -->
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/iconmoon.css') }}">
    <!-- Hover CSS -->
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/hover-min.css') }}"/>
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/style.css') }}"/>
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/responsive.css') }}"/>
    @yield('css')
</head>
