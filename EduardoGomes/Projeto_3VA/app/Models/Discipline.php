<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'subject',
        'cost',
        'weekday',
        'time_from',
        'time_to',
    ];
}
