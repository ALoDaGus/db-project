<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $table = 'bill';

    protected $fillable = [
        'member_id',
        'room_id',
        'month_routine',
        'net_summary',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

}
