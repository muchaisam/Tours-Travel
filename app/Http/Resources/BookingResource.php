<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'destination' => new DestinationResource($this->whenLoaded('destination')),
            'user_id' => $this->user_id,
            'travel_date' => $this->travel_date?->toDateString(),
            'guests' => $this->guests,
            'total_price' => $this->total_price,
            'status' => $this->status,
            'notes' => $this->notes,
            'created_at' => $this->created_at->toIso8601String(),
            'updated_at' => $this->updated_at->toIso8601String(),
        ];
    }
}
