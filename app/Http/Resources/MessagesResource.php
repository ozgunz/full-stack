<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MessagesResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'        =>  $this->id,
            'subject'   =>  $this->subject,
            'content'   =>  $this->content,
            'isRead'    =>  $this->is_read,
            'userId'    =>  $this->user_id
        ];
    }
}
