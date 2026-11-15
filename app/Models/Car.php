<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'type',
        'number of seats',
        'color',
        'number of car',
    ];
}
