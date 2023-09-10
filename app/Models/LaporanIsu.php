<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanIsu extends Model
{
    use HasFactory;

    public function pengguna()
    {
        return $this->belongsTo('App\Models\Pengguna', 'pengguna_id');
    }

    public function jenis_isu()
    {
        return $this->belongsTo('App\Models\MasterJenisIsu', 'jenis_isu_id');
    }

    public function provinsi()
    {
        return $this->belongsTo('App\Models\MasterProvinsi', 'provinsi_id');
    }

    public function kabupaten_kota()
    {
        return $this->belongsTo('App\Models\MasterKabupatenKota', 'kabupaten_kota_id');
    }

    public function kecamatan()
    {
        return $this->belongsTo('App\Models\MasterKecamatan', 'kecamatan_id');
    }

    public function kelurahan()
    {
        return $this->belongsTo('App\Models\MasterKelurahan', 'kelurahan_id');
    }
}
