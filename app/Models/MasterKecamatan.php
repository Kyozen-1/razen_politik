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

    public function saksi()
    {
        return $this->hasMany('App\Models\Saksi', 'kecamatan_id');
    }

    public function pivot_kecamatan_master_dapil()
    {
        return $this->hasMany('App\Models\PivotKecamatanMasterDapil', 'kecamatan_id');
    }

    public function kecamatan()
    {
        return $this->hasMany('App\Models\MasterKecamatan', 'kecamatan_id');
    }

    public function laporan_isu()
    {
        return $this->hasMany('App\Models\LaporanIsu', 'kecamatan_id');
    }
}
