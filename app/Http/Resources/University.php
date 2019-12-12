<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Major as MajorResource;
class University extends JsonResource
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
            'major'=>[
                'name_major'=>$this->name_major,
                'urlimage_major'=>$this->urlimage_major,
                'type_major'=>$this->type_major,
            ]
            // 'major'=> new MajorResource($this->id)
        ];
    }
}
