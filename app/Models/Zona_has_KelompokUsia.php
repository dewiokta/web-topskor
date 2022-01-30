<?php

namespace App\Models;
use App\Models\Zona;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zona_has_KelompokUsia extends Model
{
    public function zona()
    {
        return $this->belongsTo(Zona::class, 'zona_id', 'id');
    }

    public function kelompok_usia()
    {
        return $this->belongsTo(Kelompok_usia::class, 'kelusia_id', 'id');
    }
}
