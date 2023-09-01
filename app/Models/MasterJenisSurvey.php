<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterJenisSurvey extends Model
{
    use HasFactory;

    public function kunjungan_relawan()
    {
        return $this->hasMany('App\Models\KunjunganRelawan', 'jenis_survey_id');
    }
}
