<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="Project",
 *     type="object",
 *     title="Project",
 *     description="A brief description about the project.",
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="ID"
 *     ),
 *     @OA\Property(
 *         property="title",
 *         type="string",
 *         description="Title"
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string",
 *         description="Description"
 *     ),
 *     @OA\Property(
 *         property="stack",
 *         type="array",
 *         @OA\Items(type="string"),
 *         description="Stack"
 *     ),
 *     @OA\Property(
 *         property="link",
 *         type="string",
 *         description="Link"
 *     ),
 *     @OA\Property(
 *         property="image",
 *         type="string",
 *         description="Image"
 *     )
 * )
 */
class ProjectResource extends JsonResource
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
            'title' => $this->title,
            'description' => $this->description,
            'stack' => $this->stack,
            'link' => $this->link,
            'image' => asset('storage/' . $this->image) ? $this->image : null,
        ];
    }
}
