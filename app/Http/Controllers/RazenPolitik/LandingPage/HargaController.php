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
use App\Models\LandingPageHarga;

class HargaController extends Controller
{
    public function index()
    {
        return view('razen-politik.landing-page.harga.index');
    }

    public function store_section_1(Request $request)
    {
        $cek = LandingPageHarga::first();
        if($cek)
        {
            $harga = LandingPageHarga::find($cek->id);
            if($harga->section_1)
            {
                $get_section_1 = json_decode($harga->section_1, true);

                if ($request->gambar) {
                    $gambarName = $get_section_1['gambar'];
                    File::delete(public_path('images/razen-politik/harga/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/razen-politik/harga/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_1['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/razen-politik/harga/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $harga = new LandingPageHarga;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/razen-politik/harga/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'judul' => $request->judul,
            'gambar' => $gambarName
        ];

        $harga->section_1 = json_encode($array);
        $harga->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-politik.landing-page.harga.index');
    }

    public function store_section_2(Request $request)
    {
        $cek = LandingPageHarga::first();
        if($cek)
        {
            $harga = LandingPageHarga::find($cek->id);
            if($harga->section_2)
            {
                $get_section_2 = json_decode($harga->section_2, true);

                if($get_section_2['konten'] != '')
                {
                    $konten = $get_section_2['konten'];
                } else {
                    $konten = '';
                }
            } else {

                $konten = '';
            }
        } else {
            $harga = new LandingPageHarga;

            $konten = '';
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'konten' => $konten
        ];

        $harga->section_2 = json_encode($array);
        $harga->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-politik.landing-page.harga.index');
    }

    public function store_section_2_konten(Request $request)
    {
        $konten_section_2 = $request->section_2;

        $get = LandingPageHarga::first();

        if($get->section_2)
        {
            $harga = LandingPageHarga::find($get->id);

            $data_section_2 = json_decode($get->section_2, true);

            if($data_section_2['konten'] == '')
            {
                for ($i=0; $i < count($konten_section_2); $i++) {

                    $data[] = [
                        'id' => uniqid(),
                        'judul' => $konten_section_2[$i]['judul'],
                        'deskripsi' => $konten_section_2[$i]['deskripsi'],
                        'kode_ikon' => $konten_section_2[$i]['kode_ikon']
                    ];
                }
            } else {
                $data_lama = [];
                foreach ($data_section_2['konten'] as $value) {
                    $data_lama[] = [
                        'id' => $value['id'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'kode_ikon' => $value['kode_ikon']
                    ];
                }

                $data_baru = [];
                for ($i=0; $i < count($konten_section_2); $i++) {

                    $data_baru[] = [
                        'id' => uniqid(),
                        'judul' => $konten_section_2[$i]['judul'],
                        'deskripsi' => $konten_section_2[$i]['deskripsi'],
                        'kode_ikon' => $konten_section_2[$i]['kode_ikon']
                    ];
                }

                $data = array_merge($data_lama, $data_baru);
            }

            $array = [
                'judul' => $data_section_2['judul'],
                'deskripsi' => $data_section_2['deskripsi'],
                'konten' => $data
            ];

            $harga->section_2 = json_encode($array);
            $harga->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
            return redirect()->route('razen-politik.landing-page.harga.index');
        } else {
            Alert::error('Gagal!', 'Isi terlebih dahulu section 2');
            return redirect()->route('razen-politik.landing-page.harga.index');
        }
    }

    public function hapus_section_2_konten(Request $request)
    {
        $get = LandingPageHarga::first();
        $data = [];
        $data_section_2 = json_decode($get->section_2, true);
        foreach ($data_section_2['konten'] as $value) {
            if($value['id'] != $request->id)
            {
                $data[] = [
                    'id' => $value['id'],
                    'judul' => $value['judul'],
                    'deskripsi' => $value['deskripsi'],
                    'kode_ikon' => $value['kode_ikon']
                ];
            }
        }

        $harga = LandingPageHarga::find($get->id);
        $array = [
            'judul' => $data_section_2['judul'],
            'deskripsi' => $data_section_2['deskripsi'],
            'konten' => $data
        ];
        $harga->section_2 = json_encode($array);
        $harga->save();

        return response()->json(['success' => 'Berhasil menghapus']);
    }
}
