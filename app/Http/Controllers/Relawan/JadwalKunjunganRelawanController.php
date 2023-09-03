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
use Illuminate\Support\Facades\Crypt;
use Maatwebsite\Excel\Facades\Excel;

use App\Models\MasterProvinsi;
use App\Models\Koordinator;
use App\Models\Relawan;
use App\Models\MasterJenisSurvey;
use App\Models\KunjunganRelawan;
use App\Models\RespondenKunjungan;
use App\Imports\RespondenKunjunganImpor;

class JadwalKunjunganRelawanController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            $data = KunjunganRelawan::where('relawan_id', Auth::user()->relawan_id)->latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function($data){
                    return '<a href="'.route('relawan.jadwal-kunjungan-relawan.show', ['id' => Crypt::encryptString($data->id)]).'" class="detail btn btn-icon waves-effect btn-info" title="Detail Data"><i class="fas fa-eye"></i></a>';
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
                ->addColumn('status_kunjungan', function($data){
                    $tgl_kunjungan = strtotime(Carbon::parse($data->tgl)->format("m/d/Y"));
                    $tgl_sekarang = strtotime(Carbon::now()->format("m/d/Y"));
                    $tgl_kunjungan_1 = strtotime(Carbon::parse($data->tgl)->addDays(1)->format("m/d/Y"));
                    if($tgl_sekarang < $tgl_kunjungan)
                    {
                        return '<span class="text-warning">Belum Dilaksanakan</span>';
                    }

                    if($tgl_sekarang > $tgl_kunjungan && $tgl_sekarang < $tgl_kunjungan_1)
                    {
                        return '<span class="text-success">Sedang berlangsung</span>';
                    }

                    if($tgl_sekarang > $tgl_kunjungan_1)
                    {
                        return '<span class="text-danger">Sudah selesai</span>';
                    }
                })
                ->rawColumns(['aksi', 'wilayah', 'status_kunjungan'])
                ->make(true);
        }
        return view('relawan.jadwal-kunjungan-relawan.index');
    }

    public function show($id)
    {
        // $id = Crypt::decryptString($id);
        if(request()->ajax())
        {
            $data = RespondenKunjungan::where('kunjungan_relawan_id', Crypt::decryptString($id))->latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
        $kunjungan_relawan = KunjunganRelawan::find(Crypt::decryptString($id));
        return view('relawan.jadwal-kunjungan-relawan.detail',[
            'kunjungan_relawan' => $kunjungan_relawan,
            'id' => $id,
        ]);
    }

    public function impor(Request $request)
    {
        $file = $request->file('file_excel');
        $kunjungan_relawan_id = $request->kunjungan_relawan_id;
        // import data
        Excel::import(new RespondenKunjunganImpor($kunjungan_relawan_id), $file);

        $msg = [session('import_status'), session('import_message')];

        if ($msg[0]) {
            Alert::success('Berhasil', $msg[1]);
            return redirect()->route('relawan.jadwal-kunjungan-relawan.show',['id' => $kunjungan_relawan_id]);
        } else {
            Alert::error('Gagal', $msg[1]);
            return redirect()->route('relawan.jadwal-kunjungan-relawan.show',['id' => $kunjungan_relawan_id]);
        }
    }
}
