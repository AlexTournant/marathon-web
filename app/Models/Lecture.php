<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Lecture extends Pivot
{
    use HasFactory;

    protected $casts = [
        'sequence' => 'array'
    ];
}
