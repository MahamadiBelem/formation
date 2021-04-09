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


Route::get('/villages','VillageController@index');
Route::post('/save-villages','VillageController@store');
Route::post('/update-villages/{id}','VillageController@update');
Route::get('/delete-villages/{id}','VillageController@destroy');


Route::get('/regimes','RegimeController@index');
Route::post('/save-regime','RegimeController@store');
Route::post('/update-regime','RegimeController@update');
Route::get('/delete-regime/{id}','RegimeController@destroy');

Route::get('/specialites','SpecialiteController@index');
Route::post('/save-specialite','SpecialiteController@store');
Route::post('/update-specialite','SpecialiteController@update');

Route::get('/delete-specialite/{id}','SpecialiteController@destroy');

Route::get('/contributions','ContributionController@index');
Route::post('/save-contribution','ContributionController@store');
Route::post('/update-contribution','ContributionController@update');

Route::get('/delete-contribution/{id}','ContributionController@destroy');

Route::get('/public-cible','PublicCibleController@index');
Route::post('/save-public-cible','PublicCibleController@store');
Route::post('/update-public-cible','PublicCibleController@update');

Route::get('/delete-public-cible/{id}','PublicCibleController@destroy');

Route::get('/niveau-recrutement','NiveauRecrutementController@index');
Route::post('/save-niveau-recrutement','NiveauRecrutementController@store');
Route::post('/update-niveau-recrutement','NiveauRecrutementController@update');

Route::get('/delete-niveau-recrutement/{id}','NiveauRecrutementController@destroy');

Route::get('/approche-pedagogique','ApprochePedagogiqueController@index');
Route::post('/save-approche-pedagogique','ApprochePedagogiqueController@store');
