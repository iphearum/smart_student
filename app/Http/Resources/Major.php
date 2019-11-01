<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Major extends JsonResource
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
          'name_major'=>$this->name_major,
          'urlimage_major'=>$this->urlimage_major,
          'description'=>$this->description
        ];
    }
}
