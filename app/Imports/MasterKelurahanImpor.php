<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
Use DB;
use App\Models\MasterProvinsi;
use App\Models\MasterKabupatenKota;
use App\Models\MasterKecamatan;
use App\Models\MasterKelurahan;

class MasterKelurahanImpor implements ToCollection,WithStartRow
{
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
                                if(!$cek_kelurahan)
                                {
                                    $kelurahan = new MasterKelurahan;
                                    $kelurahan->kecamatan_id = $cek_kecamatan->id;
                                    $kelurahan->kode = $row[4];
                                    $kelurahan->nama = $row[5];
                                    $kelurahan->save();

                                    $n++;
                                    $randomString='';
                                }
                            } else {
                                $response['import_status'] = false;
                                $response['import_message'] = 'Kode Kecamatan Pada Kelurahan '.$row[5].' Tidak Ditemukan';
                                session(['import_status' => $response['import_status']]);
                                session(['import_message' => $response['import_message']]);
                                return false;
                                }
                        } else {
                            $response['import_status'] = false;
                            $response['import_message'] = 'Kode Kabupaten Pada Kelurahan '.$row[5].' Tidak Ditemukan';
                            session(['import_status' => $response['import_status']]);
                            session(['import_message' => $response['import_message']]);
                            return false;
                        }
                    } else {
                        $response['import_status'] = false;
                        $response['import_message'] = 'Kode Provinsi Pada Kelurahan '.$row[5].' Tidak Ditemukan';
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
