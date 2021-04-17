<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Block extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function floor()
    {
        return $this->hasMany(Floor::class, "block_id");
    }

}
