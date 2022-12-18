<?php

use App\Http\Controllers\AdministExpenController;
use App\Http\Controllers\ExpensisModalController;
use App\Http\Controllers\IncomeSourcesController;
use App\Http\Controllers\MainActivityController;
use App\Http\Controllers\MarketingChannelController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProjectBpChannelResourceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectTypeController;
use App\Http\Controllers\SaleChannelController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SystemContactController;
use App\Http\Controllers\SystemPageController;
use App\Http\Controllers\SystemPagesController;
use App\Http\Controllers\SystemServicesController;
use App\Http\Controllers\UsersController;
use App\Models\AdministExpen;
use Illuminate\Support\Facades\Auth;
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




Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');
Route::post('fetch-cities', [UsersController::class, 'fetchCity'])->name('fetch_cities');
//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

// Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/profile', [App\Http\Controllers\UsersController::class, 'profile'])->name('profile')->middleware('auth');
Route::post('/profile', [App\Http\Controllers\UsersController::class, 'edit_profile'])->name('edit_profile')->middleware('auth');
Route::post('/password', [App\Http\Controllers\UsersController::class, 'edit_password'])->name('edit_password')->middleware('auth');



Route::resource('users',UsersController::class)->middleware('auth');
Route::get('/get_users', [App\Http\Controllers\UsersController::class, 'get_users'])->name('get_users')->middleware('auth');

Route::post('user/verify',[UsersController::class,'verify_user'])->name('verify_user')->middleware('auth');
Route::post('user/active',[UsersController::class,'active_user'])->name('active_user')->middleware('auth');
Route::post('user/deactivate',[UsersController::class,'deactivate_user'])->name('deactivate_user')->middleware('auth');
Route::post('user/search',[UsersController::class,'search_user'])->name('search_user')->middleware('auth');
Route::delete('user/delete',[UsersController::class,'destroy'])->name('users.destroy')->middleware('auth');



Route::resource('projects',ProjectController::class)->middleware('auth');
Route::get('get_projects', [App\Http\Controllers\ProjectController::class, 'get_projects'])->name('get_projects')->middleware('auth');
Route::post('store_project', [App\Http\Controllers\ProjectController::class, 'store_project'])->name('store_project')->middleware('auth');
Route::post('store_project_details', [App\Http\Controllers\ProjectController::class, 'store_project_details'])->name('store_project_details')->middleware('auth');
Route::post('update_project', [App\Http\Controllers\ProjectController::class, 'update_project'])->name('update_project')->middleware('auth');
Route::post('update_project_details', [App\Http\Controllers\ProjectController::class, 'update_project_problems_solutions'])->name('update_project_problems_solutions')->middleware('auth');
Route::post('update_project_problems_solutions', [App\Http\Controllers\ProjectController::class, 'update_project_details'])->name('update_project_details')->middleware('auth');
Route::get('projects/{id}/business_model/create', [App\Http\Controllers\ProjectbusinessplansController::class, 'create'])->name('create_business_model')->middleware('auth');
Route::post('projects/business_model/storeproblemssolutions', [App\Http\Controllers\ProjectbusinessplansController::class, 'store_problems_solutions'])->name('storeproblemssolutions')->middleware('auth');
Route::post('projects/business_model/storedetailsmarket', [App\Http\Controllers\ProjectbusinessplansController::class, 'store_details_market'])->name('storedetailsmarket')->middleware('auth');
Route::post('projects//business_model/storesalesmarketingchannels', [App\Http\Controllers\ProjectbusinessplansController::class, 'store_sales_marketing_channels'])->name('storesalesmarketingchannels')->middleware('auth');
Route::post('projects/business_model/storerevenuecost', [App\Http\Controllers\ProjectbusinessplansController::class, 'store_revenue_cost'])->name('storerevenuecost')->middleware('auth');


