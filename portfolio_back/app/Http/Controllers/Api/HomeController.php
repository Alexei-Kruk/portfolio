<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HomeResource;
use App\Models\Home;
use OpenApi\Annotations as OA;

class HomeController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/home",
     *     summary="Get home page",
     *     tags={"Pages"},
     *     @OA\Response(
     *         response=200,
     *         description="Home page data",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Home")
     *         )
     *     )
     * )
     */
    public function index()
    {
        return HomeResource::collection(Home::all());
    }
}
