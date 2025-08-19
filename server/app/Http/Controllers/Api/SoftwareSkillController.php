<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SoftwareSkillResource;
use App\Models\SoftwareSkill;
use OpenApi\Annotations as OA;

class SoftwareSkillController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/software-skills",
     *     summary="Get all software skills",
     *     tags={"Components"},
     *     @OA\Response(
     *         response=200,
     *         description="List of software skills",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/SoftwareSkill")
     *         )
     *     )
     * )
     */
    public function index()
    {
        return SoftwareSkillResource::collection(SoftwareSkill::all());
    }
}
