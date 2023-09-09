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
use App\Models\LandingPageBantuan;

class BantuanController extends Controller
{
    public function index()
    {
        return view('razen-politik.landing-page.bantuan.index');
    }

    public function store_section_1(Request $request)
    {
        $cek = LandingPageBantuan::first();
        if($cek)
        {
            $bantuan = LandingPageBantuan::find($cek->id);
            if($bantuan->section_1)
            {
                $get_section_1 = json_decode($bantuan->section_1, true);

                if ($request->gambar) {
                    $gambarName = $get_section_1['gambar'];
                    File::delete(public_path('images/razen-politik/bantuan/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/razen-politik/bantuan/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_1['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/razen-politik/bantuan/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $bantuan = new LandingPageBantuan;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/razen-politik/bantuan/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'judul' => $request->judul,
            'gambar' => $gambarName
        ];

        $bantuan->section_1 = json_encode($array);
        $bantuan->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-politik.landing-page.bantuan.index');
    }

    public function store_section_2(Request $request)
    {
        $cek = LandingPageBantuan::first();
        if($cek)
        {
            $bantuan = LandingPageBantuan::find($cek->id);
            if($bantuan->section_2)
            {
                $get_section_2 = json_decode($bantuan->section_2, true);

                if ($request->gambar_1) {
                    $gambar1Name = $get_section_2['gambar_1'];
                    File::delete(public_path('images/razen-politik/bantuan/'.$gambar1Name));

                    $gambar1Extension = $request->gambar_1->extension();
                    $gambar1Name =  uniqid().'-'.date("ymd").'.'.$gambar1Extension;
                    $gambar1 = Image::make($request->gambar_1);
                    $gambar1Size = public_path('images/razen-politik/bantuan/'.$gambar1Name);
                    $gambar1->save($gambar1Size, 100);
                } else {
                    $gambar1Name = $get_section_2['gambar_1'];
                }

                if ($request->gambar_2) {
                    $gambar2Name = $get_section_2['gambar_2'];
                    File::delete(public_path('images/razen-politik/bantuan/'.$gambar2Name));

                    $gambar2Extension = $request->gambar_2->extension();
                    $gambar2Name =  uniqid().'-'.date("ymd").'.'.$gambar2Extension;
                    $gambar2 = Image::make($request->gambar_2);
                    $gambar2Size = public_path('images/razen-politik/bantuan/'.$gambar2Name);
                    $gambar2->save($gambar2Size, 100);
                } else {
                    $gambar2Name = $get_section_2['gambar_2'];
                }
            } else {
                $gambar1Extension = $request->gambar_1->extension();
                $gambar1Name =  uniqid().'-'.date("ymd").'.'.$gambar1Extension;
                $gambar1 = Image::make($request->gambar_1);
                $gambar1Size = public_path('images/razen-politik/bantuan/'.$gambar1Name);
                $gambar1->save($gambar1Size, 100);

                $gambar2Extension = $request->gambar_2->extension();
                $gambar2Name =  uniqid().'-'.date("ymd").'.'.$gambar2Extension;
                $gambar2 = Image::make($request->gambar_2);
                $gambar2Size = public_path('images/razen-politik/bantuan/'.$gambar2Name);
                $gambar2->save($gambar2Size, 100);
            }
        } else {
            $bantuan = new LandingPageBantuan;

            $gambar1Extension = $request->gambar_1->extension();
            $gambar1Name =  uniqid().'-'.date("ymd").'.'.$gambar1Extension;
            $gambar1 = Image::make($request->gambar_1);
            $gambar1Size = public_path('images/razen-politik/bantuan/'.$gambar1Name);
            $gambar1->save($gambar1Size, 100);

            $gambar2Extension = $request->gambar_2->extension();
            $gambar2Name =  uniqid().'-'.date("ymd").'.'.$gambar2Extension;
            $gambar2 = Image::make($request->gambar_2);
            $gambar2Size = public_path('images/razen-politik/bantuan/'.$gambar2Name);
            $gambar2->save($gambar2Size, 100);
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar_1' => $gambar1Name,
            'gambar_2' => $gambar2Name
        ];

        $bantuan->section_2 = json_encode($array);
        $bantuan->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-politik.landing-page.bantuan.index');
    }

    public function store_section_3(Request $request)
    {
        $cek = LandingPageBantuan::first();
        if($cek)
        {
            $bantuan = LandingPageBantuan::find($cek->id);
            if($bantuan->section_3)
            {
                $get_section_3 = json_decode($bantuan->section_3, true);

                if ($request->gambar_background_1) {
                    $gambarBackground1Name = $get_section_3['gambar_background_1'];
                    File::delete(public_path('images/razen-politik/bantuan/'.$gambarBackground1Name));

                    $gambarBackground1Extension = $request->gambar_background_1->extension();
                    $gambarBackground1Name =  uniqid().'-'.date("ymd").'.'.$gambarBackground1Extension;
                    $gambarBackground1 = Image::make($request->gambar_background_1);
                    $gambarBackground1Size = public_path('images/razen-politik/bantuan/'.$gambarBackground1Name);
                    $gambarBackground1->save($gambarBackground1Size, 100);
                } else {
                    $gambarBackground1Name = $get_section_3['gambar_background_1'];
                }

                if ($request->gambar_background_2) {
                    $gambarBackground2Name = $get_section_3['gambar_background_2'];
                    File::delete(public_path('images/razen-politik/bantuan/'.$gambarBackground2Name));

                    $gambarBackground2Extension = $request->gambar_background_2->extension();
                    $gambarBackground2Name =  uniqid().'-'.date("ymd").'.'.$gambarBackground2Extension;
                    $gambarBackground2 = Image::make($request->gambar_background_2);
                    $gambarBackground2Size = public_path('images/razen-politik/bantuan/'.$gambarBackground2Name);
                    $gambarBackground2->save($gambarBackground2Size, 100);
                } else {
                    $gambarBackground2Name = $get_section_3['gambar_background_2'];
                }

                if ($request->gambar) {
                    $gambarName = $get_section_3['gambar'];
                    File::delete(public_path('images/razen-politik/bantuan/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/razen-politik/bantuan/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_3['gambar'];
                }
            } else {
                $gambarBackground1Extension = $request->gambar_background_1->extension();
                $gambarBackground1Name =  uniqid().'-'.date("ymd").'.'.$gambarBackground1Extension;
                $gambarBackground1 = Image::make($request->gambar_background_1);
                $gambarBackground1Size = public_path('images/razen-politik/bantuan/'.$gambarBackground1Name);
                $gambarBackground1->save($gambarBackground1Size, 100);

                $gambarBackground2Extension = $request->gambar_background_2->extension();
                $gambarBackground2Name =  uniqid().'-'.date("ymd").'.'.$gambarBackground2Extension;
                $gambarBackground2 = Image::make($request->gambar_background_2);
                $gambarBackground2Size = public_path('images/razen-politik/bantuan/'.$gambarBackground2Name);
                $gambarBackground2->save($gambarBackground2Size, 100);

                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/razen-politik/bantuan/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $bantuan = new LandingPageBantuan;

            $gambarBackground1Extension = $request->gambar_background_1->extension();
            $gambarBackground1Name =  uniqid().'-'.date("ymd").'.'.$gambarBackground1Extension;
            $gambarBackground1 = Image::make($request->gambar_background_1);
            $gambarBackground1Size = public_path('images/razen-politik/bantuan/'.$gambarBackground1Name);
            $gambarBackground1->save($gambarBackground1Size, 100);

            $gambarBackground2Extension = $request->gambar_background_2->extension();
            $gambarBackground2Name =  uniqid().'-'.date("ymd").'.'.$gambarBackground2Extension;
            $gambarBackground2 = Image::make($request->gambar_background_2);
            $gambarBackground2Size = public_path('images/razen-politik/bantuan/'.$gambarBackground2Name);
            $gambarBackground2->save($gambarBackground2Size, 100);

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/razen-politik/bantuan/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar_background_1' => $gambarBackground1Name,
            'gambar_background_2' => $gambarBackground2Name,
            'gambar' => $gambarName,
        ];

        $bantuan->section_3 = json_encode($array);
        $bantuan->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-politik.landing-page.bantuan.index');
    }

    public function store_section_4(Request $request)
    {
        $cek = LandingPageBantuan::first();
        if($cek)
        {
            $bantuan = LandingPageBantuan::find($cek->id);
        } else {
            $bantuan = new LandingPageBantuan;
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ];

        $bantuan->section_4 = json_encode($array);
        $bantuan->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-politik.landing-page.bantuan.index');
    }
}
