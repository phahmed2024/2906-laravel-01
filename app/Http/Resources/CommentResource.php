<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'comment Id'=>$this->id,
            'comment'=>$this->comment,
            'commented on'=>$this->created_at,
            'replies' => ReplyResource::collection($this->replies),
            'reactions' => ReactionResource::make($this->reaction),
            'User'=>UserResource::make($this->user),
        ];
    }
}
