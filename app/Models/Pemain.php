<?php

namespace App\Models;

use App\Models\Klub;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemain extends Model
{
    protected $table = 'pemains';
    public function klub()
    {
        return $this->belongsTo(Klub::class, 'klub_id', 'id');
    }

    public function zona()
    {
        return $this->belongsTo(Zona::class, 'klub_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function pemain_has_kelompokUsias()
    {
        return $this->hasMany(Pemain_has_kelompokUsia::class, 'kelusia_id', 'id');
    }
}
