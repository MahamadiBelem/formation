<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cooperatives\AcceuilCooperativeController;
use App\Http\Controllers\AffectationController;
use App\Http\Livewire\ApprenantsDashboard;
use App\Models\Provinces;
use App\Models\Communes;
use App\Models\Villages;
use App\Models\Regions;
use App\Http\Controllers\Auth\ForgotPasswordController;
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

Auth::routes();

Route::middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('acceuil');
    });
    Route::get('/formation','FormationHomeController@index');

    Route::get('/amenagements','RegionsController@index');

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

    //

    Route::get('/formationcontinue','FormationContinueController@index');
    Route::post('/save-formationcontinue','FormationContinueController@store');
    Route::post('/update-formationcontinue/{id}','FormationContinueController@update');
    Route::get('/delete-formationcontinue/{id}','FormationContinueController@destroy');


    Route::get('/formationcarte','FormationCarteController@index');
    Route::post('/save-formationcarte','FormationCarteController@store');
    Route::post('/update-formationcarte/{id}','FormationCarteController@update');
    Route::get('/delete-formationcarte/{id}','FormationCarteController@destroy');


    Route::get('/formationinitiale','FormationInitialeController@index');
    Route::post('/save-formationinitiale','FormationInitialeController@store');
    Route::post('/update-formationinitiale/{id}','FormationInitialeController@update');
    Route::get('/delete-formationinitiale/{id}','FormationInitialeController@destroy');
    


    Route::get('/apprenants','ApprenantController@index');
    Route::get('/display-apprenant-form','ApprenantController@create');
    Route::post('/save-apprenant','ApprenantController@store');
    Route::get('/update-apprenant-view-form/{id}','ApprenantController@edit');
    Route::post('/update-apprenant/{id}','ApprenantController@update');
    Route::get('/delete-apprenant/{id}','ApprenantController@destroy');
    Route::get('/apprenant-view-detail/{id}','ApprenantController@show');

    Route::get('/affectation-kit','AffectationController@index');
    Route::post('/save-affectation-kit','AffectationController@store');
    Route::post('/update-affectation-kit/{id}','AffectationController@update');
    Route::get('/delete-affectation-kit/{id}','AffectationController@destroy');

    Route::get('/module','ModuleController@index');
    Route::post('/save-module','ModuleController@store');
    Route::post('/update-module/{id}','ModuleController@update');
    Route::get('/delete-module/{id}','ModuleController@destroy');


    Route::get('/projet-installations','ProjetInstallationsController@index');
    Route::post('/save-projet-installations','ProjetInstallationsController@store');
    Route::post('/update-projet-installations/{id}','ProjetInstallationsController@update');
    Route::get('/delete-projet-installations/{id}','ProjetInstallationsController@destroy');


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


    Route::get('/affectation-module','AffecterModuleController@index');
    Route::post('/save-affectation-module','AffecterModuleController@store');
    Route::post('/update-affectation-module/{id}','AffecterModuleController@update');
    Route::get('/delete-affectation-module/{id}','AffecterModuleController@destroy');

    Route::get('/affectation-formation','AffecteFormationController@index');
    Route::post('/save-affectation-formation','AffecteFormationController@store');
    Route::post('/update-affectation-formation/{id}','AffecteFormationController@update');
    Route::get('/delete-affectation-formation/{id}','AffecteFormationController@destroy');

    // MAJ

    Route::get('/affectation-formationinitiale','AffecterFormationInitialeController@index');
    Route::post('/save-affectation-formationinitiale','AffecterFormationInitialeController@store');
    Route::post('/update-affectation-formationinitiale/{id}','AffecterFormationInitialeController@update');
    Route::get('/delete-affectation-formationinitiale/{id}','AffecterFormationInitialeController@destroy');

    Route::get('/affectation-formationcontinue','AffecterFormationContinueController@index');
    Route::post('/save-affectation-formationcontinue','AffecterFormationContinueController@store');
    Route::post('/update-affectation-formationcontinue/{id}','AffecterFormationContinueController@update');
    Route::get('/delete-affectation-formationcontinue/{id}','AffecterFormationContinueController@destroy');

    Route::get('/affectation-formationcarte','AffecterFormationCarteController@index');
    Route::post('/save-affectation-formationcarte','AffecterFormationCarteController@store');
    Route::post('/update-affectation-formationcarte/{id}','AffecterFormationCarteController@update');
    Route::get('/delete-affectation-formationcarte/{id}','AffecterFormationCarteController@destroy');

  /*  Route::get('/kits','KitsController@index');
    Route::post('/save-kits','KitsController@store');
    Route::post('/update-kits/{id}','KitsController@update');
    Route::get('/delete-kits/{id}','KitsController@destroy');*/

    // this for type kit add newly
    Route::get('/type-kits','KitsController@index');
    Route::post('/save-type-kits','KitsController@store');
    Route::post('/update-type-kits/{id}','KitsController@update');
    Route::get('/delete-type-kits/{id}','KitsController@destroy');


    Route::get('/domaine-installation','DomaineInstallationController@index');
    Route::get('/display-domaine-installation-form','DomaineInstallationController@create');
    Route::post('/save-domaine-installation','DomaineInstallationController@store');
    Route::get('/display-domaine-installation-update-form/{id}','DomaineInstallationController@edit');
    Route::post('/update-domaine-installation/{id}','DomaineInstallationController@update');
    Route::get('/delete-domaine-installation/{id}','DomaineInstallationController@destroy');


    Route::get('/installation','InstallationsController@index');
    Route::get('/display-installation-form','InstallationsController@create');
    Route::post('/save-installation','InstallationsController@store');
    Route::get('/delete-installation/{id}','InstallationsController@destroy');
    Route::post('/update-installation/{id}','InstallationsController@update');
    
    /*Route::get('/inscription','AffecterApprenantController@index');
    Route::get('/display-inscription-form','AffecterApprenantController@create');
    Route::post('/save-inscription','AffecterApprenantController@store');
    Route::get('/update-inscription-view-form/{id}','AffecterApprenantController@edit');
    Route::post('/update-inscription/{id}','AffecterApprenantController@update');
    Route::get('/delete-inscription/{id}','AffecterApprenantController@destroy');*/

    Route::get('/fin-formation','FinInstallationController@index');
    Route::get('/display-fin-formation-form','FinInstallationController@create');
    Route::post('/save-fin-formation','FinInstallationController@store');
    Route::get('/delete-fin-formation/{id}','FinInstallationController@destroy');
    Route::get('/users','UsermanagerController@index');
    
    Route::get('/register-user-form','UsermanagerController@create');
    Route::post('/register-user','UsermanagerController@store');
    Route::get('/reset-password-by-admin/{id}','UsermanagerController@displaypasswordupdate');
    Route::post('/update-password/{id}','UsermanagerController@updateprocesspassword');
    Route::get('/reset-role-byadmin/{id}','RolesController@updateroles');
    Route::post('/update-role-process/{id}','RolesController@processroleupdate');
    Route::get('/user-password-update-view','UsermanagerController@updateuserpassword');
    Route::post('/user-password-update-process/{id}','UsermanagerController@userupdateprocesspassword');

    Route::get('forget-password', [ForgotPasswordController::class, 'ForgetPassword'])->name('ForgetPasswordGet');
    Route::post('forget-password', [ForgotPasswordController::class, 'ForgetPasswordStore'])->name('ForgetPasswordPost');


    // route cooperatives






