<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // public function hari()
    // {
    //     return $this->belongsTo(Hari::class);
    // }

    public function detailhariabsen()
    {
        return $this->hasMany(DetailHariAbsen::class);
    }

}
