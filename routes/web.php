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
Route::get('/line','ChartController@line');
Route::get('/bar','ChartController@bar');
Route::get('/pie','ChartController@pie');
Route::get('/bubble','ChartController@bubble');
Route::post('/line','ChartController@line');
Route::post('/bar','ChartController@bar');
Route::post('/pie','ChartController@pie');
Route::post('/bubble','ChartController@bubble');
Route::get('/i','FilterInputController@index');
Route::view('/', 'welcome');
Route::post('/charts','ChartController@loadFiltered');
Route::get('/showCharts','ChartController@load');
Route::get('/meal','MealInputController@index');
Route::get('/event','UMEventController@index');
// Route::post('/showEvents','ChartController@loadFiltered');
Route::post('/checkEvents','ApiController@checkEvents');
Route::post('/viewEvents','ApiController@viewEvents');
Route::post('/checkMeals','MealInputController@checkMeals');
// Route::get('/viewEvents','ApiController@viewEvents');
