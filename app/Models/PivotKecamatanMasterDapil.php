<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PivotKecamatanMasterDapil extends Model
{
    use HasFactory;

    public function dapil()
    {
        return $this->belongsTo('App\Models\MasterDapil', 'dapil_id');
    }

    public function kecamatan()
    {
        return $this->belongsTo('App\Models\MasterKecamatan', 'kecamatan_id');
    }
}
