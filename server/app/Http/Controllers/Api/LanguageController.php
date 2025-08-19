<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LanguageResource;
use App\Models\Language;
use OpenApi\Annotations as OA;

class LanguageController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/languages",
     *     summary="Get all languages",
     *     tags={"Components"},
     *     @OA\Response(
     *         response=200,
     *         description="List of languages",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Language")
     *         )
     *     )
     * )
     */
    public function index()
    {
        return LanguageResource::collection(Language::all());
    }
}
