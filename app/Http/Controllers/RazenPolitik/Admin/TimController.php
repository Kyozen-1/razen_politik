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
use App\Models\Tim;

class TimController extends Controller
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
            $data = Tim::latest()->get();
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
                    return '<img src="'.asset('images/razen-politik/tim/'.$data->foto).'" style="height:5rem;">';
                })
                ->rawColumns(['aksi', 'foto'])
                ->make(true);
        }
        return view('razen-politik.admin.tim.index');
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
            'jabatan' => 'required | max:255'
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $fotoExtension = $request->foto->extension();
        $fotoName =  uniqid().'-'.date("ymd").'.'.$fotoExtension;
        $foto = Image::make($request->foto);
        $fotoSize = public_path('images/razen-politik/tim/'.$fotoName);
        $foto->save($fotoSize, 60);

        $tim = new Tim;
        $tim->nama = $request->nama;
        $tim->jabatan = $request->jabatan;
        $tim->foto = $fotoName;
        $tim->save();

        return response()->json(['success' => 'Berhasil menambahkan tim']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(['result' => Tim::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return response()->json(['result' => Tim::find($id)]);
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
            'jabatan' => 'required | max:255'
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $tim = Tim::find($request->hidden_id);
        $tim->nama = $request->nama;
        $tim->jabatan = $request->jabatan;
        if($request->foto)
        {
            File::delete(public_path('images/razen-politik/tim/'.$tim->foto));

            $fotoExtension = $request->foto->extension();
            $fotoName =  uniqid().'-'.date("ymd").'.'.$fotoExtension;
            $foto = Image::make($request->foto);
            $fotoSize = public_path('images/razen-politik/tim/'.$fotoName);
            $foto->save($fotoSize, 60);

            $tim->foto = $fotoName;
        }
        $tim->save();

        return response()->json(['success' => 'Berhasil menambahkan tim']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tim = Tim::find($id);

        File::delete(public_path('images/razen-politik/tim/'.$tim->foto));

        $tim->delete();
    }
}
