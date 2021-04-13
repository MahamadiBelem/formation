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
Route::post('/update-approche-pedagogique','ApprochePedagogiqueController@update');
Route::get('/delete-approche-pedagogique/{id}','ApprochePedagogiqueController@destroy');


Route::get('/domaine-formation','DomaineFormationController@index');
Route::post('/save-domaine-formation','DomaineFormationController@store');
Route::post('/update-domaine-formation','DomaineFormationController@update');
Route::get('/delete-domaine-formation/{id}','DomaineFormationController@destroy');

Route::get('/type-formation','TypeFormationController@index');
Route::post('/save-type-formation','TypeFormationController@store');
Route::post('/update-type-formation','TypeFormationController@update');
Route::get('/delete-type-formation/{id}','TypeFormationController@destroy');

Route::get('/niveau-instructions','NiveauInstructionController@index');
Route::post('/save-niveau-instructions','NiveauInstructionController@store');
Route::post('/update-niveau-instructions','NiveauInstructionController@update');
Route::get('/delete-niveau-instructions/{id}','NiveauInstructionController@destroy');


Route::get('/promoteurs','PromoteurController@index');
Route::post('/save-promoteurs','PromoteurController@store');
Route::post('/update-promoteurs/{id}','PromoteurController@update');
Route::get('/delete-promoteurs/{id}','PromoteurController@destroy');

Route::get('/gestionnaires','GestionnaireController@index');
Route::post('/save-gestionnaires','GestionnaireController@store');
Route::post('/update-gestionnaires/{id}','GestionnaireController@update');
Route::get('/delete-gestionnaires/{id}','GestionnaireController@destroy');

Route::get('/centre-formation','CentreFormationController@index');
Route::get('/display-centre-formation-form','CentreFormationController@create');
Route::post('/save-centre-formation','CentreFormationController@store');
Route::get('/update-centre-formation/{id}','CentreFormationController@edit');
Route::post('/save-update-centre-formation/{id}','CentreFormationController@update');
Route::get('/centre-formation-view-detail/{id}','CentreFormationController@show');
Route::get('/delete-centre/{id}','CentreFormationController@destroy');

Route::get('/formateurs','FormateurController@index');
Route::post('/save-formateur','FormateurController@store');
Route::post('/update-formateur/{id}','FormateurController@update');
Route::get('/delete-formateur/{id}','FormateurController@destroy');

Route::get('/source-financement','SourceFinancementController@index');
Route::post('/save-source-financement','SourceFinancementController@store');
Route::post('/update-source-financement/{id}','SourceFinancementController@update');
Route::get('/delete-source-financement/{id}','SourceFinancementController@destroy');

Route::get('/formations','FormationController@index');
Route::post('/save-formations','FormationController@store');
Route::post('/update-formations/{id}','FormationController@update');
Route::get('/delete-formations/{id}','FormationController@destroy');

Route::get('/apprenants','ApprenantController@index');
Route::get('/display-apprenant-form','ApprenantController@create');
Route::post('/save-apprenant','ApprenantController@store');
Route::get('/update-apprenant-view-form/{id}','ApprenantController@edit');
Route::post('/update-apprenant/{id}','ApprenantController@update');
Route::get('/delete-apprenant/{id}','ApprenantController@destroy');
Route::get('/apprenant-view-detail/{id}','ApprenantController@show');

Route::get('/inscription','AffecterApprenantController@index');
Route::get('/display-inscription-form','AffecterApprenantController@create');
Route::post('/save-inscription','AffecterApprenantController@store');
Route::get('/update-inscription-view-form/{id}','AffecterApprenantController@edit');
Route::post('/update-inscription/{id}','AffecterApprenantController@update');
Route::get('/delete-inscription/{id}','AffecterApprenantController@destroy');

Route::get('/affectation-formateur','AffecteFormateurController@index');
Route::post('/save-affectation-formateur','AffecteFormateurController@store');
Route::post('/update-affectation-formateur/{id}','AffecteFormateurController@update');
Route::get('/delete-affectation-formateur/{id}','AffecteFormateurController@destroy');

Route::get('/affectation-formation','AffecteFormationController@index');
Route::post('/save-affectation-formation','AffecteFormationController@store');
Route::post('/update-affectation-formation/{id}','AffecteFormationController@update');
Route::get('/delete-affectation-formation/{id}','AffecteFormationController@destroy');

Route::get('/kits','KitsController@index');
Route::post('/save-kits','KitsController@store');
Route::post('/update-kits/{id}','KitsController@update');
Route::get('/delete-kits/{id}','KitsController@destroy');


Route::get('/domaine-installation','DomaineInstallationController@index');
Route::post('/save-domaine-installation','DomaineInstallationController@store');
Route::post('/update-domaine-installation/{id}','DomaineInstallationController@update');
Route::get('/delete-domaine-installation/{id}','DomaineInstallationController@destroy');