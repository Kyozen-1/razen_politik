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
use App\Models\LandingPageProdukLain;

class ProdukLainController extends Controller
{
    public function index()
    {
        return view('razen-politik.landing-page.produk-lain.index');
    }

    public function store_produk_lain(Request $request)
    {
        $cek = LandingPageProdukLain::first();
        if($cek)
        {
            $produk_lain = LandingPageProdukLain::find($cek->id);
        } else {
            $produk_lain = new LandingPageProdukLain;
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ];

        $produk_lain->produk_lain = json_encode($array);
        $produk_lain->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Produk Lain');
        return redirect()->route('razen-politik.landing-page.produk-lain.index');
    }
}
