<?php

namespace App\Http\Controllers\Pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use DataTables;
use Carbon\Carbon;
use Auth;

use App\Models\MasterProvinsi;
use App\Models\MasterDpt;


class DataJumlahDptController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            $data = MasterDpt::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('provinsi_id', function($data){
                    return $data->provinsi->nama;
                })
                ->addColumn('total', function($data){
                    $jumlah_lk = $data->jumlah_lk;
                    $jumlah_p = $data->jumlah_p;
                    $total = $jumlah_lk + $jumlah_p;
                    return $total;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
        return view('pengguna.master-data.data-jumlah-dpt.index');
    }
}
