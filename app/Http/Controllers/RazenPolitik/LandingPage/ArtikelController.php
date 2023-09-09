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
use App\Models\LandingPageArtikel;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('razen-politik.landing-page.artikel.index');
    }

    public function store_section_1(Request $request)
    {
        $cek = LandingPageArtikel::first();
        if($cek)
        {
            $artikel = LandingPageArtikel::find($cek->id);
            if($artikel->section_1)
            {
                $get_section_1 = json_decode($artikel->section_1, true);

                if ($request->gambar) {
                    $gambarName = $get_section_1['gambar'];
                    File::delete(public_path('images/razen-politik/artikel/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/razen-politik/artikel/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_1['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/razen-politik/artikel/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $artikel = new LandingPageArtikel;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/razen-politik/artikel/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'judul' => $request->judul,
            'gambar' => $gambarName
        ];

        $artikel->section_1 = json_encode($array);
        $artikel->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-politik.landing-page.artikel.index');
    }
}
