<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logistik extends Model
{
    use HasFactory;

    public function pemesanan_logistik()
    {
        return $this->hasMany('App\Models\PemesananLogistik', 'logistik_id');
    }

    public function penerimaan_logistik()
    {
        return $this->hasMany('App\Models\PenerimaanLogistik', 'logistik_id');
    }

    public function pengeluaran_logistik()
    {
        return $this->hasMany('App\Models\PengeluaranLogistik', 'logistik_id');
    }
}
