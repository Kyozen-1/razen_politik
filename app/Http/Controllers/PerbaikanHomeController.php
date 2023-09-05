<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerbaikanHomeController extends Controller
{
    public function beranda()
    {
        return view('perbaikan-landing-page.beranda.index');
    }

    public function tentang_kami()
    {
        return view('perbaikan-landing-page.tentang-kami.index');
    }

    public function harga()
    {
        return view('perbaikan-landing-page.harga.index');
    }

    public function artikel()
    {
        return view('perbaikan-landing-page.artikel.index');
    }

    public function bantuan()
    {
        return view('perbaikan-landing-page.bantuan.index');
    }
}
