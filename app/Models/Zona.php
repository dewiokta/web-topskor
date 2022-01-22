<?php

namespace App\Models;
use App\Models\Klub;
use app\Models\Zona_has_KelompokUsia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    public function klubs()
    {
        return $this->hasMany(Klub::class, 'zona_id', 'id');
    }

    public function zona_has_kelompokUsias()
    {
        return $this->hasMany(Zona_has_kelompokUsia::class, 'klub_id', 'id');
    }
}
