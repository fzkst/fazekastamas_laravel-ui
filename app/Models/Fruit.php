<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\Flysystem\Visibility;

class Fruit extends Model
{
    use HasFactory;

    protected $visible = [
        'id',
        'name',
        'color',
        'taste',
        'weight',
        'purch_date'
    ];

    protected $fillable = [
        'name',
        'color',
        'taste',
        'weight',
        'purch_date'
    ];

}
