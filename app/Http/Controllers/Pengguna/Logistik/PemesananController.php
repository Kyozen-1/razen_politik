<?php

namespace App\Http\Controllers\Pengguna\Logistik;

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
use Maatwebsite\Excel\Facades\Excel;

use App\Models\Logistik;
use App\Models\PemesananLogistik;
use App\Models\PenerimaanLogistik;

class PemesananController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            $data = PemesananLogistik::whereHas('logistik', function($q){
                        $q->where('pengguna_id', Auth::user()->pengguna_id);
                    })->latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function($data){
                    $button_show = '<button type="button" name="detail" id="'.$data->id.'" class="detail btn btn-icon waves-effect btn-info" title="Detail Data"><i class="fas fa-eye"></i></button>';
                    $button_edit = '<button type="button" name="edit" id="'.$data->id.'"
                    class="edit btn btn-icon waves-effect btn-warning" title="Edit Data"><i class="fas fa-edit"></i></button>';
                    $button_delete = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-icon waves-effect btn-danger" title="Delete Data"><i class="fas fa-trash"></i></button>';
                    $button = $button_show . ' ' . $button_edit . ' ' . $button_delete;
                    return $button;
                })
                ->editColumn('tgl_pemesanan', function($data){
                    return Carbon::parse($data->tgl_pemesanan)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y ; h:i a');
                })
                ->addColumn('nama', function($data){
                    return $data->logistik->nama;
                })
                ->addColumn('satuan', function($data){
                    return $data->logistik->satuan;
                })
                ->addColumn('harga', function($data){
                    return 'Rp. '. number_format($data->logistik->harga, 2, ',', '.');
                })
                ->editColumn('status', function($data){
                    if($data->status == 'belum_diterima')
                    {
                        return 'Belum Diterima';
                    }

                    if($data->status == 'sudah_diterima')
                    {
                        return 'Sudah Diterima';
                    }
                })
                ->editColumn('keterangan', function($data){
                    return strip_tags(substr($data->keterangan,0, 20)) . '...';
                })
                ->editColumn('tgl_terima', function($data){
                    return Carbon::parse($data->tgl_terima)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y ; h:i a');
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
        $logistik = Logistik::pluck('nama', 'id');
        return view('pengguna.logistik.pemesanan.index', [
            'logistik' => $logistik
        ]);
    }

    public function store(Request $request)
    {
        try {
            $errors = Validator::make($request->all(), [
                'select_logistik' => 'required',
                'kode' => 'required',
                'jumlah' => 'required',
                'keterangan' => 'required',
                'status_pemesanan' => 'required',
                'tgl_pemesanan' => 'required',
            ]);

            if($errors -> fails())
            {
                return response()->json(['errors' => $errors->errors()->all()]);
            }

            if($request->select_logistik == 'tambah')
            {
                $errors = Validator::make($request->all(), [
                    'nama_logistik' => 'required | max:255',
                    'satuan' => 'required | max:255',
                    'harga' => 'required',
                    'foto' => 'required | mimes:png,jpg,jpeg'
                ]);

                if($errors -> fails())
                {
                    return response()->json(['errors' => $errors->errors()->all()]);
                }
            }

            if($request->status_pemesanan == 'sudah_diterima')
            {
                $errors = Validator::make($request->all(), [
                    'tgl_terima' => 'required'
                ]);

                if($errors -> fails())
                {
                    return response()->json(['errors' => $errors->errors()->all()]);
                }
            }

            if($request->select_logistik == 'tambah')
            {
                $fotoExtension = $request->foto->extension();
                $fotoName =  uniqid().'-'.date("ymd").'.'.$fotoExtension;
                $foto = Image::make($request->foto);
                $fotoSize = public_path('images/logistik/'.$fotoName);
                $foto->save($fotoSize, 100);

                $logistik = new Logistik;
                $logistik->pengguna_id = Auth::user()->pengguna_id;
                $logistik->nama = $request->nama_logistik;
                $logistik->satuan = $request->satuan;
                $logistik->harga = $request->harga;
                $logistik->foto = $fotoName;
                $logistik->save();
            }

            $pemesanan_logistik = new PemesananLogistik;
            if($request->select_logistik == 'tambah')
            {
                $pemesanan_logistik->logistik_id = $logistik->id;
            } else {
                $pemesanan_logistik->logistik_id = $request->select_logistik;
            }
            $pemesanan_logistik->kode = $request->kode;
            $pemesanan_logistik->jumlah = $request->jumlah;
            $pemesanan_logistik->keterangan = $request->keterangan;
            $pemesanan_logistik->status = $request->status_pemesanan;
            $pemesanan_logistik->tgl_pemesanan = $request->tgl_pemesanan;
            if($request->status_pemesanan == 'sudah_diterima')
            {
                $pemesanan_logistik->tgl_terima = $request->tgl_terima;
            }
            $pemesanan_logistik->save();

            if($request->status_pemesanan == 'sudah_diterima')
            {
                $penerimaan = new PenerimaanLogistik;
                if($request->select_logistik == 'tambah')
                {
                    $penerimaan->logistik_id = $logistik->id;
                } else {
                    $penerimaan->logistik_id = $request->select_logistik;
                }
                $penerimaan->jumlah = $request->jumlah;
                $penerimaan->tgl_terima = $pemesanan_logistik->tgl_terima;
                $penerimaan->save();
            }

            return response()->json(['success' => 'Berhasil menyimpan data']);
        } catch (\Throwable $th) {
            return response()->json(['errors' => $th->getMessage()]);
        }
    }

    public function show($id)
    {
        $data = PemesananLogistik::find($id);
        $data['nama'] = $data->logistik->nama;
        $data['satuan'] = $data->logistik->satuan;
        $data['harga'] = $data->logistik->harga;
        $data['foto'] = $data->logistik->foto;
        if($data->status == 'belum_diterima')
        {
            $data['status'] = 'Belum diterima';
        }

        if($data->status == 'belum_diterima')
        {
            $data['status'] = 'Belum diterima';
        }
        $data['tgl_pemesanan'] = Carbon::parse($data->tgl_pemesanan)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y ; h:i a');
        if($data->tgl_diterima)
        {
            $data['tgl_diterima'] = Carbon::parse($data->tgl_diterima)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y ; h:i a');
        }

        return response()->json(['result' => $data]);
    }

    public function edit($id)
    {
        $data = PemesananLogistik::find($id);
        $tgl_pemesanan = strtotime($data->tgl_pemesanan);
        $edit_tgl_pemesanan = date('Y-m-d\TH:i', $tgl_pemesanan);

        $data['tgl_pemesanan'] = $edit_tgl_pemesanan;

        if($data->tgl_terima)
        {
            $tgl_terima = strtotime($data->tgl_terima);
            $edit_tgl_terima = date('Y-m-d\TH:i', $tgl_terima);

            $data['tgl_terima'] = $edit_tgl_terima;
        }

        return response()->json(['result' => $data]);
    }

    public function update(Request $request)
    {
        try {
            $errors = Validator::make($request->all(), [
                'kode' => 'required',
                'jumlah' => 'required',
                'keterangan' => 'required',
                'status_pemesanan' => 'required',
                'tgl_pemesanan' => 'required',
            ]);

            if($errors -> fails())
            {
                return response()->json(['errors' => $errors->errors()->all()]);
            }

            if($request->status_pemesanan == 'sudah_diterima')
            {
                $errors = Validator::make($request->all(), [
                    'tgl_terima' => 'required'
                ]);

                if($errors -> fails())
                {
                    return response()->json(['errors' => $errors->errors()->all()]);
                }
            }

            $pemesanan_logistik = PemesananLogistik::find($request->hidden_id);
            $pemesanan_logistik->kode = $request->kode;
            $pemesanan_logistik->jumlah = $request->jumlah;
            $pemesanan_logistik->keterangan = $request->keterangan;
            $pemesanan_logistik->status = $request->status_pemesanan;
            $pemesanan_logistik->tgl_pemesanan = $request->tgl_pemesanan;
            if($request->status_pemesanan == 'sudah_diterima')
            {
                $pemesanan_logistik->tgl_terima = $request->tgl_terima;
            }
            $pemesanan_logistik->save();

            if($request->status_pemesanan == 'sudah_diterima')
            {
                $penerimaan = new PenerimaanLogistik;
                $penerimaan->logistik_id = $pemesanan_logistik->logistik_id;
                $penerimaan->jumlah = $request->jumlah;
                $penerimaan->tgl_terima = $pemesanan_logistik->tgl_terima;
                $penerimaan->save();
            }

            return response()->json(['success' => 'Berhasil merubah data']);
        } catch (\Throwable $th) {
            return response()->json(['errors' => $th->getMessage()]);
        }
    }

    public function destroy($id)
    {
        PemesananLogistik::find($id)->delete();
    }
}
