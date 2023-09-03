<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RespondenKunjungan extends Model
{
    use HasFactory;

    public function kunjungan_relawan()
    {
        return $this->belongsTo('App\Models\KunjunganRelawan', 'kunjungan_relawan_id');
    }
}
