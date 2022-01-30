<?php

namespace App\Models;
use App\Models\Klub;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Official extends Model
{
    public function klub()
    {
        return $this->belongsTo(Klub::class, 'klub_id', 'id');
    }

}
