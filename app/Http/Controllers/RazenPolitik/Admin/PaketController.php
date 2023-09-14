<?php

namespace App\Http\Controllers\RazenPolitik\Admin;

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

use App\Models\MasterPaket;
use App\Models\PivotPaket;
use App\Models\PivotPaketFitur;
use App\Models\MasterFitur;
use App\Models\MasterRole;
use App\Models\MasterJabatanPilihan;

class PaketController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            $data = PivotPaket::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function($data){
                    $button_atur_fitur = '<a class="btn btn-warning waves-effect waves-light" href="'.route('razen-politik.admin.paket.atur-fitur', ['id' => $data->id]).'" title="Atur Fitur"><i class="fas fa-right-long"></i></a>';
                    $button_show = '<button type="button" name="detail" id="'.$data->id.'" class="detail btn btn-icon waves-effect btn-info" title="Detail Data"><i class="fas fa-eye"></i></button>';
                    $button_edit = '<button type="button" name="edit" id="'.$data->id.'"
                    class="edit btn btn-icon waves-effect btn-warning" title="Edit Data"><i class="fas fa-edit"></i></button>';
                    $button_delete = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-icon waves-effect btn-danger" title="Delete Data"><i class="fas fa-trash"></i></button>';
                    $button = $button_atur_fitur .' '. $button_show . ' ' . $button_edit . ' ' . $button_delete;
                    return $button;
                })
                ->editColumn('paket_id', function($data){
                    return $data->paket->nama;
                })
                ->editColumn('jabatan_pilihan_id', function($data){
                    return $data->jabatan_pilihan->nama;
                })
                ->editColumn('harga', function($data){
                    return 'Rp. '.number_format($data->harga, 2, ',', '.');
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
        $paket = MasterPaket::pluck('nama', 'id');
        $jabatan_pilihan = MasterJabatanPilihan::pluck('nama', 'id');
        return view('razen-politik.admin.paket.index', [
            'paket' => $paket,
            'jabatan_pilihan' => $jabatan_pilihan
        ]);
    }

    public function store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'paket_id' => 'required',
            'jabatan_pilihan_id' => 'required',
            'harga' => 'required',
            'tipe_waktu' => 'required',
            'lama_waktu' => 'required'
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $pivot_paket = new PivotPaket;
        $pivot_paket->paket_id = $request->paket_id;
        $pivot_paket->jabatan_pilihan_id = $request->jabatan_pilihan_id;
        $pivot_paket->harga = $request->harga;
        $pivot_paket->tipe_waktu = $request->tipe_waktu;
        $pivot_paket->lama_waktu = $request->lama_waktu;
        $pivot_paket->save();

        return response()->json(['success' => 'Berhasil menyimpan data']);
    }

    public function show($id)
    {
        $data = PivotPaket::find($id);
        $data['nama_paket'] = $data->paket->nama;
        $data['nama_jabatan_pilihan'] = $data->jabatan_pilihan->nama;
        return response()->json(['result' => $data]);
    }

    public function edit($id)
    {
        return response()->json(['result' => PivotPaket::find($id)]);
    }

    public function update(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'paket_id' => 'required',
            'jabatan_pilihan_id' => 'required',
            'harga' => 'required',
            'tipe_waktu' => 'required',
            'lama_waktu' => 'required'
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $pivot_paket = PivotPaket::find($request->hidden_id);
        $pivot_paket->paket_id = $request->paket_id;
        $pivot_paket->jabatan_pilihan_id = $request->jabatan_pilihan_id;
        $pivot_paket->harga = $request->harga;
        $pivot_paket->tipe_waktu = $request->tipe_waktu;
        $pivot_paket->lama_waktu = $request->lama_waktu;
        $pivot_paket->save();

        return response()->json(['success' => 'Berhasil merubah data']);
    }

    public function destroy($id)
    {
        $get_pivot_paket_fiturs = PivotPaketFitur::where('pivot_paket_id', $id)->get();
        foreach ($get_pivot_paket_fiturs as $get_pivot_paket_fitur) {
            PivotPaketFitur::find($get_pivot_paket_fitur->id)->delete();
        }

        PivotPaket::find($id)->delete();
    }

    public function atur_fitur($id)
    {

    }
}
