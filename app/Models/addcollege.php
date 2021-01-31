<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addcollege extends Model
{
    protected $fillable = [
        'collegename','address', 'description', 'action'
    ];
}
