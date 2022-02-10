<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemain_has_kelompokUsia extends Model
{
    public function pemain()
    {
        return $this->belongsTo(Pemain::class, 'pemain_id', 'id');
    }

    public function kelompok_usia()
    {
        return $this->belongsTo(Kelompok_usia::class, 'pemain_id', 'id');
    }

    public $timestamps = false;
}
