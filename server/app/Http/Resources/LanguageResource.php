<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="Language",
 *     type="object",
 *     title="Language",
 *     description="A brief description about the language.",
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="ID"
 *     ),
 *     @OA\Property(
 *         property="language",
 *         type="string",
 *         description="Language"
 *     ),
 *     @OA\Property(
 *         property="proficiency",
 *         type="string",
 *         description="Proficiency"
 *     )
 * )
 */
class LanguageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'language' => $this->language,
            'proficiency' => $this->proficiency,
        ];
    }
}
