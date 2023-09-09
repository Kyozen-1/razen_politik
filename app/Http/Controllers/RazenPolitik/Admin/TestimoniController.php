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
use App\Models\Testimoni;

class TestimoniController extends Controller
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
            $data = Testimoni::latest()->get();
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
                ->editColumn('foto', function($data) {
                    return '<img src="'.asset('images/razen-politik/testimoni/'.$data->foto).'" style="height:5rem;">';
                })
                ->editColumn('testimoni', function($data) {
                    return strip_tags(substr($data->testimoni,0, 20)) . '...';
                })
                ->rawColumns(['aksi', 'foto'])
                ->make(true);
        }
        return view('razen-politik.admin.testimoni.index');
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
            'nama' => 'required | max:255',
            'foto' => 'required | mimes:png,jpg,jpeg,webp',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $fotoExtension = $request->foto->extension();
        $fotoName =  uniqid().'-'.date("ymd").'.'.$fotoExtension;
        $foto = Image::make($request->foto);
        $fotoSize = public_path('images/razen-politik/testimoni/'.$fotoName);
        $foto->save($fotoSize, 60);

        $testimoni = new Testimoni;
        $testimoni->nama = $request->nama;
        $testimoni->deskripsi = $request->deskripsi;
        $testimoni->foto = $fotoName;
        $testimoni->save();

        return response()->json(['success' => 'Berhasil menambahkan Testimoni']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(['result' => Testimoni::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return response()->json(['result' => Testimoni::find($id)]);
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
            'nama' => 'required | max:255',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $testimoni = Testimoni::find($request->hidden_id);
        $testimoni->nama = $request->nama;
        $testimoni->deskripsi = $request->deskripsi;
        if($request->foto)
        {
            File::delete(public_path('images/razen-politik/testimoni/'.$testimoni->foto));

            $fotoExtension = $request->foto->extension();
            $fotoName =  uniqid().'-'.date("ymd").'.'.$fotoExtension;
            $foto = Image::make($request->foto);
            $fotoSize = public_path('images/razen-politik/testimoni/'.$fotoName);
            $foto->save($fotoSize, 60);

            $testimoni->foto = $fotoName;
        }
        $testimoni->save();

        return response()->json(['success' => 'Berhasil menambahkan Testimoni']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimoni = Testimoni::find($id);

        File::delete(public_path('images/razen-politik/testimoni/'.$testimoni->foto));

        $testimoni->delete();
    }
}
