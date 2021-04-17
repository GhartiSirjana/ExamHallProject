<?php

namespace App\Models;

use App\Http\Controllers\BlockController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roommanagment extends Model
{
    // single room 
    use HasFactory;
    // protected $guarded = [];
    protected $fillable = [ 'roomno', 'block_id', 'floor_id', 'capacity', 'rows', 'columns', 'staff_id'];

    public function block()
    {
        return $this->belongsTo(Block::class, "block_id");
    }
    public function floor()
    {
        return $this->belongsTo(Floor::class, "floor_id");
    }
    public function staff()
    {
        return $this->belongsTo(StaffManage::class, "staff_id");
    }
}
