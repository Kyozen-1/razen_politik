<?php

namespace App\Http\Controllers\Koordinator;

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

class JadwalKunjunganRelawanController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            $data = KunjunganRelawan::whereHas('relawan', function($q){
                $q->where('koordinator_id', Auth::user()->koordinator_id);
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
                ->editColumn('relawan_id', function($data){
                    return $data->relawan->nama;
                })
                ->editColumn('jenis_survey_id', function($data){
                    return $data->jenis_survey->nama;
                })
                ->editColumn('tgl', function($data){
                    return Carbon::parse($data->tgl)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y');
                })
                ->addColumn('wilayah', function($data){
                    return $data->kabupaten_kota->nama;
                })
                ->rawColumns(['aksi', 'wilayah'])
                ->make(true);
        }
        $provinsi = MasterProvinsi::pluck('nama', 'id');
        $koordinator = Koordinator::where('pengguna_id', Auth::user()->pengguna_id)->pluck('nama', 'id');
        $jenis_survey = MasterJenisSurvey::pluck('nama', 'id');
        $relawan = Relawan::where('koordinator_id', Auth::user()->koordinator_id)->pluck('nama', 'id');
        return view('koordinator.jadwal-kunjungan-relawan.index',[
            'provinsi' => $provinsi,
            'koordinator' => $koordinator,
            'jenis_survey' => $jenis_survey,
            'relawan' => $relawan
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
                'koordinator_id' => 'required',
                'relawan_id' => 'required',
                'jenis_survey_id' => 'required',
                'tgl' => 'required | date'
            ]);

            if($errors -> fails())
            {
                return response()->json(['errors' => $errors->errors()->all()]);
            }

            $kunjungan_relawan = new KunjunganRelawan;
            $kunjungan_relawan->relawan_id = $request->relawan_id;
            $kunjungan_relawan->jenis_survey_id = $request->jenis_survey_id;
            $kunjungan_relawan->tgl = $request->tgl;
            $kunjungan_relawan->provinsi_id = $request->provinsi_id;
            $kunjungan_relawan->kabupaten_kota_id = $request->kabupaten_kota_id;
            $kunjungan_relawan->kecamatan_id = $request->kecamatan_id;
            $kunjungan_relawan->kelurahan_id = $request->kelurahan_id;
            $kunjungan_relawan->save();

            return response()->json(['success' => 'Berhasil menyimpan data']);
        } catch (\Throwable $th) {
            return response()->json(['errors' => $th->getMessage()]);
        }
    }

    public function show($id)
    {
        $data = KunjunganRelawan::find($id);
        $data['nama_provinsi'] = $data->provinsi->nama;
        $data['nama_kabupaten_kota'] = $data->kabupaten_kota->nama;
        $data['nama_kecamatan'] = $data->kecamatan->nama;
        $data['nama_kelurahan'] = $data->kelurahan->nama;
        $data['nama_jenis_survey'] = $data->jenis_survey->nama;
        $data['nama_relawan'] = $data->relawan->nama;
        $data['nama_koordinator'] = $data->relawan->koordinator->nama;
        $data['tgl'] = Carbon::parse($data->tgl)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y');
        return response()->json(['result' => $data]);
    }

    public function edit($id)
    {
        $data = KunjunganRelawan::find($id);
        $data['koordinator_id'] = $data->relawan->koordinator_id;
        $data['tgl'] = Carbon::parse($data->tgl)->format('Y-m-d');
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
                'koordinator_id' => 'required',
                'relawan_id' => 'required',
                'jenis_survey_id' => 'required',
                'tgl' => 'required | date'
            ]);

            if($errors -> fails())
            {
                return response()->json(['errors' => $errors->errors()->all()]);
            }

            $kunjungan_relawan = KunjunganRelawan::find($request->hidden_id);
            $kunjungan_relawan->relawan_id = $request->relawan_id;
            $kunjungan_relawan->jenis_survey_id = $request->jenis_survey_id;
            $kunjungan_relawan->tgl = $request->tgl;
            $kunjungan_relawan->provinsi_id = $request->provinsi_id;
            $kunjungan_relawan->kabupaten_kota_id = $request->kabupaten_kota_id;
            $kunjungan_relawan->kecamatan_id = $request->kecamatan_id;
            $kunjungan_relawan->kelurahan_id = $request->kelurahan_id;
            $kunjungan_relawan->save();

            return response()->json(['success' => 'Berhasil merubah data']);
        } catch (\Throwable $th) {
            return response()->json(['errors' => $th->getMessage()]);
        }
    }

    public function destroy($id)
    {
        KunjunganRelawan::find($id)->delete();
    }
}
