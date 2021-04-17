<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seatallocation extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function exam()
    {
        return $this->hasMany(exammanagement::class);
    }
    public function room()
    {
        return $this->hasMany(roommanagment::class);
    }
}
