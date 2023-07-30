<?php

namespace App\Http\Controllers\Pengguna\QuickCount;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InputDataController extends Controller
{
    public function index()
    {
        return view('pengguna.quick-count.input-data.index');
    }
}
