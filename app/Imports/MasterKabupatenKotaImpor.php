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

class MasterKabupatenKotaImpor implements ToCollection,WithStartRow
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
                        if(!$cek_kabupaten)
                        {
                            $kabupaten = new MasterKabupatenKota;
                            $kabupaten->provinsi_id = $cek_provinsi->id;
                            $kabupaten->kode = $row[2];
                            $kabupaten->nama = $row[3];
                            $kabupaten->save();

                            $n++;
                            $randomString='';
                        }
                    } else {
                        $response['import_status'] = false;
                        $response['import_message'] = 'Kode Provinsi Pada Kabupaten '.$row[3].' Tidak Ditemukan';
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
