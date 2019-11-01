<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InUniversity extends JsonResource
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
            'id'=>$this->id,
            'name_university'=>$this->name_university,
            'description'=>$this->description,
            'major'=> [
                'name_major'=>$this->name_major,
                'urlimage_major'=>$this->urlimage_major,
                'description'=>$this->description
            ]
        ];
    }
}
