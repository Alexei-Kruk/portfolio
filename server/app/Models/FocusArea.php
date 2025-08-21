<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FocusArea extends Model
{
    use HasFactory;

    protected $fillable = [
        'resume_id',
        'focus_areas',
    ];

    public function resume()
    {
        return $this->belongsTo(Resume::class);
    }
}
