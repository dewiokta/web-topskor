<?php

namespace App\Models;
use App\Models\Kelompok_usia;
use App\Models\Klub;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class klub_has_kelompokUsia extends Model
{
    public function kelompok_usia()
    {
        return $this->belongsTo(Kelompok_usia::class, 'kelusia_id', 'id');
    }

    public function klub()
    {
        return $this->belongsTo(Klub::class, 'klub_id', 'id');
    }
}
