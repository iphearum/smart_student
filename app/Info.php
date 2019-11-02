<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = [
        'websit',
        'phone_number',
        'university_email',
        'street',
        'direction',
        'city',
        'university_id'
    ];
}
