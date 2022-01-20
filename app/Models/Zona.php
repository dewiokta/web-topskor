<?php

namespace App\Models;
use App\Models\Klub;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    public function klubs()
    {
        return $this->hasMany(Klub::class, 'zona_id', 'id');
    }
}
