<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PersonResource;
use App\Http\Resources\PersonResourceCollection;
use App\Person;

class PersonController extends Controller
{
    /** 
     * 1: Show Person
     * 
     * @param Person $person
     * @return PersonResource
     */
    public function show(Person $person):PersonResource
    {
        //test:
        //dd($person);
        //return $person;
        return new PersonResource($person);
    }
    
    /**
     * 2: index
     * 
     * @return PersonResourceCollection
     */
    public function index():PersonResourceCollection
    {
        return new PersonResourceCollection(Person::paginate());
    }

    /** 
     * 2: Store Person
     * 
     * @param Request $request
     * @return PersonResource
     */
    public function store(Request $request)
    {
        //Validate Inputs
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'phone'      => 'required',
            'email'      => 'required',
            'city'       => 'required',
        ]);
        //Create Person
        $person = Person::create($request->all());
        return new PersonResource($person);
    }

    /** 
     * 3: Update  Person
     * 
     * @param Person $person
     * @param Request $request
     * @return PersonResource
     */
    public function update(Person $person, Request $request): PersonResource
    {
        //dd($request->all());
        //update Person:
        $person->update($request->all());
        return new PersonResource($person);
    }

    /**
     * 4: Delete Person
     * 
     * @param Person $person
     * @return PersonResource
     */
    public function destroy(Person $person) {
        $person->delete();
        //respond with empty json:
        //return response()->json;
        //respond with deleted content with delete msg:
        $person->message = 'Deleted';
        return new PersonResource($person);
    }
}

