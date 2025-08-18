<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SoftwareSkillResource;
use App\Models\SoftwareSkill;

class SoftwareSkillController extends Controller
{
    public function index()
    {
        return SoftwareSkillResource::collection(SoftwareSkill::all());
    }

    public function show(SoftwareSkill $softwareSkills)
    {
        return new SoftwareSkillResource($softwareSkills);
    }
}
