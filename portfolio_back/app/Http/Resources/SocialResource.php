<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="Social",
 *     type="object",
 *     title="Social",
 *     description="A brief description about the social media.",
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="ID"
 *     ),
 *     @OA\Property(
 *         property="platform",
 *         type="string",
 *         description="Platform"
 *     ),
 *     @OA\Property(
 *         property="url",
 *         type="string",
 *         description="URL"
 *     ),
 *     @OA\Property(
 *         property="icon",
 *         type="string",
 *         description="Icon"
 *     )
 * )
 */
class SocialResource extends JsonResource
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
            'platform' => $this->platform,
            'url' => $this->url,
            'icon' => asset('storage/' . $this->icon) ? $this->icon : null,
        ];
    }
}
