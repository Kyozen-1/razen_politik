<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function beranda()
    {
        return view('landing-page.beranda.index');
    }

    public function tentang_kami()
    {
        return view('landing-page.tentang-kami.index');
    }

    public function solusi()
    {
        return view('landing-page.solusi.index');
    }

    public function harga()
    {
        return view('landing-page.harga.index');
    }

    public function artikel()
    {
        return view('landing-page.artikel.index');
    }

    public function bantuan()
    {
        return view('landing-page.bantuan.index');
    }
}
