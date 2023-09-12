<?php

namespace App\Http\Controllers\Pengguna\Rekapitulasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use DB;
use Validator;
use DataTables;
use Carbon\Carbon;
use Auth;
use Maatwebsite\Excel\Facades\Excel;

use App\Models\MasterProvinsi;

class RelawanController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            $data = MasterProvinsi::whereHas('relawan', function($q){
                        $q->whereHas('koordinator', function($q){
                            $q->where('pengguna_id', Auth::user()->pengguna_id);
                        });
                    });
            $data = $data->withCount([
                'relawan as laki_laki' => function($q) {
                    $q->whereHas('koordinator', function($q){
                        $q->where('pengguna_id', Auth::user()->pengguna_id);
                    });
                    $q->where('jenis_kelamin', 'L');
                },
                'relawan as perempuan' => function($q) {
                    $q->whereHas('koordinator', function($q){
                        $q->where('pengguna_id', Auth::user()->pengguna_id);
                    });
                    $q->where('jenis_kelamin', 'P');
                },
                'relawan as total' => function($q) {
                    $q->whereHas('koordinator', function($q){
                        $q->where('pengguna_id', Auth::user()->pengguna_id);
                    });
                }
            ]);
            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
        return view('pengguna.rekapitulasi.relawan.index');
    }
}
