<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $fillable = [
        'username', 'address', 'email', 'password', 'repeat_password'
    ];
}
