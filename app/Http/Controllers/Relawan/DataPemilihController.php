<?php

namespace App\Http\Controllers\Relawan;

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
use App\Models\DptManual;
use App\Models\MasterDapil;
use App\Models\PivotKecamatanMasterDapil;
use App\Imports\RelawanDataPemilihImpor;

class DataPemilihController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            $data = DptManual::where('pengguna_id', Auth::user()->relawan->koordinator->pengguna_id);
            if(request()->provinsi_id)
            {
                $data = $data->where('provinsi_id', request()->provinsi_id);
            }
            if(request()->kabupaten_kota_id)
            {
                $data = $data->where('kabupaten_kota_id', request()->kabupaten_kota_id);
            }
            if(request()->kecamatan_id)
            {
                $data = $data->where('kecamatan_id', request()->kecamatan_id);
            }
            if(request()->kelurahan_id)
            {
                $data = $data->where('kelurahan_id', request()->kelurahan_id);
            }
            if(request()->dapil_id)
            {
                $data = $data->where('dapil_id', request()->dapil_id);
            }
            $data = $data->where('status_pemilih', '1');
            $data = $data->latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function($data){
                    $button_show = '<button type="button" name="detail" id="'.$data->id.'" class="detail btn btn-icon waves-effect btn-info" title="Detail Data"><i class="fas fa-eye"></i></button>';
                    $button_delete = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-icon waves-effect btn-danger" title="Delete Data"><i class="fas fa-trash"></i></button>';
                    $button = $button_show . ' ' . $button_delete;
                    return $button;
                })
                ->editColumn('jenis_kelamin', function($data){
                    if($data->jenis_kelamin == 'L')
                    {
                        return 'Laki - laki';
                    }

                    if($data->jenis_kelamin == 'P')
                    {
                        return 'Perempuan';
                    }
                })
                ->addColumn('rt_rw', function($data){
                    return $data->rt . '/' . $data->rw;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }

        $provinsi = MasterProvinsi::pluck('nama', 'id');
        return view('relawan.data-pemilih.index', [
            'provinsi' => $provinsi
        ]);
    }

    public function impor(Request $request)
    {
        $dapil_id = $request->impor_dapil_id;
        $file = $request->file('file_excel');
        // import data
        Excel::import(new RelawanDataPemilihImpor($dapil_id), $file);

        $msg = [session('import_status'), session('import_message')];

        if ($msg[0]) {
            Alert::success('Berhasil', $msg[1]);
            return redirect()->route('relawan.data-pemilih.index');
        } else {
            Alert::error('Gagal', $msg[1]);
            return redirect()->route('relawan.data-pemilih.index');
        }
    }

    public function show($id)
    {
        $data = DptManual::find($id);
        $data->nama_dapil = $data->dapil->nama;
        $data->nama_provinsi = $data->provinsi->nama;
        $data->nama_kabupaten_kota = $data->kabupaten_kota->nama;
        $data->nama_kecamatan = $data->kecamatan->nama;
        $data->nama_kelurahan = $data->kelurahan->nama;
        if($data->jenis_kelamin == 'L')
        {
            $data->jenis_kelamin = 'Laki - Laki';
        }
        if($data->jenis_kelamin == 'P')
        {
            $data->jenis_kelamin = 'Perempuan';
        }
        if($data->status_pemilih == '1')
        {
            $data->status_pemilih = 'Ya';
        }
        if($data->status_pemilih == '0')
        {
            $data->status_pemilih = 'Tidak';
        }
        $data->rt_rw = $data->rt . '/' . $data->rw;

        return response()->json(['result' => $data]);
    }

    public function destroy($id)
    {
        DptManual::find($id)->delete();
    }
}
