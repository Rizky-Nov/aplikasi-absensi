<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    public function hari()
    {
        return $this->belongsTo(Hari::class);
    }

    public function detailabsensi()
    {
        return $this->hasMany(DetailAbsensi::class);
    }

}
