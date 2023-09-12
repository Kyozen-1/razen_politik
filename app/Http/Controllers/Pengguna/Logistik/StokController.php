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
use App\Models\PemesananLogistik;
use App\Models\PenerimaanLogistik;
use App\Models\PengeluaranLogistik;

class StokController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            $data = Logistik::where('pengguna_id', Auth::user()->pengguna_id)->latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function($data){
                    $button_show = '<button type="button" name="detail" id="'.$data->id.'" class="detail btn btn-icon waves-effect btn-info" title="Detail Data"><i class="fas fa-eye"></i></button>';
                    $button = $button_show;
                    return $button;
                })
                ->editColumn('harga', function($data){
                    return 'Rp. '.number_format($data->harga, 2, ',', '.');
                })
                ->addColumn('total_masuk', function($data){
                    $total_masuk = PenerimaanLogistik::where('logistik_id', $data->id)->sum('jumlah');
                    return number_format($total_masuk, 0, ',', '.');
                })
                ->addColumn('total_keluar', function($data){
                    $total_keluar = PengeluaranLogistik::where('logistik_id', $data->id)->sum('jumlah');
                    return number_format($total_keluar, 0, ',', '.');
                })
                ->addColumn('proses_pemesanan', function($data){
                    $proses_pemesanan = PemesananLogistik::where('logistik_id', $data->id)
                                    ->where('status', 'belum_diterima')->sum('jumlah');
                    return number_format($proses_pemesanan, 0, ',', '.');
                })
                ->addColumn('stok', function($data){
                    $total_masuk = PenerimaanLogistik::where('logistik_id', $data->id)->sum('jumlah');
                    $total_keluar = PengeluaranLogistik::where('logistik_id', $data->id)->sum('jumlah');
                    return number_format($total_masuk - $total_keluar, 0, ',', '.');
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
        return view('pengguna.logistik.stok.index');
    }

    public function show($id)
    {
        $data = Logistik::find($id);
        $data['harga'] = 'Rp. '.number_format($data->harga, 2, ',', '.');

        $total_masuk = PenerimaanLogistik::where('logistik_id', $data->id)->sum('jumlah');
        $data['total_masuk'] = number_format($total_masuk, 0, ',', '.');

        $total_keluar = PengeluaranLogistik::where('logistik_id', $data->id)->sum('jumlah');
        $data['total_keluar'] = number_format($total_keluar, 0, ',', '.');

        $proses_pemesanan = PemesananLogistik::where('logistik_id', $data->id)
                                    ->where('status', 'belum_diterima')->sum('jumlah');

        $data['proses_pemesanan'] = number_format($proses_pemesanan, 0, ',', '.');

        $data['stok'] = number_format($total_masuk - $total_keluar, 0, ',', '.');

        return response()->json(['result' => $data]);
    }
}
