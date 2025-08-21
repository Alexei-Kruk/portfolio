<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SoftwareSkill extends Model
{
    use HasFactory;

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
