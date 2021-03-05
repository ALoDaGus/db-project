<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Room extends Model
{
    use HasFactory;

    protected $table = 'room';
    
    protected $fillable = [
        'room_id',
        'room_price',
        'rental_status',
    ];

    public function bill()
    {
        return $this->hasMany(Bill::class);
    }

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
}
