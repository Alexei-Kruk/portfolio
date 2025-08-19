<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FocusAreaResource;
use App\Models\FocusArea;
use OpenApi\Annotations as OA;

class FocusAreaController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/focus-areas",
     *     summary="Get focus areas",
     *     tags={"Components"},
     *     @OA\Response(
     *         response=200,
     *         description="Focus areas data",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/FocusArea")
     *         )
     *     )
     * )
     */
    public function index()
    {
        return FocusAreaResource::collection(FocusArea::all());
    }
}
