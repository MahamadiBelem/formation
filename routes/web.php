<?php

use Illuminate\Support\Facades\Route;

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
    return view('acceuil');
});
Route::get('/formation',function(){
return view('acceuilformation');
});

Route::get('/regions','RegionsController@index');

Route::post('/save-region','RegionsController@store');
Route::post('/update-region','RegionsController@update');
Route::get('/delete-region/{id}','RegionsController@destroy');

Route::get("/provinces",'ProvinceController@index');
Route::post('/save-provinces','ProvinceController@store');
Route::post('/update-provinces/{id}','ProvinceController@update');
Route::get('/delete-provinces/{id}','ProvinceController@delete');

Route::get('/communes','CommunesController@index');
Route::post('save-communes','CommunesController@store');
Route::post('/update-communes/{id}','CommunesController@update');
Route::get('/delete-communes/{id}','CommunesController@destroy');
