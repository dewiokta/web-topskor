<?php

namespace App\Models;
use App\Models\Klub;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemain extends Model
{
    public function klub()
    {
        return $this->belongsTo(Klub::class, 'klub_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
