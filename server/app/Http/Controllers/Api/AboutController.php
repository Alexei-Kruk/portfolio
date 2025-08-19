<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AboutResource;
use App\Models\About;
use OpenApi\Annotations as OA;

class AboutController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/about",
     *     summary="Get about page",
     *     tags={"Pages"},
     *     @OA\Response(
     *         response=200,
     *         description="About page data",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/About")
     *         )
     *     )
     * )
     */
    public function index()
    {
        return AboutResource::collection(About::all());
    }
}
