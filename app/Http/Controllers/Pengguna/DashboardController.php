<?php

namespace App\Http\Controllers\Pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pemilu;

class DashboardController extends Controller
{
    public function index()
    {
        $pemilu = Pemilu::latest()->first();
        return view('pengguna.dashboard.index', [
            'pemilu' => $pemilu
        ]);
    }
}
