<?php

namespace App\Http\Controllers\Pengguna\Logistik;

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

use App\Models\Logistik;
use App\Models\PenerimaanLogistik;

class PenerimaanController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            $data = PenerimaanLogistik::whereHas('logistik', function($q){
                        $q->where('pengguna_id', Auth::user()->pengguna_id);
                    })->latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function($data){
                    $button_show = '<button type="button" name="detail" id="'.$data->id.'" class="detail btn btn-icon waves-effect btn-info" title="Detail Data"><i class="fas fa-eye"></i></button>';
                    $button_edit = '<button type="button" name="edit" id="'.$data->id.'"
                    class="edit btn btn-icon waves-effect btn-warning" title="Edit Data"><i class="fas fa-edit"></i></button>';
                    $button_delete = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-icon waves-effect btn-danger" title="Delete Data"><i class="fas fa-trash"></i></button>';
                    $button = $button_show . ' ' . $button_edit . ' ' . $button_delete;
                    return $button;
                })
                ->editColumn('tgl_terima', function($data){
                    return Carbon::parse($data->tgl_terima)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y ; h:i a');
                })
                ->addColumn('nama', function($data){
                    return $data->logistik->nama;
                })
                ->addColumn('satuan', function($data){
                    return $data->logistik->satuan;
                })
                ->addColumn('harga', function($data){
                    return 'Rp. '.number_format($data->logistik->harga, 2, ',', '.');
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
        return view('pengguna.logistik.penerimaan.index');
    }

    public function show($id)
    {
        $data = PemesananLogistik::find($id);
        $data['nama'] = $data->logistik->nama;
        $data['satuan'] = $data->logistik->satuan;
        $data['harga'] = $data->logistik->harga;
        $data['foto'] = $data->logistik->foto;
        if($data->tgl_diterima)
        {
            $data['tgl_diterima'] = Carbon::parse($data->tgl_diterima)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y ; h:i a');
        }

        return response()->json(['result' => $data]);
    }
}
