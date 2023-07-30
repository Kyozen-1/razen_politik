<?php

namespace App\Http\Controllers\Pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataDptController extends Controller
{
    public function index()
    {
        return view('pengguna.data-dpt.index');
    }
}
