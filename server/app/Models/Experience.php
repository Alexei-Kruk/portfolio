<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'company_name',
        'position',
        'short_description',
        'date_from',
        'date_to',
    ];

    public function stacks()
    {
        return $this->hasMany(Stack::class);
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
