<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
    use Model;

    protected $fillable = [
        'description',
        'location',
        'email',
        'image',
    ];

    protected $casts = [
        'image' => 'array',
    ];
}
