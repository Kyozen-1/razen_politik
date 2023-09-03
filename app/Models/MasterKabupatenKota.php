<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterKabupatenKota extends Model
{
    use HasFactory;

    public function provinsi()
    {
        return $this->belongsTo('App\Models\MasterProvinsi', 'provinsi_id');
    }

    public function kecamatan()
    {
        return $this->hasMany('App\Models\MasterKecamatan', 'kabupaten_kota_id');
    }

    public function koordinator()
    {
        return $this->hasMany('App\Models\Koordinator', 'kabupaten_kota_id');
    }

    public function relawan()
    {
        return $this->hasMany('App\Models\Relawan', 'kabupaten_kota_id');
    }

    public function kunjungan_relawan()
    {
        return $this->hasMany('App\Models\KunjunganRelawan', 'kabupaten_kota_id');
    }

    public function saksi()
    {
        return $this->hasMany('App\Models\Saksi', 'kabupaten_kota_id');
    }

    public function dapil()
    {
        return $this->hasMany('App\Models\MasterDapil', 'kabupaten_kota_id');
    }
}
