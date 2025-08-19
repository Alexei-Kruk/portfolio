<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ResultResource;
use App\Models\Result;
use OpenApi\Annotations as OA;

class ResultController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/results",
     *     summary="Get all results",
     *     tags={"Components"},
     *     @OA\Response(
     *         response=200,
     *         description="List of results",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Result")
     *         )
     *     )
     * )
     */
    public function index()
    {
        return ResultResource::collection(Result::all());
    }
}
