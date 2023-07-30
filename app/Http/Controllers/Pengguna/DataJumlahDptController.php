<?php

namespace App\Http\Controllers\Pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataJumlahDptController extends Controller
{
    public function index()
    {
        return view('pengguna.master-data.data-jumlah-dpt.index');
    }
}
