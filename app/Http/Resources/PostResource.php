<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class  PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [    
            'user_id' => $this->user_id,
            'title' => $this->title,
            'description' => $this->description,
            'id' => $this->id,
            'user_info'=>[
                'id' => $this->user ? $this->user->id : 'null',
                'name' => $this->user ? $this->user->name : 'null',
                'email' =>  $this->user ? $this->user->email : 'null'
                
            ]
        ];
    }
}
