<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailAbsensi extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function absensi()
    {
        return $this->belongsTo(Absensi::class);
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
