<?php

namespace App\Http\Controllers\RazenPolitik\LandingPage;

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
use App\Models\LandingPageTestimoni;

class TestimoniController extends Controller
{
    public function index()
    {
        return view('razen-politik.landing-page.testimoni.index');
    }

    public function store_testimoni(Request $request)
    {
        $cek = LandingPageTestimoni::first();
        if($cek)
        {
            $testimoni = LandingPageTestimoni::find($cek->id);
            if($testimoni->testimoni)
            {
                $get_testimoni = json_decode($testimoni->testimoni, true);

                if ($request->gambar_background) {
                    $gambarBackgroundName = $get_testimoni['gambar_background'];
                    File::delete(public_path('images/razen-politik/testimoni/'.$gambarBackgroundName));

                    $gambarBackgroundExtension = $request->gambar_background->extension();
                    $gambarBackgroundName =  uniqid().'-'.date("ymd").'.'.$gambarBackgroundExtension;
                    $gambarBackground = Image::make($request->gambar_background);
                    $gambarBackgroundSize = public_path('images/razen-politik/testimoni/'.$gambarBackgroundName);
                    $gambarBackground->save($gambarBackgroundSize, 100);
                } else {
                    $gambarBackgroundName = $get_testimoni['gambar_background'];
                }

                if ($request->gambar_kecil) {
                    $gambarKecilName = $get_testimoni['gambar_kecil'];
                    File::delete(public_path('images/razen-politik/testimoni/'.$gambarKecilName));

                    $gambarKecilExtension = $request->gambar_kecil->extension();
                    $gambarKecilName =  uniqid().'-'.date("ymd").'.'.$gambarKecilExtension;
                    $gambarKecil = Image::make($request->gambar_kecil);
                    $gambarKecilSize = public_path('images/razen-politik/testimoni/'.$gambarKecilName);
                    $gambarKecil->save($gambarKecilSize, 100);
                } else {
                    $gambarKecilName = $get_testimoni['gambar_kecil'];
                }
            } else {
                $gambarBackgroundExtension = $request->gambar_background->extension();
                $gambarBackgroundName =  uniqid().'-'.date("ymd").'.'.$gambarBackgroundExtension;
                $gambarBackground = Image::make($request->gambar_background);
                $gambarBackgroundSize = public_path('images/razen-politik/testimoni/'.$gambarBackgroundName);
                $gambarBackground->save($gambarBackgroundSize, 100);

                $gambarKecilExtension = $request->gambar_kecil->extension();
                $gambarKecilName =  uniqid().'-'.date("ymd").'.'.$gambarKecilExtension;
                $gambarKecil = Image::make($request->gambar_kecil);
                $gambarKecilSize = public_path('images/razen-politik/testimoni/'.$gambarKecilName);
                $gambarKecil->save($gambarKecilSize, 100);
            }
        } else {
            $testimoni = new LandingPageTestimoni;

            $gambarBackgroundExtension = $request->gambar_background->extension();
            $gambarBackgroundName =  uniqid().'-'.date("ymd").'.'.$gambarBackgroundExtension;
            $gambarBackground = Image::make($request->gambar_background);
            $gambarBackgroundSize = public_path('images/razen-politik/testimoni/'.$gambarBackgroundName);
            $gambarBackground->save($gambarBackgroundSize, 100);

            $gambarKecilExtension = $request->gambar_kecil->extension();
            $gambarKecilName =  uniqid().'-'.date("ymd").'.'.$gambarKecilExtension;
            $gambarKecil = Image::make($request->gambar_kecil);
            $gambarKecilSize = public_path('images/razen-politik/testimoni/'.$gambarKecilName);
            $gambarKecil->save($gambarKecilSize, 100);
        }

        $array = [
            'gambar_background' => $gambarBackgroundName,
            'gambar_kecil' => $gambarKecilName,
        ];

        $testimoni->testimoni = json_encode($array);
        $testimoni->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Testimoni');
        return redirect()->route('razen-politik.landing-page.testimoni.index');
    }
}
