<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Language extends Model
{
    use HasFactory;

    protected $fillable = [
        'resume_id',
        'language',
        'proficiency',
    ];

    public function resume()
    {
        return $this->belongsTo(Resume::class);
    }
}
