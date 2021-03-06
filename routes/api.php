<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('login', 'AuthController@login');
Route::post('logout', 'AuthController@logout');
Route::post('refresh', 'AuthController@refresh');
Route::post('me', 'AuthController@me');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::group(['prefix' => 'teachers'], function() {
        Route::get('search', "TeacherController@search");
        Route::get('{teacherId}', "TeacherController@getProfile");
    });

    Route::group(['prefix' => 'search-areas'], function() {
        Route::get('/', "SearchAreasController@list");
    });
});
