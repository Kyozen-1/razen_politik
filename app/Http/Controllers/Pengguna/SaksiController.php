<?php

namespace App\Http\Controllers\Pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SaksiController extends Controller
{
    public function index()
    {
        return view('pengguna.saksi.index');
    }
}
