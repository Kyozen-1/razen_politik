<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkunSaksi extends Model
{
    use HasFactory;

    public function saksi()
    {
        return $this->belongsTo('App\Models\AkunSaksi', 'saksi_id');
    }
}
