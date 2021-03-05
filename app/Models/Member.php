<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'member';

    protected $fillable = [
        'room_id',
    ];

    public function member_detail()
    {
        return $this->hasOne(MemberDetail::class);
    }

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
}
