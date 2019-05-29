<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    // make it fillable
    protected $fillable = [
        'first_name',
        'last_name', 
        'phone',     
        'email',     
        'city',     
    ];
}
