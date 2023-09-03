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
use App\Models\Relawan;
use App\Models\AkunRelawan;
use App\Models\MasterProvinsi;

class RelawanProfilController extends Controller
{
    public function index()
    {
        $relawan = Relawan::find(Auth::user()->relawan_id);
        $provinsi = MasterProvinsi::pluck('nama', 'id');
        return view('relawan.profil.index', [
            'relawan' => $relawan,
            'provinsi' => $provinsi
        ]);
    }

    public function store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'provinsi_id' => 'required',
            'kabupaten_kota_id' => 'required',
            'kecamatan_id' => 'required',
            'kelurahan_id' => 'required',
            'nama' => 'required | max:255',
            'no_hp' => 'required | min:10 | max:13',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required'
        ]);
        if($errors -> fails())
        {
            return back()->withErrors($errors)->withInput();
        }

        if($request->foto)
        {
            $errors = Validator::make($request->all(), [
                'foto' => 'mimes:png,jpeg,jpg,webp',
            ]);
            if($errors -> fails())
            {
                return back()->withErrors($errors)->withInput();
            }
        }

        $relawan = Relawan::find(Auth::user()->relawan_id);
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
        if($request->foto)
        {
            File::delete(public_path('images/pengguna/relawan/'.$relawan->foto));

            $fotoExtension = $request->foto->extension();
            $fotoName =  uniqid().'-'.date("ymd").'.'.$fotoExtension;
            $foto = Image::make($request->foto);
            $fotoSize = public_path('images/pengguna/relawan/'.$fotoName);
            $foto->save($fotoSize, 60);

            $relawan->foto = $fotoName;
        }
        $relawan->save();

        Alert::success('Berhasil', 'Berhasil memperbaharui profil');
        return redirect()->route('relawan.profil.index');
    }

    public function ganti_password(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Kata sandi Anda saat ini tidak cocok dengan kata sandi yang Anda gunakan. Silakan coba lagi.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","Kata Sandi Baru tidak boleh sama dengan kata sandi Anda saat ini. Silakan pilih kata sandi yang berbeda.");
        }
        if(!(strcmp($request->get('new-password'), $request->get('new-password-confirm'))) == 0){
            //New password and confirm password are not same
            return redirect()->back()->with("error","Kata Sandi Baru harus sama dengan kata sandi Anda yang telah dikonfirmasi. Silakan ketik ulang kata sandi baru.");
        }
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password Sukses Berubah!");
    }
}
