<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReplyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'reply Id'=>$this->id,
            'reply'=>$this->reply,
            'replied on'=>$this->created_at,
            'User'=>UserResource::make($this->user),
        ];
    }
}
