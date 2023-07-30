<?php

namespace App\Http\Controllers\Pengguna\Logistik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenerimaanController extends Controller
{
    public function index()
    {
        return view('pengguna.logistik.penerimaan.index');
    }
}