Route::get('/cooperatives', [AcceuilCooperativeController::class, 'index']);

Route::get('/users', 'UsermanagerController@index');
Route::get('/register-user-form', 'UsermanagerController@create');
Route::post('/register-user', 'UsermanagerController@store');
Route::get('/reset-password-by-admin/{id}', 'UsermanagerController@displaypasswordupdate');
Route::post('/update-password/{id}', 'UsermanagerController@updateprocesspassword');
Route::get('/reset-role-byadmin/{id}', 'RolesController@updateroles');
Route::post('/update-role-process/{id}', 'RolesController@processroleupdate');
Route::get('/user-password-update-view', 'UsermanagerController@updateuserpassword');
Route::post('/user-password-update-process/{id}', 'UsermanagerController@userupdateprocesspassword');



Route::get('/formejuridique', 'FormeJuridiqueController@index');
Route::post('/save-formejuridique', 'FormeJuridiqueController@store');
Route::post('/update-formejuridique', 'FormeJuridiqueController@update');
Route::get('/delete-formejuridique/{id}', 'FormeJuridiqueController@destroy');


Route::get('/typeorganisation', 'TypeOrganisationController@index');
Route::post('/save-typeorganisation', 'TypeOrganisationController@store');
Route::post('/update-typeorganisation', 'TypeOrganisationController@update');
Route::get('/delete-typeorganisation/{id}', 'TypeOrganisationController@destroy');

