<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SoftSkill extends Model
{
    use HasFactory;

    protected $fillable = [
        'resume_id',
        'name',
    ];

    public function resume()
    {
        return $this->belongsTo(Resume::class);
    }
}
