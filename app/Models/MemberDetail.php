<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberDetail extends Model
{
    use HasFactory;

    protected $table = 'member_detail';

    protected $fillable = [
        'member_id',
        'first_name',
        'last_name',
        'gender',
        'tel_no',
        'email',
        'address',
    ];
}