Route::get('/genre', 'GenreController@index');
Route::post('/save-genre', 'GenreController@store');
Route::post('/update-genre', 'GenreController@update');
Route::get('/delete-genre/{id}', 'GenreController@destroy');


Route::get('/cooperative', 'CooperativeController@index');
Route::get('/display-cooperative-form', 'CooperativeController@create');
Route::post('/save-cooperative', 'CooperativeController@store');
Route::get('/update-cooperative/{id}', 'CooperativeController@edit');
Route::post('/save-update-cooperative/{id}', 'CooperativeController@update');
Route::get('/cooperative-view-detail/{id}', 'CooperativeController@show');
Route::get('/delete-cooperative/{id}', 'CooperativeController@destroy');
Route::get('/export_csv', 'CooperativeController@exportcsv');
Route::get('/export_excel', 'CooperativeController@exportexcel');

Route::get('/fonctionementorganecooperative', 'FonctionementOrganeCooperativeController@index');
Route::post('/save-fonctionementorganecooperative', 'FonctionementOrganeCooperativeController@store');
Route::post('/update-fonctionementorganecooperative/{id}', 'FonctionementOrganeCooperativeController@update');
Route::get('/delete-fonctionementorganecooperative/{id}', 'FonctionementOrganeCooperativeController@destroy');
Route::get('/export_csvfoc', 'FonctionementOrganeCooperativeController@exportcsv');
Route::get('/export_excelfoc', 'FonctionementOrganeCooperativeController@exportexcel');


Route::get('/organecontrole', 'OrganeControleController@index');
Route::post('/save-organecontrole', 'OrganeControleController@store');
Route::post('/update-organecontrole/{id}', 'OrganeControleController@update');
Route::get('/delete-organecontrole/{id}', 'OrganeControleController@destroy');
Route::get('/export_csvoc', 'OrganeControleController@exportcsv');
Route::get('/export_exceloc', 'OrganeControleController@exportexcel');

Route::get('/organegestion', 'OrganeGestionController@index');
Route::post('/save-organegestion', 'OrganeGestionController@store');
Route::post('/update-organegestion/{id}', 'OrganeGestionController@update');
Route::get('/delete-organegestion/{id}', 'OrganeGestionController@destroy');
Route::get('/export_csvog', 'OrganeGestionController@exportcsv');
Route::get('/export_excelog', 'OrganeGestionController@exportexcel');

Route::get('/secretariatexecutif', 'SecretariatExecutifController@index');
Route::post('/save-secretariatexecutif', 'SecretariatExecutifController@store');
Route::post('/update-secretariatexecutif/{id}', 'SecretariatExecutifController@update');
Route::get('/delete-secretariatexecutif/{id}', 'SecretariatExecutifController@destroy');
Route::get('/export_csvse', 'SecretariatExecutifController@exportcsv');
Route::get('/export_excelse', 'SecretariatExecutifController@exportexcel');


Route::get('/regionsc', 'RegionscController@index');
Route::post('/save-regionc', 'RegionscController@store');
Route::post('/update-regionc', 'RegionscController@update');
Route::get('/delete-regionc/{id}', 'RegionscController@destroy');

Route::get('/statistiques', 'StatistiqueController@index');
Route::post('/search-statisques', 'StatistiqueController@store');

Route::get('/statistiquesa', 'StatistitiqueaController@index');


// TEST DES ROUTES
Route::get('/regions_test', function(){
  return Regions::all();
});
Route::get('/provinces_test', function(){
  return Provinces::all();
});
Route::get('/communes_test', function(){
  return Communes::all();
});
Route::get('/villages_test', function(){
  return Villages::all();
});

Route::get('/cycle', 'CycleFormationController@index');
Route::post('/save-cycle', 'CycleFormationController@store');
Route::post('/update-cycle', 'CycleFormationController@update');
Route::get('/delete-cycle/{id}', 'CycleFormationController@destroy');

Route::get("/provincesc", 'ProvincecController@index');
Route::post('/save-provincesc', 'ProvincecController@store');
Route::post('/update-provincesc/{id}', 'ProvincecController@update');
Route::get('/delete-provincesc/{id}', 'ProvincecController@delete');

