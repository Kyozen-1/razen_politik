<?php

namespace App\Http\Controllers\RazenPolitik\MasterData;

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
use Maatwebsite\Excel\Facades\Excel;

use App\Models\MasterProvinsi;
use App\Models\MasterKabupatenKota;
use App\Models\MasterKecamatan;
use App\Models\MasterKelurahan;
use App\Imports\MasterKelurahanImpor;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())
        {
            $data = MasterKelurahan::latest()->get();
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
                ->addColumn('provinsi', function($data){
                    return $data->kecamatan->kabupaten_kota->provinsi->kode . ' : ' . $data->kecamatan->kabupaten_kota->provinsi->nama;
                })
                ->addColumn('kabupaten_kota', function($data){
                    return $data->kecamatan->kabupaten_kota->kode . ' : ' . $data->kecamatan->kabupaten_kota->nama;
                })
                ->editColumn('kecamatan_id', function($data){
                    return $data->kecamatan->kode . ' : ' . $data->kecamatan->nama;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
        $provinsi = MasterProvinsi::pluck('nama', 'id');
        return view('razen-politik.master-data.kelurahan.index', [
            'provinsi' => $provinsi
        ]);
    }

    public function get_kecamatan(Request $request)
    {
        $kecamatan = MasterKecamatan::where('kabupaten_kota_id', $request->id)->pluck('nama', 'id');
        return response()->json($kecamatan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'provinsi_id' => 'required',
            'kabupaten_kota_id' => 'required',
            'kecamatan_id' => 'required',
            'nama' => 'required | max:255',
            'kode' => 'required',
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $master_kelurahan = new MasterKelurahan;
        $master_kelurahan->kecamatan_id = $request->kecamatan_id;
        $master_kelurahan->nama = $request->nama;
        $master_kelurahan->kode = $request->kode;
        $master_kelurahan->save();

        return response()->json(['success' => 'Berhasil menyimpan data']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = MasterKelurahan::find($id);
        $data->data_provinsi = $data->kecamatan->kabupaten_kota->provinsi->kode . ' : ' . $data->kecamatan->kabupaten_kota->provinsi->nama;
        $data->data_kabupaten_kota = $data->kecamatan->kabupaten_kota->kode . ' : ' . $data->kecamatan->kabupaten_kota->nama;
        $data->data_kecamatan = $data->kecamatan->kode . ' : ' . $data->kecamatan->nama;

        return response()->json(['result' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = MasterKelurahan::find($id);
        $data->provinsi_id = $data->kecamatan->kabupaten_kota->provinsi->id;
        $data->kabupaten_kota_id = $data->kecamatan->kabupaten_kota->id;

        return response()->json(['result' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'provinsi_id' => 'required',
            'kabupaten_kota_id' => 'required',
            'kecamatan_id' => 'required',
            'nama' => 'required | max:255',
            'kode' => 'required',
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $master_kelurahan = MasterKelurahan::find($request->hidden_id);
        $master_kelurahan->kecamatan_id = $request->kecamatan_id;
        $master_kelurahan->nama = $request->nama;
        $master_kelurahan->kode = $request->kode;
        $master_kelurahan->save();

        return response()->json(['success' => 'Berhasil menyimpan data']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MasterKelurahan::find($id)->delete();
    }

    public function impor(Request $request)
    {
        $file = $request->file('file_excel');
        // import data
        Excel::import(new MasterKelurahanImpor, $file);

        $msg = [session('import_status'), session('import_message')];

        if ($msg[0]) {
            Alert::success('Berhasil', $msg[1]);
            return redirect()->route('razen-politik.master-data.kelurahan.index');
        } else {
            Alert::error('Gagal', $msg[1]);
            return redirect()->route('razen-politik.master-data.kelurahan.index');
        }
    }
}
