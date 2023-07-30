<?php

namespace App\Http\Controllers\Pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListRelawanController extends Controller
{
    public function index()
    {
        return view('pengguna.relawan.list-relawan.index');
    }
}
