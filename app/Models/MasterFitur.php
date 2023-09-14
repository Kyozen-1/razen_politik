<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterFitur extends Model
{
    use HasFactory;

    public function role()
    {
        return $this->belongsTo('App\Models\MasterRole', 'role_id');
    }

    public function pivot_paket_fitur()
    {
        return $this->hasMany('App\Models\PivotPaketFitur', 'fitur_id');
    }
}
