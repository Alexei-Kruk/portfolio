<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Social extends Model
{
    use HasFactory;

    protected $fillable = [
        'platform',
        'url',
        'icon'
    ];

    public function home()
    {
        return $this->belongsTo(Home::class);
    }
}
