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
use App\Models\LandingPageTentangKami;

class TentangKamiController extends Controller
{
    public function index()
    {
        return view('razen-politik.landing-page.tentang-kami.index');
    }

    public function store_section_1(Request $request)
    {
        $cek = LandingPageTentangKami::first();
        if($cek)
        {
            $tentang_kami = LandingPageTentangKami::find($cek->id);
            if($tentang_kami->section_1)
            {
                $get_section_1 = json_decode($tentang_kami->section_1, true);

                if ($request->gambar) {
                    $gambarName = $get_section_1['gambar'];
                    File::delete(public_path('images/razen-politik/tentang-kami/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/razen-politik/tentang-kami/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_1['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/razen-politik/tentang-kami/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $tentang_kami = new LandingPageTentangKami;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/razen-politik/tentang-kami/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'judul' => $request->judul,
            'gambar' => $gambarName
        ];

        $tentang_kami->section_1 = json_encode($array);
        $tentang_kami->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-politik.landing-page.tentang-kami.index');
    }

    public function store_section_2(Request $request)
    {
        $cek = LandingPageTentangKami::first();
        if($cek)
        {
            $tentang_kami = LandingPageTentangKami::find($cek->id);
            if($tentang_kami->section_2)
            {
                $get_section_2 = json_decode($tentang_kami->section_2, true);

                if ($request->gambar_1) {
                    $gambar1Name = $get_section_2['gambar_1'];
                    File::delete(public_path('images/razen-politik/tentang-kami/'.$gambar1Name));

                    $gambar1Extension = $request->gambar_1->extension();
                    $gambar1Name =  uniqid().'-'.date("ymd").'.'.$gambar1Extension;
                    $gambar1 = Image::make($request->gambar_1);
                    $gambar1Size = public_path('images/razen-politik/tentang-kami/'.$gambar1Name);
                    $gambar1->save($gambar1Size, 100);
                } else {
                    $gambar1Name = $get_section_2['gambar_1'];
                }

                if ($request->gambar_2) {
                    $gambar2Name = $get_section_2['gambar_2'];
                    File::delete(public_path('images/razen-politik/tentang-kami/'.$gambar2Name));

                    $gambar2Extension = $request->gambar_2->extension();
                    $gambar2Name =  uniqid().'-'.date("ymd").'.'.$gambar2Extension;
                    $gambar2 = Image::make($request->gambar_2);
                    $gambar2Size = public_path('images/razen-politik/tentang-kami/'.$gambar2Name);
                    $gambar2->save($gambar2Size, 100);
                } else {
                    $gambar2Name = $get_section_2['gambar_2'];
                }

                if ($request->gambar_3) {
                    $gambar3Name = $get_section_2['gambar_3'];
                    File::delete(public_path('images/razen-politik/tentang-kami/'.$gambar3Name));

                    $gambar3Extension = $request->gambar_3->extension();
                    $gambar3Name =  uniqid().'-'.date("ymd").'.'.$gambar3Extension;
                    $gambar3 = Image::make($request->gambar_3);
                    $gambar3Size = public_path('images/razen-politik/tentang-kami/'.$gambar3Name);
                    $gambar3->save($gambar3Size, 100);
                } else {
                    $gambar3Name = $get_section_2['gambar_3'];
                }

                if($get_section_2['konten'] != '')
                {
                    $konten = $get_section_2['konten'];
                } else {
                    $konten = '';
                }
            } else {
                $gambar1Extension = $request->gambar_1->extension();
                $gambar1Name =  uniqid().'-'.date("ymd").'.'.$gambar1Extension;
                $gambar1 = Image::make($request->gambar_1);
                $gambar1Size = public_path('images/razen-politik/tentang-kami/'.$gambar1Name);
                $gambar1->save($gambar1Size, 100);

                $gambar2Extension = $request->gambar_2->extension();
                $gambar2Name =  uniqid().'-'.date("ymd").'.'.$gambar2Extension;
                $gambar2 = Image::make($request->gambar_2);
                $gambar2Size = public_path('images/razen-politik/tentang-kami/'.$gambar2Name);
                $gambar2->save($gambar2Size, 100);

                $gambar3Extension = $request->gambar_3->extension();
                $gambar3Name =  uniqid().'-'.date("ymd").'.'.$gambar3Extension;
                $gambar3 = Image::make($request->gambar_3);
                $gambar3Size = public_path('images/razen-politik/tentang-kami/'.$gambar3Name);
                $gambar3->save($gambar3Size, 100);

                $konten = '';
            }
        } else {
            $tentang_kami = new LandingPageTentangKami;

            $gambar1Extension = $request->gambar_1->extension();
            $gambar1Name =  uniqid().'-'.date("ymd").'.'.$gambar1Extension;
            $gambar1 = Image::make($request->gambar_1);
            $gambar1Size = public_path('images/razen-politik/tentang-kami/'.$gambar1Name);
            $gambar1->save($gambar1Size, 100);

            $gambar2Extension = $request->gambar_2->extension();
            $gambar2Name =  uniqid().'-'.date("ymd").'.'.$gambar2Extension;
            $gambar2 = Image::make($request->gambar_2);
            $gambar2Size = public_path('images/razen-politik/tentang-kami/'.$gambar2Name);
            $gambar2->save($gambar2Size, 100);

            $gambar3Extension = $request->gambar_3->extension();
            $gambar3Name =  uniqid().'-'.date("ymd").'.'.$gambar3Extension;
            $gambar3 = Image::make($request->gambar_3);
            $gambar3Size = public_path('images/razen-politik/tentang-kami/'.$gambar3Name);
            $gambar3->save($gambar3Size, 100);

            $konten = '';
        }

        $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
        $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

        if (preg_match($longUrlRegex, $request->link_youtube, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }

        if (preg_match($shortUrlRegex, $request->link_youtube, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }
        $url = 'https://www.youtube.com/embed/' . $youtube_id ;

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'watermark' => $request->watermark,
            'link_youtube' => $url,
            'gambar_1' => $gambar1Name,
            'gambar_2' => $gambar2Name,
            'gambar_3' => $gambar3Name,
            'konten' => $konten
        ];

        $tentang_kami->section_2 = json_encode($array);
        $tentang_kami->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-politik.landing-page.tentang-kami.index');
    }

    public function store_section_2_konten(Request $request)
    {
        $konten_section_2 = $request->section_2;

        $get = LandingPageTentangKami::first();

        if($get->section_2)
        {
            $tentang_kami = LandingPageTentangKami::find($get->id);

            $data_section_2 = json_decode($get->section_2, true);

            if($data_section_2['konten'] == '')
            {
                for ($i=0; $i < count($konten_section_2); $i++) {

                    $data[] = [
                        'id' => uniqid(),
                        'deskripsi' => $konten_section_2[$i]['deskripsi']
                    ];
                }
            } else {
                $data_lama = [];
                foreach ($data_section_2['konten'] as $value) {
                    $data_lama[] = [
                        'id' => $value['id'],
                        'deskripsi' => $value['deskripsi']
                    ];
                }

                $data_baru = [];
                for ($i=0; $i < count($konten_section_2); $i++) {

                    $data_baru[] = [
                        'id' => uniqid(),
                        'deskripsi' => $konten_section_2[$i]['deskripsi']
                    ];
                }

                $data = array_merge($data_lama, $data_baru);
            }

            $array = [
                'judul' => $data_section_2['judul'],
                'deskripsi' => $data_section_2['deskripsi'],
                'watermark' => $data_section_2['watermark'],
                'link_youtube' => $data_section_2['link_youtube'],
                'gambar_1' => $data_section_2['gambar_1'],
                'gambar_2' => $data_section_2['gambar_2'],
                'gambar_3' => $data_section_2['gambar_3'],
                'konten' => $data
            ];

            $tentang_kami->section_2 = json_encode($array);
            $tentang_kami->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
            return redirect()->route('razen-politik.landing-page.tentang-kami.index');
        } else {
            Alert::error('Gagal!', 'Isi terlebih dahulu section 2');
            return redirect()->route('razen-politik.landing-page.tentang-kami.index');
        }
    }

    public function hapus_section_2_konten(Request $request)
    {
        $get = LandingPageTentangKami::first();
        $data = [];
        $data_section_2 = json_decode($get->section_2, true);
        foreach ($data_section_2['konten'] as $value) {
            if($value['id'] != $request->id)
            {
                $data[] = [
                    'id' => $value['id'],
                    'deskripsi' => $value['deskripsi']
                ];
            }
        }

        $tentang_kami = LandingPageTentangKami::find($get->id);
        $array = [
            'judul' => $data_section_2['judul'],
            'deskripsi' => $data_section_2['deskripsi'],
            'watermark' => $data_section_2['watermark'],
            'link_youtube' => $data_section_2['link_youtube'],
            'gambar_1' => $data_section_2['gambar_1'],
            'gambar_2' => $data_section_2['gambar_2'],
            'gambar_3' => $data_section_2['gambar_3'],
            'konten' => $data
        ];
        $tentang_kami->section_2 = json_encode($array);
        $tentang_kami->save();

        return response()->json(['success' => 'Berhasil menghapus']);
    }

    public function store_section_3(Request $request)
    {
        $cek = LandingPageTentangKami::first();
        if($cek)
        {
            $tentang_kami = LandingPageTentangKami::find($cek->id);
            if($tentang_kami->section_3)
            {
                $get_section_3 = json_decode($tentang_kami->section_3, true);

                if ($request->gambar) {
                    $gambarName = $get_section_3['gambar'];
                    File::delete(public_path('images/razen-politik/tentang-kami/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/razen-politik/tentang-kami/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_3['gambar'];
                }

                if ($request->gambar_background) {
                    $gambarBackgroundName = $get_section_3['gambar_background'];
                    File::delete(public_path('images/razen-politik/tentang-kami/'.$gambarBackgroundName));

                    $gambarBackgroundExtension = $request->gambar_background->extension();
                    $gambarBackgroundName =  uniqid().'-'.date("ymd").'.'.$gambarBackgroundExtension;
                    $gambarBackground = Image::make($request->gambar_background);
                    $gambarBackgroundSize = public_path('images/razen-politik/tentang-kami/'.$gambarBackgroundName);
                    $gambarBackground->save($gambarBackgroundSize, 100);
                } else {
                    $gambarBackgroundName = $get_section_3['gambar_background'];
                }

                if($get_section_3['konten'] != '')
                {
                    $konten = $get_section_3['konten'];
                } else {
                    $konten = '';
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/razen-politik/tentang-kami/'.$gambarName);
                $gambar->save($gambarSize, 100);

                $gambarBackgroundExtension = $request->gambar_background->extension();
                $gambarBackgroundName =  uniqid().'-'.date("ymd").'.'.$gambarBackgroundExtension;
                $gambarBackground = Image::make($request->gambar_background);
                $gambarBackgroundSize = public_path('images/razen-politik/tentang-kami/'.$gambarBackgroundName);
                $gambarBackground->save($gambarBackgroundSize, 100);

                $konten = '';
            }
        } else {
            $tentang_kami = new LandingPageTentangKami;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/razen-politik/tentang-kami/'.$gambarName);
            $gambar->save($gambarSize, 100);

            $gambarBackgroundExtension = $request->gambar_background->extension();
            $gambarBackgroundName =  uniqid().'-'.date("ymd").'.'.$gambarBackgroundExtension;
            $gambarBackground = Image::make($request->gambar_background);
            $gambarBackgroundSize = public_path('images/razen-politik/tentang-kami/'.$gambarBackgroundName);
            $gambarBackground->save($gambarBackgroundSize, 100);

            $konten = '';
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName,
            'gambar_background' => $gambarBackgroundName,
            'konten' => $konten
        ];

        $tentang_kami->section_3 = json_encode($array);
        $tentang_kami->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-politik.landing-page.tentang-kami.index');
    }

    public function store_section_3_konten(Request $request)
    {
        $konten_section_3 = $request->section_3;

        $get = LandingPageTentangKami::first();

        if($get->section_3)
        {
            $tentang_kami = LandingPageTentangKami::find($get->id);

            $data_section_3 = json_decode($get->section_3, true);

            if($data_section_3['konten'] == '')
            {
                for ($i=0; $i < count($konten_section_3); $i++) {

                    $data[] = [
                        'id' => uniqid(),
                        'judul' => $konten_section_3[$i]['judul'],
                        'deskripsi' => $konten_section_3[$i]['deskripsi'],
                        'kode_ikon' => $konten_section_3[$i]['kode_ikon']
                    ];
                }
            } else {
                $data_lama = [];
                foreach ($data_section_3['konten'] as $value) {
                    $data_lama[] = [
                        'id' => $value['id'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'kode_ikon' => $value['kode_ikon']
                    ];
                }

                $data_baru = [];
                for ($i=0; $i < count($konten_section_3); $i++) {

                    $data_baru[] = [
                        'id' => uniqid(),
                        'judul' => $konten_section_3[$i]['judul'],
                        'deskripsi' => $konten_section_3[$i]['deskripsi'],
                        'kode_ikon' => $konten_section_3[$i]['kode_ikon']
                    ];
                }

                $data = array_merge($data_lama, $data_baru);
            }

            $array = [
                'judul' => $data_section_3['judul'],
                'deskripsi' => $data_section_3['deskripsi'],
                'gambar' => $data_section_3['gambar'],
                'gambar_background' => $data_section_3['gambar_background'],
                'konten' => $data
            ];

            $tentang_kami->section_3 = json_encode($array);
            $tentang_kami->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
            return redirect()->route('razen-politik.landing-page.tentang-kami.index');
        } else {
            Alert::error('Gagal!', 'Isi terlebih dahulu section 3');
            return redirect()->route('razen-politik.landing-page.tentang-kami.index');
        }
    }

    public function hapus_section_3_konten(Request $request)
    {
        $get = LandingPageTentangKami::first();
        $data = [];
        $data_section_3 = json_decode($get->section_3, true);
        foreach ($data_section_3['konten'] as $value) {
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

        $tentang_kami = LandingPageTentangKami::find($get->id);
        $array = [
            'judul' => $data_section_3['judul'],
            'deskripsi' => $data_section_3['deskripsi'],
            'gambar' => $data_section_3['gambar'],
            'gambar_background' => $data_section_3['gambar_background'],
            'konten' => $data
        ];
        $tentang_kami->section_3 = json_encode($array);
        $tentang_kami->save();

        return response()->json(['success' => 'Berhasil menghapus']);
    }

    public function store_section_4(Request $request)
    {
        $cek = LandingPageTentangKami::first();
        if($cek)
        {
            $tentang_kami = LandingPageTentangKami::find($cek->id);
        } else {
            $tentang_kami = new LandingPageTentangKami;
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ];

        $tentang_kami->section_4 = json_encode($array);
        $tentang_kami->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-politik.landing-page.tentang-kami.index');
    }

    public function store_section_5(Request $request)
    {
        $cek = LandingPageTentangKami::first();
        if($cek)
        {
            $tentang_kami = LandingPageTentangKami::find($cek->id);
            if($tentang_kami->section_5)
            {
                $get_section_5 = json_decode($tentang_kami->section_5, true);

                if ($request->gambar_1) {
                    $gambar1Name = $get_section_5['gambar_1'];
                    File::delete(public_path('images/razen-politik/tentang-kami/'.$gambar1Name));

                    $gambar1Extension = $request->gambar_1->extension();
                    $gambar1Name =  uniqid().'-'.date("ymd").'.'.$gambar1Extension;
                    $gambar1 = Image::make($request->gambar_1);
                    $gambar1Size = public_path('images/razen-politik/tentang-kami/'.$gambar1Name);
                    $gambar1->save($gambar1Size, 100);
                } else {
                    $gambar1Name = $get_section_5['gambar_1'];
                }

                if ($request->gambar_2) {
                    $gambar2Name = $get_section_5['gambar_2'];
                    File::delete(public_path('images/razen-politik/tentang-kami/'.$gambar2Name));

                    $gambar2Extension = $request->gambar_2->extension();
                    $gambar2Name =  uniqid().'-'.date("ymd").'.'.$gambar2Extension;
                    $gambar2 = Image::make($request->gambar_2);
                    $gambar2Size = public_path('images/razen-politik/tentang-kami/'.$gambar2Name);
                    $gambar2->save($gambar2Size, 100);
                } else {
                    $gambar2Name = $get_section_5['gambar_2'];
                }

                if ($request->gambar_3) {
                    $gambar3Name = $get_section_5['gambar_3'];
                    File::delete(public_path('images/razen-politik/tentang-kami/'.$gambar3Name));

                    $gambar3Extension = $request->gambar_3->extension();
                    $gambar3Name =  uniqid().'-'.date("ymd").'.'.$gambar3Extension;
                    $gambar3 = Image::make($request->gambar_3);
                    $gambar3Size = public_path('images/razen-politik/tentang-kami/'.$gambar3Name);
                    $gambar3->save($gambar3Size, 100);
                } else {
                    $gambar3Name = $get_section_5['gambar_3'];
                }

                if($get_section_5['konten'] != '')
                {
                    $konten = $get_section_5['konten'];
                } else {
                    $konten = '';
                }
            } else {
                $gambar1Extension = $request->gambar_1->extension();
                $gambar1Name =  uniqid().'-'.date("ymd").'.'.$gambar1Extension;
                $gambar1 = Image::make($request->gambar_1);
                $gambar1Size = public_path('images/razen-politik/tentang-kami/'.$gambar1Name);
                $gambar1->save($gambar1Size, 100);

                $gambar2Extension = $request->gambar_2->extension();
                $gambar2Name =  uniqid().'-'.date("ymd").'.'.$gambar2Extension;
                $gambar2 = Image::make($request->gambar_2);
                $gambar2Size = public_path('images/razen-politik/tentang-kami/'.$gambar2Name);
                $gambar2->save($gambar2Size, 100);

                $gambar3Extension = $request->gambar_3->extension();
                $gambar3Name =  uniqid().'-'.date("ymd").'.'.$gambar3Extension;
                $gambar3 = Image::make($request->gambar_3);
                $gambar3Size = public_path('images/razen-politik/tentang-kami/'.$gambar3Name);
                $gambar3->save($gambar3Size, 100);

                $konten = '';
            }
        } else {
            $tentang_kami = new LandingPageTentangKami;

            $gambar1Extension = $request->gambar_1->extension();
            $gambar1Name =  uniqid().'-'.date("ymd").'.'.$gambar1Extension;
            $gambar1 = Image::make($request->gambar_1);
            $gambar1Size = public_path('images/razen-politik/tentang-kami/'.$gambar1Name);
            $gambar1->save($gambar1Size, 100);

            $gambar2Extension = $request->gambar_2->extension();
            $gambar2Name =  uniqid().'-'.date("ymd").'.'.$gambar2Extension;
            $gambar2 = Image::make($request->gambar_2);
            $gambar2Size = public_path('images/razen-politik/tentang-kami/'.$gambar2Name);
            $gambar2->save($gambar2Size, 100);

            $gambar3Extension = $request->gambar_3->extension();
            $gambar3Name =  uniqid().'-'.date("ymd").'.'.$gambar3Extension;
            $gambar3 = Image::make($request->gambar_3);
            $gambar3Size = public_path('images/razen-politik/tentang-kami/'.$gambar3Name);
            $gambar3->save($gambar3Size, 100);

            $konten = '';
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar_1' => $gambar1Name,
            'gambar_2' => $gambar2Name,
            'gambar_3' => $gambar3Name,
            'konten' => $konten
        ];

        $tentang_kami->section_5 = json_encode($array);
        $tentang_kami->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-politik.landing-page.tentang-kami.index');
    }

    public function store_section_5_konten(Request $request)
    {
        $konten_section_5 = $request->section_5;

        $get = LandingPageTentangKami::first();

        if($get->section_5)
        {
            $tentang_kami = LandingPageTentangKami::find($get->id);

            $data_section_5 = json_decode($get->section_5, true);

            if($data_section_5['konten'] == '')
            {
                for ($i=0; $i < count($konten_section_5); $i++) {

                    $data[] = [
                        'id' => uniqid(),
                        'judul' => $konten_section_5[$i]['judul'],
                        'deskripsi' => $konten_section_5[$i]['deskripsi']
                    ];
                }
            } else {
                $data_lama = [];
                foreach ($data_section_5['konten'] as $value) {
                    $data_lama[] = [
                        'id' => $value['id'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi']
                    ];
                }

                $data_baru = [];
                for ($i=0; $i < count($konten_section_5); $i++) {

                    $data_baru[] = [
                        'id' => uniqid(),
                        'judul' => $konten_section_5[$i]['judul'],
                        'deskripsi' => $konten_section_5[$i]['deskripsi']
                    ];
                }

                $data = array_merge($data_lama, $data_baru);
            }

            $array = [
                'judul' => $data_section_5['judul'],
                'deskripsi' => $data_section_5['deskripsi'],
                'gambar_1' => $data_section_5['gambar_1'],
                'gambar_2' => $data_section_5['gambar_2'],
                'gambar_3' => $data_section_5['gambar_3'],
                'konten' => $data
            ];

            $tentang_kami->section_5 = json_encode($array);
            $tentang_kami->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
            return redirect()->route('razen-politik.landing-page.tentang-kami.index');
        } else {
            Alert::error('Gagal!', 'Isi terlebih dahulu section 5');
            return redirect()->route('razen-politik.landing-page.tentang-kami.index');
        }
    }

    public function hapus_section_5_konten(Request $request)
    {
        $get = LandingPageTentangKami::first();
        $data = [];
        $data_section_5 = json_decode($get->section_5, true);
        foreach ($data_section_5['konten'] as $value) {
            if($value['id'] != $request->id)
            {
                $data[] = [
                    'id' => $value['id'],
                    'judul' => $value['judul'],
                    'deskripsi' => $value['deskripsi']
                ];
            }
        }

        $tentang_kami = LandingPageTentangKami::find($get->id);
        $array = [
            'judul' => $data_section_5['judul'],
            'deskripsi' => $data_section_5['deskripsi'],
            'gambar_1' => $data_section_5['gambar_1'],
            'gambar_2' => $data_section_5['gambar_2'],
            'gambar_3' => $data_section_5['gambar_3'],
            'konten' => $data
        ];
        $tentang_kami->section_5 = json_encode($array);
        $tentang_kami->save();

        return response()->json(['success' => 'Berhasil menghapus']);
    }
}
