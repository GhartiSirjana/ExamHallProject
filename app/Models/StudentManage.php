<?php

namespace App\Models;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\College;
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

    public function college()
    {
        return $this->belongsTo(College::class, 'college_id');
    }
}
