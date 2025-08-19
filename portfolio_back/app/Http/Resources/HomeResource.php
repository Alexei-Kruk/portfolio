<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="Home",
 *     type="object",
 *     title="Home",
 *     description="A brief description about the home.",
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="ID"
 *     ),
 *     @OA\Property(
 *         property="first_name",
 *         type="string",
 *         description="First Name"
 *     ),
 *     @OA\Property(
 *         property="last_name",
 *         type="string",
 *         description="Last Name"
 *     ),
 *     @OA\Property(
 *         property="position",
 *         type="string",
 *         description="Position"
 *     ),
 *     @OA\Property(
 *         property="phone",
 *         type="string",
 *         description="Phone"
 *     )
 * )
 */
class HomeResource extends JsonResource
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
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'position' => $this->position,
            'phone' => $this->phone,
        ];
    }
}
