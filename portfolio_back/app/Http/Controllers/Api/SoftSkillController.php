<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SoftSkillResource;
use App\Models\SoftSkill;
use OpenApi\Annotations as OA;

class SoftSkillController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/soft-skills",
     *     summary="Get all soft skills",
     *     tags={"Components"},
     *     @OA\Response(
     *         response=200,
     *         description="List of soft skills",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/SoftSkill")
     *         )
     *     )
     * )
     */
    public function index()
    {
        return SoftSkillResource::collection(SoftSkill::all());
    }
}
