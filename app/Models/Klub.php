<?php

namespace App\Models;
use App\Models\Zona;
use App\Models\Official;
use App\Models\Pemain;
use App\Models\Klub_has_kelompokUsia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klub extends Model
{
    public function zona()
    {
        return $this->belongsTo(Zona::class, 'zona_id', 'id');
    }

    public function officials()
    {
        return $this->hasMany(Official::class, 'klub_id', 'id');
    }

    public function pemains()
    {
        return $this->hasMany(Pemain::class, 'klub_id', 'id');
    }

    public function klub_has_kelompokUsias()
    {
        return $this->hasMany(Klub_has_kelompokUsia::class, 'klub_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
