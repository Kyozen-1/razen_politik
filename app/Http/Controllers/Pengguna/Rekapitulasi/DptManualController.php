<?php

namespace App\Http\Controllers\Pengguna\Rekapitulasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DptManualController extends Controller
{
    public function index()
    {
        return view('pengguna.rekapitulasi.dpt-manual.index');
    }
}
