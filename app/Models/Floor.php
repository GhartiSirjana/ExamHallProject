<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function block()
    {
        return $this->belongsTo(Block::class, "floor_id");
    }
    public function room()
    {
        return $this->hasMany(roommanagment::class, "floor_id");
    }
}
