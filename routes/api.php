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
Route::post('/register', 'API\Auth\RegisterController@register');
Route::post('/login', 'API\Auth\LoginController@login');
Route::post('/refresh', 'API\Auth\LoginController@refresh');

Route::group(['middleware'=>['auth:api']], function() {
    Route::get('/user', function (Request $request) {
        return $request->user()->email;
    });

    Route::post('/logout', 'API\Auth\LoginController@logout');

    Route::resource('/note', 'API\NoteController');
});

