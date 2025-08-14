<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    public function stacks()
    {
        return $this->belongsToMany(Stack::class, 'experience_stacks');
    }
}
