<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SocialResource;
use App\Models\Social;
use OpenApi\Annotations as OA;

class SocialController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/socials",
     *     summary="Get all socials",
     *     tags={"Components"},
     *     @OA\Response(
     *         response=200,
     *         description="List of socials",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Social")
     *         )
     *     )
     * )
     */
    public function index()
    {
        return SocialResource::collection(Social::all());
    }
}
