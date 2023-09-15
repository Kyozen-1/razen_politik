<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Models\Tim;
use App\Models\MasterJabatanPilihan;
use App\Models\ProdukLain;
use App\Models\MasterPaket;
use App\Models\PivotPaket;
use App\Models\PivotPaketFitur;
use App\Models\MasterFitur;
use App\Models\MasterRole;
use App\Models\Profil;
use GuzzleHttp\Client;

class PerbaikanHomeController extends Controller
{
    public function beranda()
    {
        $profil = Profil::first();
        $jabatan_pilihan = MasterJabatanPilihan::pluck('nama', 'id');
        $produkLains = ProdukLain::all();

        $first_jabatan_pilihan = MasterJabatanPilihan::first();
        $pivot_pakets = PivotPaket::where('jabatan_pilihan_id', $first_jabatan_pilihan->id)->get();
        $html = '';
        foreach ($pivot_pakets as $pivot_paket) {
            $html .= '<div class="col-lg-6">';
                $html .= '<div class="event-single-items">';
                    $html .= '<div class="content">';
                        $html .= '<div class="post-mate" style="width: fit-content; height: fit-content;">';
                            $html .= '<h2 class="post-date">'.$pivot_paket->paket->nama.'</h2>';
                        $html .= '</div>';
                        $html .= '<div class="subtitle">';
                            $html .= '<div class="location">';
                                $html .= '<h4 class="title">Rp. '.number_format($pivot_paket->harga, 2, ',', '.').' / '.$pivot_paket->lama_waktu.' '.$pivot_paket->tipe_waktu.'</h4>';
                            $html .= '</div>';
                        $html .= '</div>';
                        $html .= '<h4>';
                            $html .= '<ul>';
                                $pivot_paket_fiturs = PivotPaketFitur::where('pivot_paket_id', $pivot_paket->id)->get();
                                foreach ($pivot_paket_fiturs as $pivot_paket_fitur) {
                                    $html .= '<li>'.$pivot_paket_fitur->fitur->role->nama.' : '.$pivot_paket_fitur->fitur->nama.'</li>';
                                }
                            $html .= '</ul>';
                        $html .= '</h4>';
                        $html .= '<div class="btn-wrapper">';
                            $html .= '<a href="https://api.whatsapp.com/send?phone='.$profil->no_hp.'&text='.urlencode('Halo...
                            Saya ingin menggunakan berlangganan Razen Politik.
                            Jabatan Pilihan: '.$pivot_paket->jabatan_pilihan->nama.'
                            Paket: '.$pivot_paket->paket->nama.'
                            Harga: Rp. '.number_format($pivot_paket->harga, 2, ',', '.').'
                            Durasi: '.$pivot_paket->lama_waktu.' '.$pivot_paket->tipe_waktu.'').'" class="boxed-btn event-btn"><i class="fas fa-arrow-right" target="blank"></i>Beli Paket</a>';
                        $html .= '</div>';
                    $html .= '</div>';
                $html .= '</div>';
            $html .= '</div>';
        }

        $client = new Client();
        $url = 'https://berita-indo-api.vercel.app/v1/antara-news/politik';
        $response = json_decode($client->get($url, ['verify' => false])->getBody())->data;

        return view('perbaikan-landing-page.beranda.index', [
            'jabatan_pilihan' => $jabatan_pilihan,
            'produkLains' => $produkLains,
            'html' => $html,
            'beritas' => $response
        ]);
    }

    public function tentang_kami()
    {
        $tims = Tim::latest()->get();
        return view('perbaikan-landing-page.tentang-kami.index', [
            'tims' => $tims
        ]);
    }

    public function harga()
    {
        $profil = Profil::first();
        $jabatan_pilihan = MasterJabatanPilihan::pluck('nama', 'id');
        $produkLains = ProdukLain::all();

        $first_jabatan_pilihan = MasterJabatanPilihan::first();
        $pivot_pakets = PivotPaket::where('jabatan_pilihan_id', $first_jabatan_pilihan->id)->get();
        $html = '';
        foreach ($pivot_pakets as $pivot_paket) {
            $html .= '<div class="col-lg-6">';
                $html .= '<div class="event-single-items">';
                    $html .= '<div class="content">';
                        $html .= '<div class="post-mate" style="width: fit-content; height: fit-content;">';
                            $html .= '<h2 class="post-date">'.$pivot_paket->paket->nama.'</h2>';
                        $html .= '</div>';
                        $html .= '<div class="subtitle">';
                            $html .= '<div class="location">';
                                $html .= '<h4 class="title">Rp. '.number_format($pivot_paket->harga, 2, ',', '.').' / '.$pivot_paket->lama_waktu.' '.$pivot_paket->tipe_waktu.'</h4>';
                            $html .= '</div>';
                        $html .= '</div>';
                        $html .= '<h4>';
                            $html .= '<ul>';
                                $pivot_paket_fiturs = PivotPaketFitur::where('pivot_paket_id', $pivot_paket->id)->get();
                                foreach ($pivot_paket_fiturs as $pivot_paket_fitur) {
                                    $html .= '<li>'.$pivot_paket_fitur->fitur->role->nama.' : '.$pivot_paket_fitur->fitur->nama.'</li>';
                                }
                            $html .= '</ul>';
                        $html .= '</h4>';
                        $html .= '<div class="btn-wrapper">';
                            $html .= '<a href="https://api.whatsapp.com/send?phone='.$profil->no_hp.'&text='.urlencode('Halo...
                            Saya ingin menggunakan berlangganan Razen Politik.
                            Jabatan Pilihan: '.$pivot_paket->jabatan_pilihan->nama.'
                            Paket: '.$pivot_paket->paket->nama.'
                            Harga: Rp. '.number_format($pivot_paket->harga, 2, ',', '.').'
                            Durasi: '.$pivot_paket->lama_waktu.' '.$pivot_paket->tipe_waktu.'').'" class="boxed-btn event-btn"><i class="fas fa-arrow-right" target="blank"></i>Beli Paket</a>';
                        $html .= '</div>';
                    $html .= '</div>';
                $html .= '</div>';
            $html .= '</div>';
        }

        return view('perbaikan-landing-page.harga.index', [
            'jabatan_pilihan' => $jabatan_pilihan,
            'produkLains' => $produkLains,
            'html' => $html
        ]);
    }

    public function artikel()
    {
        $client = new Client();
        $url = 'https://berita-indo-api.vercel.app/v1/antara-news/politik';
        $response = json_decode($client->get($url, ['verify' => false])->getBody())->data;
        return view('perbaikan-landing-page.artikel.index', [
            'datas' => $response
        ]);
    }

    public function bantuan()
    {
        return view('perbaikan-landing-page.bantuan.index');
    }

    public function kontak_kami(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required | max:255',
            'email' => 'required | max:255',
            'no_hp' => 'required | max:255',
            'subjek' => 'required',
            'message' => 'required'
        ]);

        $data = [
            'email' => $request->email,
            'subjek' => $request->subjek,
            'body' => $request->message
        ];

        Mail::send('emails.kontak-kami', $data, function($message) use ($data, $request){
            $message->from($data['email']);
            $message->to(env('MAIL_USERNAME'), env('APP_NAME'));
            $message->subject($data['subjek']);
        });

        return redirect(route('bantuan'));
    }

