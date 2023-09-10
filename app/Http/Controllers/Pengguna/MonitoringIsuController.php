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
use Maatwebsite\Excel\Facades\Excel;

use App\Models\MasterProvinsi;
use App\Models\LaporanIsu;
use App\Models\MasterJenisIsu;

class MonitoringIsuController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            $data = LaporanIsu::where('pengguna_id', Auth::user()->pengguna_id);
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
            $data = $data->latest()->get();
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
                ->editColumn('jenis_isu_id', function($data){
                    return $data->jenis_isu->nama;
                })
                ->editColumn('tgl', function($data){
                    return Carbon::parse($data->tgl)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y ; h:i a');
                })
                ->editColumn('tgl_ditanggapi', function($data){
                    if($data->tgl_ditanggapi)
                    {
                        return Carbon::parse($data->tgl_ditanggapi)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y ; h:i a');
                    } else {
                        return '';
                    }
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
        $provinsi = MasterProvinsi::pluck('nama', 'id');
        $jenis_isu = MasterJenisIsu::pluck('nama', 'id');
        return view('pengguna.monitoring-isu.index',[
            'provinsi' => $provinsi,
            'jenis_isu' => $jenis_isu
        ]);
    }

    public function store(Request $request)
    {
        try {
            $errors = Validator::make($request->all(), [
                'provinsi_id' => 'required',
                'kabupaten_kota_id' => 'required',
                'kecamatan_id' => 'required',
                'kelurahan_id' => 'required',
                'alamat' => 'required',
                'rt' => 'required | max: 3',
                'rw' => 'required | max: 3',
                'jenis_isu_id' => 'required',
                'pelapor' => 'required | max:255',
                'judul_isu' => 'required | max:255',
                'dampak' => 'required',
                'tgl' => 'required',
                'status_isu' => 'required'
            ]);

            if($errors -> fails())
            {
                return response()->json(['errors' => $errors->errors()->all()]);
            }

            if($request->status_isu == 1)
            {
                $errors = Validator::make($request->all(), [
                    'tgl_ditanggapi' => 'required'
                ]);

                if($errors -> fails())
                {
                    return response()->json(['errors' => $errors->errors()->all()]);
                }
            }

            $laporan_isu = new LaporanIsu;
            $laporan_isu->pengguna_id = Auth::user()->pengguna_id;
            $laporan_isu->provinsi_id = $request->provinsi_id;
            $laporan_isu->kabupaten_kota_id = $request->kabupaten_kota_id;
            $laporan_isu->kecamatan_id = $request->kecamatan_id;
            $laporan_isu->kelurahan_id = $request->kelurahan_id;
            $laporan_isu->alamat = $request->alamat;
            $laporan_isu->rt = $request->rt;
            $laporan_isu->rw = $request->rw;
            $laporan_isu->jenis_isu_id = $request->jenis_isu_id;
            $laporan_isu->pelapor = $request->pelapor;
            $laporan_isu->judul_isu = $request->judul_isu;
            $laporan_isu->dampak = $request->dampak;
            $laporan_isu->tgl = $request->tgl;
            if($request->status_isu == 1)
            {
                $laporan_isu->tgl_ditanggapi = $request->tgl_ditanggapi;
            }
            $laporan_isu->save();

            return response()->json(['success' => 'Berhasil menyimpan data']);
        } catch (\Throwable $th) {
            return response()->json(['errors' => $th->getMessage()]);
        }
    }

    public function show($id)
    {
        $data = LaporanIsu::find($id);
        $data['nama_jenis_isu'] = $data->jenis_isu->nama;
        $data['nama_provinsi'] = $data->provinsi->nama;
        $data['nama_kabupaten_kota'] = $data->kabupaten_kota->nama;
        $data['nama_kecamatan'] = $data->kecamatan->nama;
        $data['nama_kelurahan'] = $data->kelurahan->nama;
        $data['tgl'] = Carbon::parse($data->tgl)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y ; h:i a');
        $data['tgl_ditanggapi'] = $data->tgl_ditanggapi ? Carbon::parse($data->tgl_ditanggapi)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y ; h:i a') : 'Belum ada';
        $data['status_isu'] = $data->tgl_ditanggapi ? 'Sudah Ditanggapi' : 'Belum Ditanggapi';

        return response()->json(['result' => $data]);
    }

    public function edit($id)
    {
        $data = LaporanIsu::find($id);

        $tgl = strtotime($data->tgl);
        $edit_tgl = date('Y-m-d', $tgl);

        $data['tgl'] = $edit_tgl;

        $data['status_isu'] = $data->tgl_ditanggapi ? 1 : 0;

        $tgl_ditanggapi = strtotime($data->tgl_ditanggapi);
        $edit_tgl_ditanggapi = date('Y-m-d\TH:i', $tgl_ditanggapi);

        $data['tgl_ditanggapi'] = $edit_tgl_ditanggapi;

        return response()->json(['result' => $data]);
    }

    public function update(Request $request)
    {
        try {
            $errors = Validator::make($request->all(), [
                'provinsi_id' => 'required',
                'kabupaten_kota_id' => 'required',
                'kecamatan_id' => 'required',
                'kelurahan_id' => 'required',
                'alamat' => 'required',
                'rt' => 'required | max: 3',
                'rw' => 'required | max: 3',
                'jenis_isu_id' => 'required',
                'pelapor' => 'required | max:255',
                'judul_isu' => 'required | max:255',
                'dampak' => 'required',
                'tgl' => 'required',
                'status_isu' => 'required'
            ]);

            if($errors -> fails())
            {
                return response()->json(['errors' => $errors->errors()->all()]);
            }

            if($request->status_isu == 1)
            {
                $errors = Validator::make($request->all(), [
                    'tgl_ditanggapi' => 'required'
                ]);

                if($errors -> fails())
                {
                    return response()->json(['errors' => $errors->errors()->all()]);
                }
            }

            $laporan_isu = LaporanIsu::find($request->hidden_id);
            $laporan_isu->provinsi_id = $request->provinsi_id;
            $laporan_isu->kabupaten_kota_id = $request->kabupaten_kota_id;
            $laporan_isu->kecamatan_id = $request->kecamatan_id;
            $laporan_isu->kelurahan_id = $request->kelurahan_id;
            $laporan_isu->alamat = $request->alamat;
            $laporan_isu->rt = $request->rt;
            $laporan_isu->rw = $request->rw;
            $laporan_isu->jenis_isu_id = $request->jenis_isu_id;
            $laporan_isu->pelapor = $request->pelapor;
            $laporan_isu->judul_isu = $request->judul_isu;
            $laporan_isu->dampak = $request->dampak;
            $laporan_isu->tgl = $request->tgl;
            if($request->status_isu == 1)
            {
                $laporan_isu->tgl_ditanggapi = $request->tgl_ditanggapi;
            }
            $laporan_isu->save();

            return response()->json(['success' => 'Berhasil merubah data']);
        } catch (\Throwable $th) {
            return response()->json(['errors' => $th->getMessage()]);
        }
    }

    public function destroy($id)
    {
        LaporanIsu::find($id)->delete();
    }
}
