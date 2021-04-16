<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffManage extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id'); 
    }
    public function room()
    {
        return $this->hasMany(roommanagment::class, 'staff_id');
    }
}
