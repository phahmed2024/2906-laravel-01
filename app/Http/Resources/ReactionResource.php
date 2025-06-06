<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReactionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'reaction Id'=>$this->id,
            'reaction'=>$this->reaction,
            'reacted on'=>$this->created_at,
            'reaction_type'=>$this->reactionType
        ];
    }
}
