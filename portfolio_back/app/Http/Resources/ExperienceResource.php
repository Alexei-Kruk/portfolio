<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;
use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="Experience",
 *     type="object",
 *     title="Experience",
 *     description="A brief description about the experience.",
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="ID"
 *     ),
 *     @OA\Property(
 *         property="company_name",
 *         type="string",
 *         description="Company Name"
 *     ),
 *     @OA\Property(
 *         property="position",
 *         type="string",
 *         description="Position"
 *     ),
 *     @OA\Property(
 *         property="short_description",
 *         type="string",
 *         description="Short Description"
 *     ),
 *     @OA\Property(
 *         property="date_from",
 *         type="string",
 *         format="date",
 *         description="Date From"
 *     ),
 *     @OA\Property(
 *         property="date_to",
 *         type="string",
 *         format="date",
 *         description="Date To"
 *     ),
 *     @OA\Property(
 *         property="stacks",
 *         type="array",
 *         @OA\Items(ref="#/components/schemas/Stack")
 *     ),
 *     @OA\Property(
 *         property="results",
 *         type="array",
 *         @OA\Items(ref="#/components/schemas/Result")
 *     )
 * )
 */
class ExperienceResource extends JsonResource
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
            'company_name' => $this->company_name,
            'position' => $this->position,
            'short_description' => $this->short_description,
            'date_from' => Carbon::parse($this->date_from)->translatedFormat('Y'),
            'date_to' => Carbon::parse($this->date_to)->translatedFormat('Y'),
            'stacks' => StackResource::collection($this->stacks)->toArray($request),
            'results' => ResultResource::collection($this->results)->toArray($request),
        ];
    }
}
