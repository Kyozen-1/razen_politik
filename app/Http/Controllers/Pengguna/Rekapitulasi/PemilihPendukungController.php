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

class PemilihPendukungController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            $data = MasterProvinsi::whereHas('dpt_manual', function($q){
                        $q->where('pengguna_id', Auth::user()->pengguna_id);
                    });
            $data = $data->withCount([
                'dpt_manual as laki_laki' => function($q) {
                    $q->where('pengguna_id', Auth::user()->pengguna_id);
                    $q->where('jenis_kelamin', 'L');
                    $q->where('status_pemilih', '1');
                },
                'dpt_manual as perempuan' => function($q) {
                    $q->where('pengguna_id', Auth::user()->pengguna_id);
                    $q->where('jenis_kelamin', 'P');
                    $q->where('status_pemilih', '1');
                },
                'dpt_manual as total' => function($q) {
                    $q->where('pengguna_id', Auth::user()->pengguna_id);
                    $q->where('status_pemilih', '1');
                }
            ]);
            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
        return view('pengguna.rekapitulasi.pemilih-pendukung.index');
    }
}