Route::get('projects/{id}/investmentoffer/create', [App\Http\Controllers\InvestmentOfferController::class, 'create'])->name('create_investment_offer')->middleware('auth');
Route::get('projects/investment_offer/fetchproblems', [App\Http\Controllers\InvestmentOfferController::class, 'fetchproblems'])->name('fetchproblems')->middleware('auth');
Route::post('projects/investmentoffer/storeproblem', [App\Http\Controllers\InvestmentOfferController::class, 'store_problem'])->name('storeproblem')->middleware('auth');
Route::post('projects/investment_offer/updateproblem', [App\Http\Controllers\InvestmentOfferController::class, 'update_problem'])->name('updateproblem')->middleware('auth');
Route::delete('projects/investment_offer/problem/{problem}', [App\Http\Controllers\InvestmentOfferController::class, 'destroy_problem'])->name('destroyproblem')->middleware('auth');
Route::get('projects/investment_offer/fetchsolution', [App\Http\Controllers\InvestmentOfferController::class, 'fetchsolution'])->name('fetchsolution')->middleware('auth');
Route::post('projects/investmentoffer/solution', [App\Http\Controllers\InvestmentOfferController::class, 'store_solution'])->name('storesolution')->middleware('auth');
Route::post('projects/investment_offer/updatesolution', [App\Http\Controllers\InvestmentOfferController::class, 'update_solution'])->name('updatesolution')->middleware('auth');
Route::delete('projects/investment_offer/solution/{solution}', [App\Http\Controllers\InvestmentOfferController::class, 'destroy_solution'])->name('destroysolution')->middleware('auth');
Route::get('projects/investment_offer/fetchcompetitiveadvantages', [App\Http\Controllers\InvestmentOfferController::class, 'fetchcompetitiveadvantage'])->name('fetchcompetitiveadvantage')->middleware('auth');
Route::post('projects/investment_offer/storecompetitiveadvantages', [App\Http\Controllers\InvestmentOfferController::class, 'store_competitive_advantages'])->name('storecompetitiveadvantages')->middleware('auth');
Route::post('projects/investment_offer/storecompetitiveadvantagesmodal', [App\Http\Controllers\InvestmentOfferController::class, 'store_competitive_advantages_modal'])->name('storecompetitiveadvantagesmodal')->middleware('auth');
Route::post('projects/investment_offer/updatecompetitiveadvantagesmodal', [App\Http\Controllers\InvestmentOfferController::class, 'update_competitive_advantages_modal'])->name('updatecompetitiveadvantagesmodal')->middleware('auth');
Route::get('projects/investment_offer/fetchstoretargetcustomer', [App\Http\Controllers\InvestmentOfferController::class, 'fetchtargetcustomer'])->name('fetchstoretargetcustomer')->middleware('auth');
Route::post('projects/investment_offer/storetargetcustomer', [App\Http\Controllers\InvestmentOfferController::class, 'store_target_customer'])->name('storetargetcustomer')->middleware('auth');
Route::post('projects/investment_offer/storestoretargetcustomermodal', [App\Http\Controllers\InvestmentOfferController::class, 'store_target_customer_modal'])->name('storetargetcustomermodal')->middleware('auth');
Route::post('projects/investment_offer/updatestoretargetcustomermodal', [App\Http\Controllers\InvestmentOfferController::class, 'update_target_customer_modal'])->name('updatestoretargetcustomermodal')->middleware('auth');
Route::post('projects/investment_offer/storetargetmarket', [App\Http\Controllers\InvestmentOfferController::class, 'store_target_market'])->name('storetargetmarket')->middleware('auth');
Route::post('projects/investment_offer/storecompatitor', [App\Http\Controllers\InvestmentOfferController::class, 'store_compatitor'])->name('storecompatitor')->middleware('auth');
Route::post('projects/investment_offer/storevisionmessagegoals', [App\Http\Controllers\InvestmentOfferController::class, 'store_vision_message_goals'])->name('storevisionmessagegoals')->middleware('auth');
Route::post('projects/investment_offer/storeusersdetails', [App\Http\Controllers\InvestmentOfferController::class, 'store_users_details'])->name('storeusersdetails')->middleware('auth');
Route::get('projects/investment_offer/fetchservices', [App\Http\Controllers\InvestmentOfferController::class, 'fetchservices'])->name('fetchservices')->middleware('auth');
Route::post('projects/investment_offer/storeservicenamedescription', [App\Http\Controllers\InvestmentOfferController::class, 'store_service_name_description'])->name('storeservicenamedescription')->middleware('auth');
Route::post('projects/investment_offer/updateservicenamedescription', [App\Http\Controllers\InvestmentOfferController::class, 'update_service_name_description'])->name('updateservicenamedescription')->middleware('auth');
Route::delete('projects/investment_offer/services/{services}', [App\Http\Controllers\InvestmentOfferController::class, 'destroy_services'])->name('destroyservices')->middleware('auth');
Route::post('projects/investment_offer/storeteamworkmodal', [App\Http\Controllers\InvestmentOfferController::class, 'store_team_work_modal'])->name('storeteamworkmodal')->middleware('auth');
Route::post('projects/investment_offer/updateteamworkmodal', [App\Http\Controllers\InvestmentOfferController::class, 'update_team_work_modal'])->name('updateteamworkmodal')->middleware('auth');
Route::post('projects/investment_offer/storeinvesment', [App\Http\Controllers\InvestmentOfferController::class, 'store_invesment'])->name('storeinvesment')->middleware('auth');
Route::get('projects/investment_offer/fetchinvestment', [App\Http\Controllers\InvestmentOfferController::class, 'fetchinvestment'])->name('fetchinvestment')->middleware('auth');
Route::post('projects/investment_offer/storeinvestmentmodal', [App\Http\Controllers\InvestmentOfferController::class, 'store_investment_modal'])->name('storeinvestmentmodal')->middleware('auth');
Route::post('projects/investment_offer/updateinvestmentmodal', [App\Http\Controllers\InvestmentOfferController::class, 'update_investment_modal'])->name('updateinvestmentmodal')->middleware('auth');
Route::delete('projects/investment_offer/investment/{investment}', [App\Http\Controllers\InvestmentOfferController::class, 'destroy_investment'])->name('destroyinvestment')->middleware('auth');
Route::get('projects/investment_offer/fetchtargetcustomers', [App\Http\Controllers\InvestmentOfferController::class, 'fetchtargetcustomer'])->name('fetchtargetcustomers')->middleware('auth');
Route::post('projects/investment_offer/storefuturerevenues', [App\Http\Controllers\InvestmentOfferController::class, 'store_futurer_evenues'])->name('storefuturerevenues')->middleware('auth');
Route::get('projects/investment_offer/fetchteamwork', [App\Http\Controllers\InvestmentOfferController::class, 'fetchteamwork'])->name('fetchteamwork')->middleware('auth');

