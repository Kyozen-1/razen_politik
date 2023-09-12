<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananLogistik extends Model
{
    use HasFactory;

    public function logistik()
    {
        return $this->belongsTo('App\Models\Logistik', 'logistik_id');
    }
}
