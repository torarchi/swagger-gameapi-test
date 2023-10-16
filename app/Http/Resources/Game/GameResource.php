<?php

namespace App\Http\Resources\Game;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;



class GameResource extends JsonResource
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
            'description' => $this->description,
            'genre_id' => $this->genre_id,
            'genre_name' => $this->whenLoaded('genre', function () {
                return $this->genre->genre_name;
            }),
        ];
    }
}