Route::get('/communesc', 'CommunescController@index');
Route::post('/save-communesc', 'CommunescController@store');
Route::post('/update-communesc/{id}', 'CommunescController@update');
Route::get('/delete-communesc/{id}', 'CommunescController@destroy');



Route::get('/laravel_google_chart', 'LaravelGoogleGraph@index');
Route::get('/charttype', 'Charttype@index');
Route::get('/chartanne', 'Chartanne@index');
Route::get('/chartcarte', 'Chartcarte@index');



  // Associations


    Route::get('/association', 'AssociationController@index');
    Route::get('/display-association-form', 'AssociationController@create');
    Route::post('/save-association', 'AssociationController@store');
    Route::get('/update-association/{id}', 'AssociationController@edit');
    Route::post('/save-update-association/{id}', 'AssociationController@update');
    Route::get('/association-view-detail/{id}', 'AssociationController@show');
    Route::get('/delete-association/{id}', 'AssociationController@destroy');
    Route::get('/asexport_csv', 'AssociationController@asexportcsv');
    Route::get('/asexport_excel', 'AssociationController@asexportexcel');

    Route::get('/typeorganisation', 'TypeOrganisationController@index');
    Route::post('/save-typeorganisation', 'TypeOrganisationController@store');
    Route::post('/update-typeorganisation', 'TypeOrganisationController@update');
    Route::get('/delete-typeorganisation/{id}', 'TypeOrganisationController@destroy');

    Route::get('/activiteorgane', 'ActiviteorganeController@index');
    Route::post('/save-activiteorgane', 'ActiviteorganeController@store');
    Route::post('/update-activiteorgane/{id}', 'ActiviteorganeController@update');
    Route::get('/delete-activiteorgane/{id}', 'ActiviteorganeController@destroy');
    //Route::get('/aoexport_csv', 'ActiviteorganeController@aoexportcsv');
    //Route::get('/aoexport_excel', 'ActiviteorganeController@aoexportexcel');

    Route::get('/secretariatexecutifassociation', 'SecretariatexecutifassociationController@index');
    Route::post('/save-secretariatexecutifassociation', 'SecretariatexecutifassociationController@store');
    Route::post('/update-secretariatexecutifassociation/{id}', 'SecretariatexecutifassociationController@update');
    Route::get('/delete-secretariatexecutifassociation/{id}', 'SecretariatexecutifassociationController@destroy');
    Route::get('/seaexport_csv', 'SecretariatexecutifassociationController@seaexportcsv');
    Route::get('/seaexport_excel', 'SecretariatexecutifassociationController@seaexportexcel');

    Route::get('/activite', 'ActiviteController@index');
    Route::post('/save-activite', 'ActiviteController@store');
    Route::post('/update-activite/{id}', 'ActiviteController@update');
    Route::get('/delete-activite/{id}', 'ActiviteController@destroy');
    Route::get('/actexport_csv', 'ActiviteController@actexportcsv');
    Route::get('/actexport_excel', 'ActiviteController@actexportexcel');

    Route::get('/maillon', 'MaillonController@index');
    Route::post('/save-maillon', 'MaillonController@store');
    Route::post('/update-maillon/{id}', 'MaillonController@update');
    Route::get('/delete-maillon/{id}', 'MaillonController@destroy');
    //Route::get('/maexport_csv', 'MaillonController@maexportcsv');
    //Route::get('/maexport_excel', 'MaillonController@maexportexcel');

    Route::get('/filiere', 'FiliereController@index');
    Route::post('/save-filiere', 'FiliereController@store');
    Route::post('/update-filiere/{id}', 'FiliereController@update');
    //Route::post('/save-update-filiere/{id}', 'FiliereController@update');
    Route::get('/delete-filiere/{id}', 'FiliereController@destroy');
    //Route::get('/fexport_csv', 'FiliereController@fexportcsv');
    //Route::get('/fexport_excel', 'FiliereController@fexportexcel');


    Route::get('/bureauexecutifassociation', 'BureauexecutifassociationController@index');
    Route::post('/save-bureauexecutifassociation', 'BureauexecutifassociationController@store');
    Route::post('/update-bureauexecutifassociation/{id}', 'BureauexecutifassociationController@update');
    Route::post('/save-update-bureauexecutifassociation/{id}', 'BureauexecutifassociationController@update');
    Route::get('/delete-bureauexecutifassociation/{id}', 'BureauexecutifassociationController@destroy');
    Route::get('/beaexport_csv', 'BureauexecutifassociationController@beaexportcsv');
    Route::get('/beaexport_excel', 'BureauexecutifassociationController@beaexportexcel');

    Route::get('/commissariataucompteassociation', 'CommissariataucompteassociationController@index');
    Route::post('/save-commissariataucompteassociation', 'CommissariataucompteassociationController@store');
    Route::post('/update-commissariataucompteassociation/{id}', 'CommissariataucompteassociationController@update');
    Route::post('/save-update-commissariataucompteassociation/{id}', 'CommissariataucompteassociationController@update');
    Route::get('/delete-commissariataucompteassociation/{id}', 'CommissariataucompteassociationController@destroy');
    Route::get('/cacexport_csv', 'CommissariataucompteassociationController@cacexportcsv');
    Route::get('/cacexport_excel', 'CommissariataucompteassociationController@cacexportexcel');

    Route::get('/fonctionnementassociation', 'FonctionnementassociationController@index');
    Route::post('/save-fonctionnementassociation', 'FonctionnementassociationController@store');
    Route::post('/update-fonctionnementassociation/{id}', 'FonctionnementassociationController@update');
    Route::post('/save-update-fonctionnementassociation/{id}', 'FonctionnementassociationController@update');
    Route::get('/delete-fonctionnementassociation/{id}', 'FonctionnementassociationController@destroy');
    Route::get('/faexport_csv', 'FonctionnementassociationController@faexportcsv');
    Route::get('/faexport_excel', 'FonctionnementassociationController@faexportexcel');


