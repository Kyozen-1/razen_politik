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
use App\Models\LandingPageFooter;

class FooterController extends Controller
{
    public function index()
    {
        return view('razen-politik.landing-page.footer.index');
    }

    public function store_footer(Request $request)
    {
        $cek = LandingPageFooter::first();
        if($cek)
        {
            $footer = LandingPageFooter::find($cek->id);
            if($footer->footer)
            {
                $get_footer = json_decode($footer->footer, true);

                if ($request->gambar_background) {
                    $gambarBackgroundName = $get_footer['gambar_background'];
                    File::delete(public_path('images/razen-politik/footer/'.$gambarBackgroundName));

                    $gambarBackgroundExtension = $request->gambar_background->extension();
                    $gambarBackgroundName =  uniqid().'-'.date("ymd").'.'.$gambarBackgroundExtension;
                    $gambarBackground = Image::make($request->gambar_background);
                    $gambarBackgroundSize = public_path('images/razen-politik/footer/'.$gambarBackgroundName);
                    $gambarBackground->save($gambarBackgroundSize, 100);
                } else {
                    $gambarBackgroundName = $get_footer['gambar_background'];
                }
            } else {
                $gambarBackgroundExtension = $request->gambar_background->extension();
                $gambarBackgroundName =  uniqid().'-'.date("ymd").'.'.$gambarBackgroundExtension;
                $gambarBackground = Image::make($request->gambar_background);
                $gambarBackgroundSize = public_path('images/razen-politik/footer/'.$gambarBackgroundName);
                $gambarBackground->save($gambarBackgroundSize, 100);
            }
        } else {
            $footer = new LandingPageFooter;

            $gambarBackgroundExtension = $request->gambar_background->extension();
            $gambarBackgroundName =  uniqid().'-'.date("ymd").'.'.$gambarBackgroundExtension;
            $gambarBackground = Image::make($request->gambar_background);
            $gambarBackgroundSize = public_path('images/razen-politik/footer/'.$gambarBackgroundName);
            $gambarBackground->save($gambarBackgroundSize, 100);
        }

        $array = [
            'gambar_background' => $gambarBackgroundName
        ];

        $footer->footer = json_encode($array);
        $footer->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan footer');
        return redirect()->route('razen-politik.landing-page.footer.index');
    }
}
