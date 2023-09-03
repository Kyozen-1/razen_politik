<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterDapil extends Model
{
    use HasFactory;

    public function jabatan_pilihan()
    {
        return $this->belongsTo('App\Models\MasterJabatanPilihan', 'jabatan_pilihan_id');
    }

    public function provinsi()
    {
        return $this->belongsTo('App\Models\MasterProvinsi', 'provinsi_id');
    }

    public function kabupaten_kota()
    {
        return $this->belongsTo('App\Models\MasterKabupatenKota', 'kabupaten_kota_id');
    }

    public function pivot_kecamatan_master_dapil()
    {
        return $this->hasMany('App\Models\PivotKecamatanMasterDapil', 'dapil_id');
    }
}
