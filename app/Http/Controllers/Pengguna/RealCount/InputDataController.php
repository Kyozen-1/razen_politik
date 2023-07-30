<?php

namespace App\Http\Controllers\Pengguna\RealCount;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InputDataController extends Controller
{
    public function index()
    {
        return view('pengguna.real-count.input-data.index');
    }
}
