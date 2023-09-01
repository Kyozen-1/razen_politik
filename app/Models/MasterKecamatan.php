<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterKecamatan extends Model
{
    use HasFactory;

    public function kabupaten_kota()
    {
        return $this->belongsTo('App\Models\MasterKabupatenKota', 'kabupaten_kota_id');
    }

    public function kelurahan()
    {
        return $this->hasMany('App\Models\MasterKelurahan', 'kecamatan_id');
    }

    public function koordinator()
    {
        return $this->hasMany('App\Models\Koordinator', 'kecamatan_id');
    }

    public function relawan()
    {
        return $this->hasMany('App\Models\Relawan', 'kecamatan_id');
    }

    public function kunjungan_relawan()
    {
        return $this->hasMany('App\Models\KunjunganRelawan', 'kecamatan_id');
    }
}
