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

Route::get('/', function () {
    return view('homepage');
});


Route::group(['middleware' => ['web']], function () {
    Route::post('/validateLogin', ['as' => 'validateLogin', 'uses' => 'LoginController@validateLogin']);
    Route::get('/dashboard', ['middleware'=>'auth','as' => 'dashboard', 'uses' => 'Dashboard@index'])->middleware('auth');
    Route::post('/logout', ['middleware'=>'auth','as' => 'dashboard', 'uses' => 'LoginController@logout']);
    Route::get('/test', ['middleware'=>'auth','as' => 'test', 'uses' => 'LoginController@test']);
});
