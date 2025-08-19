<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="SoftwareSkill",
 *     type="object",
 *     title="Software Skill",
 *     description="A brief description about the software skill.",
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="ID"
 *     ),
 *     @OA\Property(
 *         property="category",
 *         type="string",
 *         description="Category"
 *     ),
 *     @OA\Property(
 *         property="skills",
 *         type="string",
 *         description="Skills"
 *     )
 * )
 */
class SoftwareSkillResource extends JsonResource
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
            'category' => $this->category,
            'skills' => $this->skills,
        ];
    }
}
