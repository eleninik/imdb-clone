<?php

use Illuminate\Http\Request;
use App\Movie;

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

// Route::get('/movies', 'MoviesController@index');
// Route::get('/people', 'PeopleController@index');
// Route::get('/series', 'SeriesController@index');
// Route::get('/people/actors', 'ActorsController@index');


Route::get('/apiseed', 'Admin\ApiController@store');

