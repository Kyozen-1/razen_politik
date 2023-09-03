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
use App\Models\MasterJabatanPilihan;
use App\Models\MasterDapil;
use App\Models\PivotKecamatanMasterDapil;

class DapilController extends Controller
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
            $data = MasterDapil::latest()->get();
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
                ->editColumn('provinsi_id', function($data){
                    return $data->provinsi->nama;
                })
                ->editColumn('kabupaten_kota_id', function($data){
                    return $data->kabupaten_kota->nama;
                })
                ->editColumn('jabatan_pilihan_id', function($data){
                    return $data->jabatan_pilihan->nama;
                })
                ->addColumn('kecamatan', function($data){
                    $kecamatans = $data->pivot_kecamatan_master_dapil->map(function($row){
                        return [
                            'nama' => $row->kecamatan->nama,
                        ];
                    });

                    $html = '<ul>';
                    foreach ($kecamatans as $kecamatan) {
                        $html .= '<li>' . $kecamatan['nama'] . '</li>';
                    }
                    $html .= '</ul>';

                    return $html;
                })
                ->rawColumns(['aksi', 'kecamatan'])
                ->make(true);
        }
        $provinsi = MasterProvinsi::pluck('nama', 'id');
        $jabatan_pilihan = MasterJabatanPilihan::pluck('nama', 'id');
        return view('razen-politik.master-data.dapil.index', [
            'provinsi' => $provinsi,
            'jabatan_pilihan' => $jabatan_pilihan
        ]);
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
            'kecamatan_id' => 'required|array',
            'kecamatan_id.*' => 'required|distinct',
            'jabatan_pilihan_id' => 'required',
            'nama' => 'required | max:255'
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $master_dapil = new MasterDapil;
        $master_dapil->provinsi_id = $request->provinsi_id;
        $master_dapil->kabupaten_kota_id = $request->kabupaten_kota_id;
        $master_dapil->jabatan_pilihan_id = $request->jabatan_pilihan_id;
        $master_dapil->nama = $request->nama;
        $master_dapil->save();

        $kecamatan_id = $request->kecamatan_id;
        foreach ($kecamatan_id as $value) {
            $pivot = new PivotKecamatanMasterDapil;
            $pivot->dapil_id = $master_dapil->id;
            $pivot->kecamatan_id = $value;
            $pivot->save();
        }

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
        $data = MasterDapil::find($id);
        $data->data_provinsi = $data->provinsi->kode . ' : ' . $data->provinsi->nama;
        $data->data_kabupaten_kota = $data->kabupaten_kota->kode . ' : ' . $data->kabupaten_kota->nama;
        $data->data_jabatan_pilihan = $data->jabatan_pilihan->nama;

        $kecamatans = $data->pivot_kecamatan_master_dapil->map(function($row){
            return [
                'nama' => $row->kecamatan->nama,
            ];
        });

        $data_kecamatan = [];
        foreach ($kecamatans as $kecamatan) {
            $data_kecamatan[] = $kecamatan['nama'];
        }
        $data->data_kecamatan = implode(', ', $data_kecamatan);

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
        $data = MasterDapil::find($id);

        $kecamatans = $data->pivot_kecamatan_master_dapil->map(function($row){
            return [
                'id' => $row->kecamatan->id,
            ];
        });

        $data_kecamatan = [];
        foreach ($kecamatans as $kecamatan) {
            $data_kecamatan[] = $kecamatan['id'];
        }

        $data->kecamatan = $data_kecamatan;

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
            'kecamatan_id' => 'required|array',
            'kecamatan_id.*' => 'required|distinct',
            'jabatan_pilihan_id' => 'required',
            'nama' => 'required | max:255'
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $master_dapil = MasterDapil::find($request->hidden_id);
        $master_dapil->provinsi_id = $request->provinsi_id;
        $master_dapil->kabupaten_kota_id = $request->kabupaten_kota_id;
        $master_dapil->jabatan_pilihan_id = $request->jabatan_pilihan_id;
        $master_dapil->nama = $request->nama;
        $master_dapil->save();

        // Hapus Master Dapil Start
        $get_pivots = PivotKecamatanMasterDapil::where('dapil_id', $request->hidden_id)->get();
        foreach ($get_pivots as $get_pivot) {
            PivotKecamatanMasterDapil::find($get_pivot->id)->delete();
        }
        // Hapus Master Dapil End

        $kecamatan_id = $request->kecamatan_id;
        foreach ($kecamatan_id as $value) {
            $pivot = new PivotKecamatanMasterDapil;
            $pivot->dapil_id = $master_dapil->id;
            $pivot->kecamatan_id = $value;
            $pivot->save();
        }

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
        $master_dapil = MasterDapil::find($id);

        // Hapus Master Dapil Start
        $get_pivots = PivotKecamatanMasterDapil::where('dapil_id', $request->hidden_id)->get();
        foreach ($get_pivots as $get_pivot) {
            PivotKecamatanMasterDapil::find($get_pivot->id)->delete();
        }
        // Hapus Master Dapil End

        $master_dapil->delete();
    }
}
