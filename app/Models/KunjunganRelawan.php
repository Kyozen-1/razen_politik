<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KunjunganRelawan extends Model
{
    use HasFactory;

    public function relawan()
    {
        return $this->belongsTo('App\Models\Relawan', 'relawan_id');
    }

    public function jenis_survey()
    {
        return $this->belongsTo('App\Models\MasterJenisSurvey', 'jenis_survey_id');
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

    public function responden_kunjungan()
    {
        return $this->hasMany('App\Models\RespondenKunjungan', 'kunjungan_relawan_id');
    }
}
