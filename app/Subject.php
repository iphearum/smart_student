<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name_subject',
        'description',
        'majors_id'
    ];
    public function major(){
        return $this->belongsTo(\App\Majors::class);
    }
    public function majors(){
        return $this->belongsTo(\App\Majors::class);
    }
}
