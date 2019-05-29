<?php

namespace App\Http\Controllers\Api\v2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\v2\PersonResource;
use App\Person;

class PersonController extends Controller
{
    /**
     * 1: Show Person
     * 
     * @param Person $person
     * @return PersonResource
     */
    public function show(Person $person): PersonResource {
        return new PersonResource($person);
    }
}
