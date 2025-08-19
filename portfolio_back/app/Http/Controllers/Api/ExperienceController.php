<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ExperienceResource;
use App\Models\Experience;
use OpenApi\Annotations as OA;

class ExperienceController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/experience",
     *     summary="Get experience page",
     *     tags={"Pages"},
     *     @OA\Response(
     *         response=200,
     *         description="Experience page data",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Experience")
     *         )
     *     )
     * )
     */
    public function index()
    {
        return ExperienceResource::collection(Experience::all());
    }

    /**
     * @OA\Get(
     *     path="/api/experience/{experience}",
     *     summary="Get experience by ID",
     *     tags={"Pages"},
     *     @OA\Parameter(
     *         name="experience",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Experience details",
     *         @OA\JsonContent(ref="#/components/schemas/Experience")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Experience not found"
     *     )
     * )
     */
    public function show(Experience $experience)
    {
        return new ExperienceResource($experience);
    }
}
