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
use App\Models\RespondenKunjungan;

class RiwayatKunjunganController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            $data = RespondenKunjungan::whereHas('kunjungan_relawan', function($q){
                if(request()->provinsi_id)
                {
                    $q->where('provinsi_id', request()->provinsi_id);
                }
                if(request()->kabupaten_kota_id)
                {
                    $q->where('kabupaten_kota_id', request()->kabupaten_kota_id);
                }
                if(request()->kecamatan_id)
                {
                    $q->where('kecamatan_id', request()->kecamatan_id);
                }
                if(request()->kelurahan_id)
                {
                    $q->where('kelurahan_id', request()->kelurahan_id);
                }
                $q->whereHas('relawan', function($q){
                    $q->whereHas('koordinator', function($q){
                        $q->where('pengguna_id', Auth::user()->pengguna_id);
                    });
                });
            })->latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('tgl_kunjungan', function($data){
                    return Carbon::parse($data->kunjungan_relawan->tgl)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y');
                })
                ->addColumn('wilayah', function($data){
                    return $data->kunjungan_relawan->kabupaten_kota->nama;
                })
                ->make(true);
        }
        $provinsi = MasterProvinsi::pluck('nama', 'id');
        return view('pengguna.relawan.riwayat-kunjungan.index', [
            'provinsi' => $provinsi
        ]);
    }
}
