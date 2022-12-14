<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    // public function toArray($request)
    // {
    //     return parent::toArray($request);
    // }

    public function toArray($request)
    {
        return[
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'date'=> $this->date,
            'images' => $this->images,
            'slideimages' => $this->slideimages,
            'slideshow'=>$this->slideshow,
            'status' => $this->status,
            'admin' => new UserResource($this->user),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
