<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'member';

    protected $fillable = [
        'member_id',
        'room_id',
    ];

    public function member_detail()
    {
        return $this->hasOne(Member::class, 'member_id', 'member_id');
    }

    public function room()
    {
        return $this->hasOne(Room::class, 'room_id', 'room_id')
                    ->hasOne(Booking::class, 'room_id', 'room_id')
                    ->hasOne(Bill::class, 'room_id', 'room_id');
    }
}
