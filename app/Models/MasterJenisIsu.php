<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterJenisIsu extends Model
{
    use HasFactory;

    public function laporan_isu()
    {
        return $this->hasMany('App\Models\LaporanIsu', 'jenis_isu_id');
    }
}
