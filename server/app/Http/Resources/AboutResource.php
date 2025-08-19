<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="About",
 *     type="object",
 *     title="About",
 *     description="A brief description about the individual.",
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="ID"
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string",
 *         description="Description"
 *     ),
 *     @OA\Property(
 *         property="location",
 *         type="string",
 *         description="Location"
 *     ),
 *     @OA\Property(
 *         property="email",
 *         type="string",
 *         description="Email"
 *     ),
 *     @OA\Property(
 *         property="image",
 *         type="string",
 *         description="Image"
 *     )
 * )
 */
class AboutResource extends JsonResource
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
            'description' => $this->description,
            'location' => $this->location,
            'email' => $this->email,
            'image' => asset('storage/' . $this->image) ? $this->image : null,
        ];
    }
}
