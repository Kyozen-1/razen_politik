<?php

namespace App\Http\Controllers\Pengguna;

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

use App\Models\MasterProvinsi;
use App\Models\Koordinator;
use App\Models\Relawan;
use App\Models\MasterJenisSurvey;
use App\Models\KunjunganRelawan;

class RuteHarianController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            $data = KunjunganRelawan::whereHas('relawan', function($q){
                $q->whereHas('koordinator', function($q){
                    $q->where('pengguna_id', Auth::user()->pengguna_id);
                });
            })->latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('tgl', function($data){
                    return Carbon::parse($data->tgl)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y');
                })
                ->addColumn('wilayah', function($data){
                    return $data->kabupaten_kota->nama;
                })
                ->rawColumns(['aksi', 'wilayah'])
                ->make(true);
        }
        return view('pengguna.relawan.rute-harian.index');
    }
}
