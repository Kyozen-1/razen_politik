<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterJabatanPilihan extends Model
{
    use HasFactory;

    public function dapil()
    {
        return $this->hasMany('App\Models\MasterDapil', 'jabatan_pilihan_id');
    }
}
