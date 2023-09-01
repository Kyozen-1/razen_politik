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

use App\Models\MasterProvinsi;
use App\Models\AkunRelawan;
use App\Models\Relawan;
use App\Models\Koordinator;

class ListRelawanController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            $data = Relawan::whereHas('koordinator', function($q){
                        $q->where('pengguna_id', Auth::user()->pengguna_id);
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
                ->editColumn('status_undangan', function($data){
                    if($data->status_undangan == '1')
                    {
                        return 'Iya';
                    }
                    if($data->status_undangan == '0')
                    {
                        return 'Tidak';
                    }
                })
                ->editColumn('foto', function($data){
                    return '<img src="'.asset('images/pengguna/relawan/'.$data->foto).'" style="height:5rem">';
                })
                ->addColumn('password_default', function($data){
                    return $data->akun_relawan->password_default;
                })
                ->rawColumns(['aksi', 'foto'])
                ->make(true);
        }

        $provinsi = MasterProvinsi::pluck('nama', 'id');
        $koordinator = Koordinator::where('pengguna_id', Auth::user()->pengguna_id)->pluck('nama', 'id');
        return view('pengguna.relawan.list-relawan.index',[
            'provinsi' => $provinsi,
            'koordinator' => $koordinator
        ]);
    }

    public function store(Request $request)
    {
        try {
            $errors = Validator::make($request->all(), [
                'koordinator_id' => 'required',
                'provinsi_id' => 'required',
                'kabupaten_kota_id' => 'required',
                'kecamatan_id' => 'required',
                'kelurahan_id' => 'required',
                'alamat' => 'required',
                'rt' => 'required | max: 3',
                'rw' => 'required | max: 3',
                'nama' => 'required | max:255',
                'email' => 'required | email | max:255 | unique:akun_relawans',
                'no_hp' => 'required | min: 10 | max: 13',
                'jenis_kelamin' => 'required',
                'status_undangan' => 'required',
                'foto' => 'required | mimes:png,jpg,jpeg'
            ]);

            if($errors -> fails())
            {
                return response()->json(['errors' => $errors->errors()->all()]);
            }

            $relawan = new Relawan;
            $relawan->koordinator_id = $request->koordinator_id;
            $relawan->provinsi_id = $request->provinsi_id;
            $relawan->kabupaten_kota_id = $request->kabupaten_kota_id;
            $relawan->kecamatan_id = $request->kecamatan_id;
            $relawan->kelurahan_id = $request->kelurahan_id;
            $relawan->nama = $request->nama;
            $relawan->email = $request->email;
            $relawan->no_hp = $request->no_hp;
            $relawan->jenis_kelamin = $request->jenis_kelamin;
            $relawan->alamat = $request->alamat;
            $relawan->rt = $request->rt;
            $relawan->rw = $request->rw;
            $relawan->status_undangan = $request->status_undangan;

            $fotoExtension = $request->foto->extension();
            $fotoName =  uniqid().'-'.date("ymd").'.'.$fotoExtension;
            $foto = Image::make($request->foto);
            $fotoSize = public_path('images/pengguna/relawan/'.$fotoName);
            $foto->save($fotoSize, 100);

            $relawan->foto = $fotoName;
            $relawan->save();

            $random_string = Str::random(8);
            $akun_relawan = new AkunRelawan;
            $akun_relawan->name = $request->nama;
            $akun_relawan->email = $request->email;
            $akun_relawan->password = Hash::make($random_string);
            $akun_relawan->password_default = $random_string;
            $akun_relawan->relawan_id = $relawan->id;
            $akun_relawan->save();

            return response()->json(['success' => 'Berhasil menyimpan data']);
        } catch (\Throwable $th) {
            return response()->json(['errors' => $th->getMessage()]);
        }
    }

    public function show($id)
    {
        $data = Relawan::find($id);
        $data['nama_koordinator'] = $data->koordinator->nama;
        $data['nama_provinsi'] = $data->provinsi->nama;
        $data['nama_kabupaten_kota'] = $data->kabupaten_kota->nama;
        $data['nama_kecamatan'] = $data->kecamatan->nama;
        $data['nama_kelurahan'] = $data->kelurahan->nama;
        if($data->jenis_kelamin == 'L')
        {
            $data['jenis_kelamin'] = 'Laki - Laki';
        }

        if($data->jenis_kelamin == 'P')
        {
            $data['jenis_kelamin'] = 'Perempuan';
        }

        return response()->json(['result' => $data]);
    }

    public function edit($id)
    {
        return response()->json(['result' => Relawan::find($id)]);
    }

    public function update(Request $request)
    {
        try {
            $errors = Validator::make($request->all(), [
                'koordinator_id' => 'required',
                'provinsi_id' => 'required',
                'kabupaten_kota_id' => 'required',
                'kecamatan_id' => 'required',
                'kelurahan_id' => 'required',
                'alamat' => 'required',
                'rt' => 'required | max: 3',
                'rw' => 'required | max: 3',
                'nama' => 'required | max:255',
                'no_hp' => 'required | min: 10 | max: 13',
                'jenis_kelamin' => 'required',
                'status_undangan' => 'required',
            ]);

            if($errors -> fails())
            {
                return response()->json(['errors' => $errors->errors()->all()]);
            }

            if($request->foto)
            {
                $errors = Validator::make($request->all(), [
                    'foto' => 'mimes:png,jpg,jpeg'
                ]);

                if($errors -> fails())
                {
                    return response()->json(['errors' => $errors->errors()->all()]);
                }
            }

            $relawan = Relawan::find($request->hidden_id);
            $relawan->koordinator_id = $request->koordinator_id;
            $relawan->provinsi_id = $request->provinsi_id;
            $relawan->kabupaten_kota_id = $request->kabupaten_kota_id;
            $relawan->kecamatan_id = $request->kecamatan_id;
            $relawan->kelurahan_id = $request->kelurahan_id;
            $relawan->nama = $request->nama;
            $relawan->no_hp = $request->no_hp;
            $relawan->jenis_kelamin = $request->jenis_kelamin;
            $relawan->alamat = $request->alamat;
            $relawan->rt = $request->rt;
            $relawan->rw = $request->rw;
            $relawan->status_undangan = $request->status_undangan;

            if($request->foto)
            {
                File::delete(public_path('images/pengguna/relawan/'.$relawan->foto));

                $fotoExtension = $request->foto->extension();
                $fotoName =  uniqid().'-'.date("ymd").'.'.$fotoExtension;
                $foto = Image::make($request->foto);
                $fotoSize = public_path('images/pengguna/relawan/'.$fotoName);
                $foto->save($fotoSize, 100);

                $relawan->foto = $fotoName;
            }
            $relawan->save();

            return response()->json(['success' => 'Berhasil merubah data']);
        } catch (\Throwable $th) {
            return response()->json(['errors' => $th->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $relawan = Relawan::find($id);

        File::delete(public_path('images/pengguna/relawan/'.$relawan->foto));

        $get_akun = AkunRelawan::where('relawan_id', $relawan->id)->first();
        AkunRelawan::find($get_akun->id)->delete();

        $relawan->delete();
    }
}
