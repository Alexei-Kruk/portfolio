<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
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
