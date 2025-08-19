<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HobbyResource;
use App\Models\Hobby;
use OpenApi\Annotations as OA;

class HobbyController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/hobbies",
     *     summary="Get hobbies",
     *     tags={"Components"},
     *     @OA\Response(
     *         response=200,
     *         description="Hobbies data",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Hobby")
     *         )
     *     )
     * )
     */
    public function index()
    {
        return HobbyResource::collection(Hobby::all());
    }
}
