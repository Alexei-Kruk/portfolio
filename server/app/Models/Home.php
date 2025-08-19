<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
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
