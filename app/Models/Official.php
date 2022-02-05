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

    protected $table = 'officials';
    protected $guarded = array();

    public function storeData($input)
    {
        return static::create($input);
    }

    public function deleteData($id)
    {
        return static::find($id)->delete();
    }

    public function findData($id)
    {
        return static::find($id);
    }

    public function updateData($id, $input)
    {
        return static::find($id)->update($input);
    }
}
