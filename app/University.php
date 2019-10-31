<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $fillable = [
        "name_university",
        "description",
        "urlimage_logo",
        "urlimage_cover",
        "type",
    ];
    public function majors(){
        return $this->hasMany(\App\Major::class);
    }
}
