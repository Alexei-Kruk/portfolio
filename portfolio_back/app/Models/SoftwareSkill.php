<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SoftwareSkill extends Model
{
    protected $fillable = [
        'resume_id',
        'category',
        'skills',
    ];

    public function resume()
    {
        return $this->belongsTo(Resume::class);
    }
}
