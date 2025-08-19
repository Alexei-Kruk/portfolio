<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="Hobby",
 *     type="object",
 *     title="Hobby",
 *     description="A brief description about the hobby.",
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="ID"
 *     ),
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         description="Name"
 *     ),
 *     @OA\Property(
 *         property="icon",
 *         type="string",
 *         description="Icon"
 *     )
 * )
 */
class HobbyResource extends JsonResource
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
            'name' => $this->name,
            'icon' => asset('storage/' . $this->icon) ? $this->icon : null,
        ];
    }
}