//CHAMBRES REGIONALES AGRICOLES


Route::get('/chambreRegionale', 'cra\craController@index');

Route::get('/display-cr-form', 'cra\craController@create');
Route::post('/save-cr', 'cra\craController@store');
Route::get('/update-cr/{id}', 'cra\craController@edit');
Route::post('/save-update-cr/{id}', 'cra\craController@update');
Route::get('/cr-view-detail/{id}', 'cra\craController@show');
Route::get('/delete-cr/{id}', 'cra\craController@destroy');
Route::get('/crexport_csv', 'cra\craController@crexportcsv');
Route::get('/crexport_excel', 'cra\craController@crexportexcel');

Route::get('/assembleeConsulaire', 'cra\acController@index');
Route::post('/save-ac', 'cra\acController@store');
Route::post('/update-ac/{id}', 'cra\acController@update');
Route::get('/delete-ac/{id}', 'cra\acController@destroy');
Route::get('/acexport_csv', 'cra\acController@acexportcsv');
Route::get('/acexport_excel', 'cra\acController@acexportexcel');

Route::get('/bureauExecutif', 'cra\beController@index');
Route::post('/save-be', 'cra\beController@store');
Route::post('/update-be/{id}', 'cra\beController@update');
Route::get('/delete-be/{id}', 'cra\beController@destroy');
Route::get('/beexport_csv', 'cra\beController@beexportcsv');
Route::get('/beexport_excel', 'cra\beController@beexportexcel');

Route::get('/secretariatExecutif', 'cra\seController@index');
Route::post('/save-secr', 'cra\seController@store');
Route::post('/update-secr/{id}', 'cra\seController@update');
Route::get('/delete-secr/{id}', 'cra\seController@destroy');
Route::get('/seexport_csv', 'cra\seController@seexportcsv');
Route::get('/seexport_excel', 'cra\seController@seexportexcel');

Route::get('/commissionPermanante', 'cra\cpController@index');
Route::post('/save-cp', 'cra\cpController@store');
Route::post('/update-cp/{id}', 'cra\cpController@update');
Route::get('/delete-cp/{id}', 'cra\cpController@destroy');
Route::get('/cpexport_csv', 'cra\cpController@cpexportcsv');
Route::get('/cpexport_excel', 'cra\cpController@cpexportexcel');

Route::get('/rencontreStatutaire', 'cra\rstatController@index');
Route::post('/save-rstat', 'cra\rstatController@store');
Route::post('/update-rstat/{id}', 'cra\rstatController@update');
Route::get('/delete-rstat/{id}', 'cra\rstatController@destroy');
Route::get('/rstatexport_csv', 'cra\rstatController@rstatexportcsv');
Route::get('/rstatexport_excel', 'cra\rstatController@rstatexportexcel');


});