<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experience extends Model
{
    use HasFactory;

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
