<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [

        'name',

        'start_date',

        'end_date',

        'description',

        'status',

        'photo',

        'budget',

        'estimated_hours',

        'tags',

        'progress',

    ];
}
