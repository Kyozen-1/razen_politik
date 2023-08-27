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
}
