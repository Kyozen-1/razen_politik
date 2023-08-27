<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerbaikanHomeController extends Controller
{
    public function beranda()
    {
        return view('perbaikan-landing-page.beranda.index');
    }
}
