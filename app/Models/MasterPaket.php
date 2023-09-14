<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterPaket extends Model
{
    use HasFactory;

    public function pivot_paket()
    {
        return $this->hasMany('App\Models\PivotPaket', 'paket_id');
    }
}
