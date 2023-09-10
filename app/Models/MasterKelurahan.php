<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterKelurahan extends Model
{
    use HasFactory;

    public function kecamatan()
    {
        return $this->belongsTo('App\Models\MasterKecamatan', 'kecamatan_id');
    }

    public function koordinator()
    {
        return $this->hasMany('App\Models\Koordinator', 'kelurahan_id');
    }

    public function relawan()
    {
        return $this->hasMany('App\Models\Relawan', 'kelurahan_id');
    }

    public function kunjungan_relawan()
    {
        return $this->hasMany('App\Models\KunjunganRelawan', 'kelurahan_id');
    }

    public function saksi()
    {
        return $this->hasMany('App\Models\Saksi', 'kelurahan_id');
    }

    public function kelurahan()
    {
        return $this->hasMany('App\Models\MasterKelurahan', 'kelurahan_id');
    }

    public function laporan_isu()
    {
        return $this->hasMany('App\Models\LaporanIsu', 'kelurahan_id');
    }
}
