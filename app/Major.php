<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $fillable = [
        'name_major',
        'description',
        'urlimage_major',
        'university_id'
    ];
    public function university(){
        return $this->belongsTo(\App\University::class);
    }
    public function subjects(){
        return $this->hasMany(\App\Subject::class);
    }
}
