<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function department() {
        return $this->belongsTo(Department::class, 'department_id');
    }
}