Route::delete('project/delete', [ProjectController::class, 'destroy'])->name('proj.del');

Route::resource('sliders',SliderController::class)->middleware('auth');
Route::resource('pages',SystemPageController::class)->middleware('auth');

Route::resource('contacts',SystemContactController::class)->middleware('auth');

Route::resource('services',SystemServicesController::class)->middleware('auth');
Route::resource('projectype',ProjectTypeController::class)->middleware('auth');
Route::resource('adminstExp',AdministExpenController::class)->middleware('auth');

Route::resource('projBpChanlRes',ProjectBpChannelResourceController::class)->middleware('auth');
Route::resource('marketchanel',MarketingChannelController::class)->middleware('auth');
Route::resource('incomSourc',IncomeSourcesController::class)->middleware('auth');
Route::resource('expensisModel',ExpensisModalController::class)->middleware('auth');
Route::resource('mainActivity',MainActivityController::class)->middleware('auth');
Route::resource('saleChanel',SaleChannelController::class)->middleware('auth');

Route::post('slider/search',[SliderController::class,'search_slider'])->name('search_slider')->middleware('auth');
Route::post('project/search',[ProjectController::class,'search_project'])->name('search_project')->middleware('auth');
Route::post('adminstExp/search',[AdministExpenController::class,'search_adminst_expen'])->name('search_adminst_expen')->middleware('auth');
Route::post('mainActivity/search',[MainActivityController::class,'search_mainActivity'])->name('search_mainActivity')->middleware('auth');
Route::post('expensisModel/search',[ExpensisModalController::class,'search_expModal'])->name('search_expModal')->middleware('auth');
Route::post('incomSourc/search',[IncomeSourcesController::class,'search_incomSourc'])->name('search_incomSourc')->middleware('auth');
Route::post('marketchanel/search',[MarketingChannelController::class,'search_marktechanle'])->name('search_marktechanle')->middleware('auth');
Route::post('saleChanel/search',[SaleChannelController::class,'search_salechanel'])->name('search_salechanel')->middleware('auth');
Route::post('projectype/search',[ProjectTypeController::class,'search_projType'])->name('search_projType')->middleware('auth');
Route::post('pages/search',[SystemPageController::class,'search_pages'])->name('search_pages')->middleware('auth');
Route::post('services/search',[SystemServicesController::class,'search_services'])->name('search_services')->middleware('auth');
Route::post('contact/search',[SystemContactController::class,'search_contact'])->name('search_contact')->middleware('auth');

 Route::get('down/{id}', [PdfController::class, 'PDF'])->name('pdf');

 Auth::routes(['verify' => true]);