<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SoftSkillResource;
use App\Models\SoftSkill;

class SoftSkillController extends Controller
{
    public function index()
    {
        return SoftSkillResource::collection(SoftSkill::all());
    }

    public function show(SoftSkill $softSkill)
    {
        return new SoftSkillResource($softSkill);
    }
}
