<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function department() {
        return $this->belongsTo(Department::class);
    }

    public function faculty() {
        return $this->belongsTo(Faculty::class);

    }
    public function exam()
    {
        return $this->belongsTo(exammanagement::class);
    }
}
