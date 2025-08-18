<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

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
