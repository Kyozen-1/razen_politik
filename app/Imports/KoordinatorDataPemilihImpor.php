<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
Use DB;
use Auth;
use App\Models\MasterProvinsi;
use App\Models\MasterKabupatenKota;
use App\Models\MasterKecamatan;
use App\Models\MasterKelurahan;
use App\Models\DptManual;

class KoordinatorDataPemilihImpor implements ToCollection,WithStartRow
{
    protected $dapil_id;

    function __construct($dapil_id){
        $this->dapil_id = $dapil_id;
    }

    public function startRow(): int
    {
        return 2;
    }
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        $response = [
            'import_status' => true,
            'import_message' => ''
        ];
        DB::beginTransaction();

        try{
            $start = microtime(true);
            $response['import_status']  = true;
            session(['import_status' => $response['import_status']]);
            $n = 0;

            foreach ($rows as $kunci=>$row) {

                // dd($row);
                if ($row->filter()->isNotEmpty()) {
                    if($row[1]==null){
                        $response['import_status'] = false;
                        $response['import_message'] = 'Kode Provinsi Harap Diisi';
                        session(['import_status' => $response['import_status']]);
                        session(['import_message' => $response['import_message']]);
                        return false;
                    }

                    if($row[2]==null){
                        $response['import_status'] = false;
                        $response['import_message'] = 'Kode Kabupaten/Kota Harap Diisi';
                        session(['import_status' => $response['import_status']]);
                        session(['import_message' => $response['import_message']]);
                        return false;
                    }

                    if($row[3]==null){
                        $response['import_status'] = false;
                        $response['import_message'] = 'Kode Kecamatan Harap Diisi';
                        session(['import_status' => $response['import_status']]);
                        session(['import_message' => $response['import_message']]);
                        return false;
                    }

                    if($row[4]==null){
                        $response['import_status'] = false;
                        $response['import_message'] = 'Kode Kelurahan Harap Diisi';
                        session(['import_status' => $response['import_status']]);
                        session(['import_message' => $response['import_message']]);
                        return false;
                    }

                    if($row[5]==null){
                        $response['import_status'] = false;
                        $response['import_message'] = 'Nama Harap Diisi';
                        session(['import_status' => $response['import_status']]);
                        session(['import_message' => $response['import_message']]);
                        return false;
                    }

                    if($row[6]==null){
                        $response['import_status'] = false;
                        $response['import_message'] = 'Email Harap Diisi';
                        session(['import_status' => $response['import_status']]);
                        session(['import_message' => $response['import_message']]);
                        return false;
                    }

                    if($row[7]==null){
                        $response['import_status'] = false;
                        $response['import_message'] = 'No HP Harap Diisi';
                        session(['import_status' => $response['import_status']]);
                        session(['import_message' => $response['import_message']]);
                        return false;
                    }
                    if(strlen($row[7]) < 10 || strlen($row[7]) > 13){
                        $response['import_status'] = false;
                        $response['import_message'] = 'No HP Harus Minimal 10 atau Maksimal 13 Karakter';
                        session(['import_status' => $response['import_status']]);
                        session(['import_message' => $response['import_message']]);
                        return false;
                    }

                    if($row[8]==null){
                        $response['import_status'] = false;
                        $response['import_message'] = 'Jenis Kelamin Harap Diisi';
                        session(['import_status' => $response['import_status']]);
                        session(['import_message' => $response['import_message']]);
                        return false;
                    }

                    if($row[8] != 'L' && $row[8] != 'P'){
                        $response['import_status'] = false;
                        $response['import_message'] = 'Jenis Kelamin Harus L / P';
                        session(['import_status' => $response['import_status']]);
                        session(['import_message' => $response['import_message']]);
                        return false;
                    }

                    if($row[9]==null){
                        $response['import_status'] = false;
                        $response['import_message'] = 'NIK Harap Diisi';
                        session(['import_status' => $response['import_status']]);
                        session(['import_message' => $response['import_message']]);
                        return false;
                    }

                    if(strlen($row[9]) != 16){
                        $response['import_status'] = false;
                        $response['import_message'] = 'NIK harus 16 Karakter';
                        session(['import_status' => $response['import_status']]);
                        session(['import_message' => $response['import_message']]);
                        return false;
                    }

                    if($row[10]==null){
                        $response['import_status'] = false;
                        $response['import_message'] = 'Alamat Harap Diisi';
                        session(['import_status' => $response['import_status']]);
                        session(['import_message' => $response['import_message']]);
                        return false;
                    }

                    if($row[11]==null){
                        $response['import_status'] = false;
                        $response['import_message'] = 'RT Harap Diisi';
                        session(['import_status' => $response['import_status']]);
                        session(['import_message' => $response['import_message']]);
                        return false;
                    }

                    if($row[12]==null){
                        $response['import_status'] = false;
                        $response['import_message'] = 'RW Harap Diisi';
                        session(['import_status' => $response['import_status']]);
                        session(['import_message' => $response['import_message']]);
                        return false;
                    }

                    $cek_provinsi = MasterProvinsi::where('kode', $row[1])->first();
                    if($cek_provinsi)
                    {
                        $cek_kabupaten = MasterKabupatenKota::where('provinsi_id', $cek_provinsi->id)
                                        ->where('kode', $row[2])
                                        ->first();
                        if($cek_kabupaten)
                        {
                            $cek_kecamatan = MasterKecamatan::where('kode', $row[3])
                                            ->where('kabupaten_kota_id', $cek_kabupaten->id)
                                            ->whereHas('kabupaten_kota', function($q) use ($cek_provinsi){
                                                $q->where('provinsi_id', $cek_provinsi->id);
                                            })
                                            ->first();
                            if($cek_kecamatan)
                            {
                                $cek_kelurahan = MasterKelurahan::where('kode', $row[4])
                                                    ->where('kecamatan_id', $cek_kecamatan->id)
                                                    ->whereHas('kecamatan', function($q) use ($cek_kabupaten, $cek_provinsi){
                                                        $q->where('kabupaten_kota_id', $cek_kabupaten->id);
                                                        $q->whereHas('kabupaten_kota', function($q) use ($cek_provinsi){
                                                            $q->where('provinsi_id', $cek_provinsi->id);
                                                        });
                                                    })
                                                    ->first();
                                if($cek_kelurahan)
                                {
                                    $dpt_manual = new DptManual;
                                    $dpt_manual->pengguna_id = Auth::user()->koordinator->pengguna_id;
                                    $dpt_manual->dapil_id = $this->dapil_id;
                                    $dpt_manual->provinsi_id = $cek_provinsi->id;
                                    $dpt_manual->kabupaten_kota_id = $cek_kabupaten->id;
                                    $dpt_manual->kecamatan_id = $cek_kecamatan->id;
                                    $dpt_manual->kelurahan_id = $cek_kelurahan->id;
                                    $dpt_manual->nama = $row[5];
                                    $dpt_manual->email = $row[6];
                                    $dpt_manual->no_hp = $row[7];
                                    $dpt_manual->jenis_kelamin = $row[8];
                                    $dpt_manual->nik = $row[9];
                                    $dpt_manual->alamat = $row[10];
                                    $dpt_manual->rt = $row[11];
                                    $dpt_manual->rw = $row[12];
                                    $dpt_manual->status_pemilih = '1';
                                    $dpt_manual->save();
                                    $n++;
                                } else {
                                    $response['import_status'] = false;
                                    $response['import_message'] = 'Kode Kelurahan '.$row[4].' Tidak Ditemukan';
                                    session(['import_status' => $response['import_status']]);
                                    session(['import_message' => $response['import_message']]);
                                    return false;
                                }
                            } else {
                                $response['import_status'] = false;
                                $response['import_message'] = 'Kode Kecamatan '.$row[3].' Tidak Ditemukan';
                                session(['import_status' => $response['import_status']]);
                                session(['import_message' => $response['import_message']]);
                                return false;
                            }
                        } else {
                            $response['import_status'] = false;
                            $response['import_message'] = 'Kode Kabupaten '.$row[2].' Tidak Ditemukan';
                            session(['import_status' => $response['import_status']]);
                            session(['import_message' => $response['import_message']]);
                            return false;
                        }
                    } else {
                        $response['import_status'] = false;
                        $response['import_message'] = 'Kode Provinsi '.$row[1].' Tidak Ditemukan';
                        session(['import_status' => $response['import_status']]);
                        session(['import_message' => $response['import_message']]);
                        return false;
                    }
                }

            }
            $time_elapsed_secs = microtime(true) - $start;
            $response['import_message'] = $n. ' data telah diimport dalam '. $time_elapsed_secs.' Second';
            session(['import_message' => $response['import_message']]);
            DB::commit();
        }catch (\Illuminate\Database\QueryException $exception) {
            DB::rollback();
            $errorInfo = $exception->errorInfo;
            // dd($exception->errorInfo);
            $response['import_status'] = false;
            $response['import_message'] = $errorInfo[2];;
            session(['import_status' => $response['import_status']]);
            session(['import_message' => $response['import_message']]);
        }
        session(['import_status' => $response['import_status']]);
        session(['import_message' => $response['import_message']]);
        return true;
    }
}
