<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentManage extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function faculties()
    {
        return $this->belongsTo(Faculty::class, 'faculties_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
}
