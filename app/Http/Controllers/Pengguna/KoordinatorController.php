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
use App\Models\AkunKoordinator;
use App\Models\Koordinator;

class KoordinatorController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            $data = Koordinator::where('pengguna_id', Auth::user()->pengguna_id)->latest()->get();
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
                ->addColumn('wilayah', function($data){
                    return $data->kabupaten_kota->nama;
                })
                ->addColumn('anggota', function($data){
                    return '0';
                })
                ->addColumn('email', function($data){
                    return $data->akun_koordinator->email;
                })
                ->editColumn('foto', function($data){
                    return '<img src="'.asset('images/pengguna/koordinator/'.$data->foto).'" style="height:5rem">';
                })
                ->addColumn('password_default', function($data){
                    return $data->akun_koordinator->password_default;
                })
                ->rawColumns(['aksi', 'foto'])
                ->make(true);
        }
        $provinsi = MasterProvinsi::pluck('nama', 'id');
        return view('pengguna.koordinator.index', [
            'provinsi' => $provinsi
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
                'nama' => 'required | max:255',
                'email' => 'required | email | max:255 | unique:akun_koordinators',
                'no_hp' => 'required | min: 10 | max: 13',
                'jenis_kelamin' => 'required',
                'status_undangan' => 'required',
                'foto' => 'required | mimes:png,jpg,jpeg'
            ]);

            if($errors -> fails())
            {
                return response()->json(['errors' => $errors->errors()->all()]);
            }

            $koordinator = new Koordinator;
            $koordinator->pengguna_id = Auth::user()->pengguna_id;
            $koordinator->provinsi_id = $request->provinsi_id;
            $koordinator->kabupaten_kota_id = $request->kabupaten_kota_id;
            $koordinator->kecamatan_id = $request->kecamatan_id;
            $koordinator->kelurahan_id = $request->kelurahan_id;
            $koordinator->nama = $request->nama;
            $koordinator->email = $request->email;
            $koordinator->no_hp = $request->no_hp;
            $koordinator->jenis_kelamin = $request->jenis_kelamin;
            $koordinator->alamat = $request->alamat;
            $koordinator->rt = $request->rt;
            $koordinator->rw = $request->rw;
            $koordinator->status_undangan = $request->status_undangan;

            $fotoExtension = $request->foto->extension();
            $fotoName =  uniqid().'-'.date("ymd").'.'.$fotoExtension;
            $foto = Image::make($request->foto);
            $fotoSize = public_path('images/pengguna/koordinator/'.$fotoName);
            $foto->save($fotoSize, 100);

            $koordinator->foto = $fotoName;
            $koordinator->save();

            $random_string = Str::random(8);
            $akun_koordinator = new AkunKoordinator;
            $akun_koordinator->name = $request->nama;
            $akun_koordinator->email = $request->email;
            $akun_koordinator->password = Hash::make($random_string);
            $akun_koordinator->password_default = $random_string;
            $akun_koordinator->koordinator_id = $koordinator->id;
            $akun_koordinator->save();

            return response()->json(['success' => 'Berhasil menyimpan data']);
        } catch (\Throwable $th) {
            return response()->json(['errors' => $th->getMessage()]);
        }
    }

    public function show($id)
    {
        $data = Koordinator::find($id);
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
        return response()->json(['result' => Koordinator::find($id)]);
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

            $koordinator = Koordinator::find($request->hidden_id);
            $koordinator->pengguna_id = Auth::user()->pengguna_id;
            $koordinator->provinsi_id = $request->provinsi_id;
            $koordinator->kabupaten_kota_id = $request->kabupaten_kota_id;
            $koordinator->kecamatan_id = $request->kecamatan_id;
            $koordinator->kelurahan_id = $request->kelurahan_id;
            $koordinator->nama = $request->nama;
            $koordinator->no_hp = $request->no_hp;
            $koordinator->jenis_kelamin = $request->jenis_kelamin;
            $koordinator->alamat = $request->alamat;
            $koordinator->rt = $request->rt;
            $koordinator->rw = $request->rw;
            $koordinator->status_undangan = $request->status_undangan;

            if($request->foto)
            {
                File::delete(public_path('images/pengguna/koordinator/'.$koordinator->foto));

                $fotoExtension = $request->foto->extension();
                $fotoName =  uniqid().'-'.date("ymd").'.'.$fotoExtension;
                $foto = Image::make($request->foto);
                $fotoSize = public_path('images/pengguna/koordinator/'.$fotoName);
                $foto->save($fotoSize, 100);

                $koordinator->foto = $fotoName;
            }
            $koordinator->save();

            return response()->json(['success' => 'Berhasil merubah data']);
        } catch (\Throwable $th) {
            return response()->json(['errors' => $th->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $koordinator = Koordinator::find($id);

        File::delete(public_path('images/pengguna/koordinator/'.$koordinator->foto));

        $get_akun = AkunKoordinator::where('koordinator_id', $koordinator->id)->first();
        AkunKoordinator::find($get_akun->id)->delete();

        $koordinator->delete();
    }
}
