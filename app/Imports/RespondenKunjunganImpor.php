<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
Use DB;
use Illuminate\Support\Facades\Crypt;
use App\Models\RespondenKunjungan;

class RespondenKunjunganImpor implements ToCollection,WithStartRow
{
    protected $kunjungan_relawan_id;

    function __construct($kunjungan_relawan_id){
        $this->kunjungan_relawan_id = $kunjungan_relawan_id;
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

            $id = Crypt::decryptString($this->kunjungan_relawan_id);

            foreach ($rows as $kunci=>$row) {

                // dd($row);
                if ($row->filter()->isNotEmpty()) {
                    if($row[1]==null){
                        $response['import_status'] = false;
                        $response['import_message'] = 'Nama Harap Diisi';
                        session(['import_status' => $response['import_status']]);
                        session(['import_message' => $response['import_message']]);
                        return false;
                    }

                    $responden_kunjungan = RespondenKunjungan::where('nama', $row[1])->first();
                    if(!$responden_kunjungan)
                    {
                        $responden_kunjungan = new RespondenKunjungan;
                        $responden_kunjungan->kunjungan_relawan_id = $id;
                        $responden_kunjungan->nama = $row[1];
                        $responden_kunjungan->save();

                        $n++;
                        $randomString='';
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
