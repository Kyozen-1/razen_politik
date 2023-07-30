<?php

namespace App\Http\Controllers\Pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SimulasiKemenanganController extends Controller
{
    public function index()
    {
        return view('pengguna.simulasi-kemenangan.index');
    }
}
