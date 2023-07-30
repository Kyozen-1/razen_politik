<?php

namespace App\Http\Controllers\Pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataTpsController extends Controller
{
    public function index()
    {
        return view('pengguna.master-data.data-tps.index');
    }
}
