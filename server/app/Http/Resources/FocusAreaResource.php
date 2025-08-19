<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="FocusArea",
 *     type="object",
 *     title="Focus Area",
 *     description="A brief description about the focus area.",
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="ID"
 *     ),
 *     @OA\Property(
 *         property="focus_areas",
 *         type="string",
 *         description="Focus areas"
 *     )
 * )
 */
class FocusAreaResource extends JsonResource
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
            'focus_areas' => $this->focus_areas,
        ];
    }
}
