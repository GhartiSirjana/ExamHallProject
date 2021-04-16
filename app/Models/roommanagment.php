<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roommanagment extends Model
{
    use HasFactory;

    public function floor()
    {
        return $this->hasMany(Floor::class, "floor_id");
    }
}
