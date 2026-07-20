<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CareerApplication extends Model
{
    protected $fillable = [
        'name',
        'qualification',
        'experience',
        'resume',
        'notes',
    ];

    protected $casts = [
        'experience' => 'decimal:1',
    ];
}

