<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opera extends Model
{
    use HasFactory;

    protected $visible = [
        'id',
        'name',
        'country',
        'city',
        'const_time',
        'seats_count',
        'ratings'
    ];

    protected $fillable = [
        'name',
        'country',
        'city',
        'const_time',
        'seats_count',
        'ratings'
    ];
}
