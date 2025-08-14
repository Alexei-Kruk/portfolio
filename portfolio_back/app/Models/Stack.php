<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stack extends Model
{
    public function experiences()
    {
        return $this->belongsToMany(Experience::class, 'experience_stacks');
    }
}
