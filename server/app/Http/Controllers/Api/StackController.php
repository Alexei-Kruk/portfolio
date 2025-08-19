<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StackResource;
use App\Models\Stack;
use OpenApi\Annotations as OA;

class StackController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/stack",
     *     summary="Get all stack",
     *     tags={"Components"},
     *     @OA\Response(
     *         response=200,
     *         description="List of stack",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Stack")
     *         )
     *     )
     * )
     */
    public function index()
    {
        return StackResource::collection(Stack::all());
    }
}
