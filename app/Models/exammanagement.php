<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exammanagement extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function department()
    {
        return $this->belongsTo(department::class, 'department_id');
    }

    public function faculty()
    {
        return $this->belongsTo(faculty::class, 'faculty_id');
    }
    public function subject()
    {
        return $this->hasMany(subject::class);
    }
}
