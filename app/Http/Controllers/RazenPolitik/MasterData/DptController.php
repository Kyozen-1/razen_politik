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

use App\Models\MasterProvinsi;
use App\Models\MasterDpt;

class DptController extends Controller
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
            $data = MasterDpt::latest()->get();
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
                ->addColumn('total', function($data){
                    $jumlah_lk = $data->jumlah_lk;
                    $jumlah_p = $data->jumlah_p;
                    $total = $jumlah_lk + $jumlah_p;
                    return $total;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }

        $provinsi = MasterProvinsi::pluck('nama', 'id');
        return view('razen-politik.master-data.dpt.index', [
            'provinsi' => $provinsi
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
            'jumlah_lk' => 'required',
            'jumlah_p' => 'required',
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $master_dpt = new MasterDpt;
        $master_dpt->provinsi_id = $request->provinsi_id;
        $master_dpt->jumlah_lk = $request->jumlah_lk;
        $master_dpt->jumlah_p = $request->jumlah_p;
        $master_dpt->save();

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
        $data = MasterDpt::find($id);
        $data['nama_provinsi'] = $data->provinsi->nama;

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
        return response()->json(['result' => MasterDpt::find($id)]);
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
            'jumlah_lk' => 'required',
            'jumlah_p' => 'required',
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $master_dpt = MasterDpt::find($request->hidden_id);
        $master_dpt->provinsi_id = $request->provinsi_id;
        $master_dpt->jumlah_lk = $request->jumlah_lk;
        $master_dpt->jumlah_p = $request->jumlah_p;
        $master_dpt->save();

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
        MasterDpt::find($id)->delete();
    }
}
