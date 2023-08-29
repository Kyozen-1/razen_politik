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
use App\Models\MasterTps;

class DataTpsController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            $data = MasterTps::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('provinsi_id', function($data){
                    return $data->provinsi->nama;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }

        return view('pengguna.master-data.data-tps.index');
    }
}
