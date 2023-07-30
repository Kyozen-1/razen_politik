<?php

namespace App\Http\Controllers\Pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KoordinatorController extends Controller
{
    public function index()
    {
        return view('pengguna.koordinator.index');
    }
}
