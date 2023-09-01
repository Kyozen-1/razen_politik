<?php

namespace App\Http\Controllers\Pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use Carbon\Carbon;

use App\Models\Pemilu;
use App\Models\AkunPengguna;

class DashboardController extends Controller
{
    public function index()
    {
        $pemilu = Pemilu::latest()->first();
        return view('pengguna.dashboard.index', [
            'pemilu' => $pemilu
        ]);
    }

    public function change(Request $request)
    {
        $user = AkunPengguna::find(Auth::user()->id);
        $user->color_layout = $request->color_layout;
        $user->nav_color = $request->nav_color;
        $user->behaviour = $request->behaviour;
        $user->layout = $request->layout;
        $user->radius = $request->radius;
        $user->placement = $request->placement;
        $user->save();
    }
}
