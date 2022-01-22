<?php

namespace App\Models;
use App\Models\Klub_has_kelompokUsia;
use App\Models\Zona_has_KelompokUsia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelompok_usia extends Model
{
    public function klub_has_kelompokUsias()
    {
        return $this->hasMany(Klub_has_kelompokUsia::class, 'kelusia_id', 'id');
    }

    public function zona_has_kelompokUsias()
    {
        return $this->hasMany(Zona_has_kelompokUsia::class, 'kelusia_id', 'id');
    }

}
