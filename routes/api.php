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

Route::post('/report', 'ReportAbuseController@submit');
Route::post('/contact', 'ContactController@submit');

Route::post('/user/register', 'UserController@register');
Route::post('/user/login', 'UserController@login');


Route::post('/alarms', 'AlarmController@create');
Route::get('/alarms', 'AlarmController@index');
Route::post('/timers', 'TimerController@create');