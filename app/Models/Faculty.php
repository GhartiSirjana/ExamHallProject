<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mockery\Matcher\Subset;
use Symfony\Component\CssSelector\Node\FunctionNode;

class Faculty extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function department() {
        return $this->belongsTo(Department::class, 'department_id');
    }
    public function student()
    {
        return $this->hasMany(StudentManage::class, 'faculty_id');
    }
    public function subject()
    {
        return $this->hasMany(subject::class, 'faculty_id');
    }
    public function exam()
    {
        return $this->hasMany(exammanagement::class, 'faculty_id');
    }

}
