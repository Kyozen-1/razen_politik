<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PivotPaket extends Model
{
    use HasFactory;

    public function pivot_paket_fitur()
    {
        return $this->hasMany('App\Models\PivotPaketFitur', 'pivot_paket_id');
    }

    public function paket()
    {
        return $this->belongsTo('App\Models\MasterPaket', 'paket_id');
    }

    public function jabatan_pilihan()
    {
        return $this->belongsTo('App\Models\MasterJabatanPilihan', 'jabatan_pilihan_id');
    }
}
