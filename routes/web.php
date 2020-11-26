<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', 'RootController@home');

Auth::routes(['verify' => true]);


Route::get('/home', 'RootController@home');

Route::get('/matching','MatchingController@index')->middleware('verified');

Route::get('/user/{id}/match','MatchingController@result')->middleware('verified');

Route::get('/view_bothprofile', 'view_bothprofileController@index')->middleware('verified');


Route::get('/user/{id}/details','view_userprofileController@index')->middleware('verified');

Route::get('/user/{id}/message','MessageController@index')->middleware('verified');

Route::post('/user/{id}/send','MessageController@store')->middleware('verified');


Route::get('/user/update','UpdateController@index')->middleware('verified');

Route::post('/user/update_profile','UpdateController@update')->middleware('verified');

Route::get('/edit_bothprofile','edit_bothprofileController@index');



Route::post('/edit_profile','edit_bothprofileController@store');

Route::post('/search','SearchController@store');

Route::get('/message','MessageController@show')->middleware('verified');



