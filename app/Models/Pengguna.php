<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    public function dpt_manual()
    {
        return $this->hasMany('App\Models\DptManual', 'pengguna_id');
    }

}
