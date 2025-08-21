<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Home extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'position',
        'phone',
    ];

    public function socials()
    {
        return $this->hasMany(Social::class);
    }
}
