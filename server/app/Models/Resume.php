<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Resume extends Model
{
    use HasFactory;

    protected $fillable = [
        //
    ];

    public function softwareSkills()
    {
        return $this->hasMany(SoftwareSkill::class);
    }

    public function languages()
    {
        return $this->hasMany(Language::class);
    }

    public function hobbies()
    {
        return $this->hasMany(Hobby::class);
    }

    public function softSkills()
    {
        return $this->hasMany(SoftSkill::class);
    }

    public function focusAreas()
    {
        return $this->hasMany(FocusArea::class);
    }
}
