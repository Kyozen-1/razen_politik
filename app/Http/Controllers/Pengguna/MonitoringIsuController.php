<?php

namespace App\Http\Controllers\Pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MonitoringIsuController extends Controller
{
    public function index()
    {
        return view('pengguna.monitoring-isu.index');
    }
}
