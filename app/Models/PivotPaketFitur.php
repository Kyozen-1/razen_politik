<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PivotPaketFitur extends Model
{
    use HasFactory;

    public function pivot_paket()
    {
        return $this->belongsTo('App\Models\PivotPaket', 'pivot_paket_id');
    }

    public function fitur()
    {
        return $this->hasMany('App\Models\MasterFitur', 'fitur_id');
    }
}
