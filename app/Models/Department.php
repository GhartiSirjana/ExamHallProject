<?php

namespace App\Models;

use App\Models\Faculty;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_name', 'department_code', 'description'
    ];

    public function faculties() {
        return $this->hasMany(Faculty::class, 'department_id');
    }

    // Department has many faculties
    // Faculty belongs to Department
}
