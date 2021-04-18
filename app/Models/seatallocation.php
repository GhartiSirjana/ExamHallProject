<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seatallocation extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function selectedRooms() {
        return $this->belongsToMany(roommanagment::class);
    }

    public function selectedExams() {
        return $this->belongsToMany(exammanagement::class);
    }
}
