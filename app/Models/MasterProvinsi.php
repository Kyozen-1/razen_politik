<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterProvinsi extends Model
{
    use HasFactory;

    public function kabupaten_kota()
    {
        return $this->hasMany('App\Models\MasterKabupatenKota', 'provinsi_id');
    }

    public function master_dpt()
    {
        return $this->hasMany('App\Models\MasterDpt', 'provinsi_id');
    }

    public function master_tps()
    {
        return $this->hasMany('App\Models\MasterTps', 'provinsi_id');
    }

    public function koordinator()
    {
        return $this->hasMany('App\Models\Koordinator', 'provinsi_id');
    }

    public function relawan()
    {
        return $this->hasMany('App\Models\Relawan', 'provinsi_id');
    }

    public function kunjungan_relawan()
    {
        return $this->hasMany('App\Models\KunjunganRelawan', 'provinsi_id');
    }

    public function saksi()
    {
        return $this->hasMany('App\Models\Saksi', 'provinsi_id');
    }

    public function dapil()
    {
        return $this->hasMany('App\Models\MasterDapil', 'provinsi_id');
    }
}
