<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class PerbaikanHomeController extends Controller
{
    public function beranda()
    {
        return view('perbaikan-landing-page.beranda.index');
    }

    public function tentang_kami()
    {
        return view('perbaikan-landing-page.tentang-kami.index');
    }

    public function harga()
    {
        return view('perbaikan-landing-page.harga.index');
    }

    public function artikel()
    {
        return view('perbaikan-landing-page.artikel.index');
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
}
