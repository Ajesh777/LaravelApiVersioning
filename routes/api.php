<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



/* 6.6: Create a person
Route::get('/person', function(){
    $person = [
        'first_name' => 'AJ',
        'last_naem' => 'John'
    ];
    return $person;
});
// Create a person
use App\Person;
Route::get('/person/{person}',function(){
    return $person;
});
// 6.6: Create a person:
Route::get('/person/{person}', 'PersonController@show');
// 6.6: Create a person:
Route::apiResource('/person', 'Api\v1\PersonController');
*/

// 6.7: Create version 1 route prefix & create CRUD link
Route::prefix('v1')->group(function(){
    // 6: Create Routes for Article CRUD operations:
    // 6.1: Create the index Route:
    Route::get('articles', 'ArticleController@index');
    // 6.2: Route to Single Article:
    Route::get('article/{id}', 'ArticleController@show');
    // 6.3: Route to New Article:
    Route::post('article', 'ArticleController@store');
    // 6.4: Route to Update Article:
    Route::put('article', 'ArticleController@store');
    // 6.5: Route to Delete Article:
    Route::delete('article/{id}', 'ArticleController@destroy');
    // 6.6: Create CRUD link fror Person:
    Route::apiResource('/person', 'Api\v1\PersonController');
});

// 6.8: Create version 2 route prefix:
Route::prefix('v2')->group(function(){
    // 6.7: Create show link for Person:
    Route::apiResource('/person', 'Api\v2\PersonController')
        ->only('show');
});