    public function get_paket($id)
    {
        $profil = Profil::first();
        $pivot_pakets = PivotPaket::where('jabatan_pilihan_id', $id)->get();
        $html = '';
        foreach ($pivot_pakets as $pivot_paket) {
            $html .= '<div class="col-lg-6">';
                $html .= '<div class="event-single-items">';
                    $html .= '<div class="content">';
                        $html .= '<div class="post-mate" style="width: fit-content; height: fit-content;">';
                            $html .= '<h2 class="post-date">'.$pivot_paket->paket->nama.'</h2>';
                        $html .= '</div>';
                        $html .= '<div class="subtitle">';
                            $html .= '<div class="location">';
                                $html .= '<h4 class="title">Rp. '.number_format($pivot_paket->harga, 2, ',', '.').' / '.$pivot_paket->lama_waktu.' '.$pivot_paket->tipe_waktu.'</h4>';
                            $html .= '</div>';
                        $html .= '</div>';
                        $html .= '<h4>';
                            $html .= '<ul>';
                                $pivot_paket_fiturs = PivotPaketFitur::where('pivot_paket_id', $pivot_paket->id)->get();
                                foreach ($pivot_paket_fiturs as $pivot_paket_fitur) {
                                    $html .= '<li>'.$pivot_paket_fitur->fitur->role->nama.' : '.$pivot_paket_fitur->fitur->nama.'</li>';
                                }
                            $html .= '</ul>';
                        $html .= '</h4>';
                        $html .= '<div class="btn-wrapper">';
                            $html .= '<a href="https://api.whatsapp.com/send?phone='.$profil->no_hp.'&text='.urlencode('Halo...
                            Saya ingin menggunakan berlangganan Razen Politik.
                            Jabatan Pilihan: '.$pivot_paket->jabatan_pilihan->nama.'
                            Paket: '.$pivot_paket->paket->nama.'
                            Harga: Rp. '.number_format($pivot_paket->harga, 2, ',', '.').'
                            Durasi: '.$pivot_paket->lama_waktu.' '.$pivot_paket->tipe_waktu.'').'" class="boxed-btn event-btn"><i class="fas fa-arrow-right" target="blank"></i>Beli Paket</a>';
                        $html .= '</div>';
                    $html .= '</div>';
                $html .= '</div>';
            $html .= '</div>';
        }

        return response()->json($html);
    }
}
