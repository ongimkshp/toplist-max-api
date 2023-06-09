<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nickname' => $this->nickname,
            'emailAddress' => $this->email_address,
            'content' => $this->content,
            'place' => ['id' => $this->massage_place_id, 'name' => $this->massagePlace->name],
            'createdAt' => $this->created_at->format('Y-m-d H:i:s'),
        ];
    }
}
