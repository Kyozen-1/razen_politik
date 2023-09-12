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
use App\Models\PengeluaranLogistik;
use App\Models\PenerimaanLogistik;

class PengeluaranController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            $data = PengeluaranLogistik::whereHas('logistik', function($q){
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
                ->editColumn('tgl_keluar', function($data){
                    return Carbon::parse($data->tgl_keluar)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y ; h:i a');
                })
                ->addColumn('nama', function($data){
                    return $data->logistik->nama;
                })
                ->addColumn('satuan', function($data){
                    return $data->logistik->satuan;
                })
                ->addColumn('harga', function($data){
                    return 'Rp. '. number_format($data->logistik->harga, 2, ',', '.');
                })
                ->editColumn('keterangan', function($data){
                    return strip_tags(substr($data->keterangan,0, 20)) . '...';
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
        $logistik = Logistik::pluck('nama', 'id');
        return view('pengguna.logistik.pengeluaran.index',[
            'logistik' => $logistik
        ]);
    }

    public function store(Request $request)
    {
        try {
            $errors = Validator::make($request->all(), [
                'logistik_id' => 'required',
                'jumlah' => 'required',
                'tgl_keluar' => 'required',
                'keterangan' => 'required'
            ]);

            if($errors -> fails())
            {
                return response()->json(['errors' => $errors->errors()->all()]);
            }

            $jumlah_logistik = PenerimaanLogistik::where('logistik_id', $request->logistik_id)->sum('jumlah');
            $logistik_keluar = PengeluaranLogistik::where('logistik_id', $request->logistik_id)->sum('jumlah');

            $cek_jumlah_logistik = $jumlah_logistik - $logistik_keluar - $request->jumlah;
            if($cek_jumlah_logistik > 0)
            {
                $pengeluaran = new PengeluaranLogistik;
                $pengeluaran->logistik_id = $request->logistik_id;
                $pengeluaran->jumlah = $request->jumlah;
                $pengeluaran->tgl_keluar = $request->tgl_keluar;
                $pengeluaran->keterangan = $request->keterangan;
                $pengeluaran->save();
            } else {
                return response()->json(['errors' => 'Persediaan logistik tidak cukup !']);
            }

            return response()->json(['success' => 'Berhasil menyimpan data']);
        } catch (\Throwable $th) {
            return response()->json(['errors' => $th->getMessage()]);
        }
    }
}
