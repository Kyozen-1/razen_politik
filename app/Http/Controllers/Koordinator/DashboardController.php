<?php

namespace App\Http\Controllers\Koordinator;

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

use App\Models\AkunKoordinator;

class DashboardController extends Controller
{
    public function index()
    {
        return view('koordinator.dashboard.index');
    }

    public function change(Request $request)
    {
        $user = AkunKoordinator::find(Auth::user()->id);
        $user->color_layout = $request->color_layout;
        $user->nav_color = $request->nav_color;
        $user->behaviour = $request->behaviour;
        $user->layout = $request->layout;
        $user->radius = $request->radius;
        $user->placement = $request->placement;
        $user->save();
    }
}
