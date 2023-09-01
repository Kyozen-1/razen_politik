<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relawan extends Model
{
    use HasFactory;

    public function koordinator()
    {
        return $this->belongsTo('App\Models\Koordinator', 'koordinator_id');
    }

    public function akun_relawan()
    {
        return $this->hasOne('App\Models\AkunRelawan', 'relawan_id');
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

    public function kunjungan_relawan()
    {
        return $this->hasMany('App\Models\KunjungaRelawan', 'relawan_id');
    }
}
