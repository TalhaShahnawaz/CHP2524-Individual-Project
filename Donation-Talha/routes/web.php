<?php

use App\Http\Controllers\AdminController;



use App\Http\Controllers\BloodController;

use App\Http\Controllers\ClothController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\EventOrganizeController;
use App\Http\Controllers\FinancialController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\PatientController;

use App\Http\Controllers\HelpAreaController;
use App\Http\Controllers\mentalwellbeing;

use App\Http\Controllers\NewsCommnetController;
use App\Http\Controllers\OrgProfileController;
use App\Http\Controllers\PostNewsController;
use App\Http\Controllers\SubscripController;
use App\Http\Controllers\UserProfileController;

use App\Models\NewsCommnet;
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
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});


//Routes for Patient
Route::get('/patient', function () {
    return view('patient');
});
Route::post('/patient',[PatientController::class,'create']);
Route::get('/patientShow',[PatientController::class,'patientShow']);
Route::get('/approvedpatient',[PatientController::class,'approvedpatient']);
Route::get('/deleteapprovedpatient/{id}',[PatientController::class,'destroyapproved_patient']);
Route::get('/reguser',[UserProfileController::class,'reguser']);
Route::get('/del_user/{id}',[UserProfileController::class,'destroyuser']);
Route::get('/edit_patient/{id}',[PatientController::class,'edit_patient']);
Route::post('/patientEdit',[PatientController::class,'approve']);
Route::get('/destroy_patient/{id}',[PatientController::class,'destroypatient']);
Route::get('/destroy_patient',[PatientController::class,'destroypatient']);


Route::get('/approveddonors',[DonorController::class,'approveddonorsShow']);
Route::get('/deleteapprovedblood/{id}',[DonorController::class,'destroyapproved_blood']);
Route::get('/deleteapprovedfinancial/{id}',[DonorController::class,'destroyapproved_financial']);
Route::get('/deleteapprovedfood/{id}',[DonorController::class,'destroyapproved_food']);
Route::get('/deleteapprovedcloth/{id}',[DonorController::class,'destroyapproved_cloth']);

// Route for Make Donation
Route::get('mentalwellbeing',[mentalwellbeing::class,'index']);
Route::get('foodDonate',[mentalwellbeing::class,'food']);
Route::get('bloodDonate',[mentalwellbeing::class,'blood']);
Route::get('clothDonate',[mentalwellbeing::class,'cloth']);
Route::get('financialDonate',[mentalwellbeing::class,'financial']);
Route::get('/foodProfile/{id}',[mentalwellbeing::class,'profile']);
Route::get('/bloodProfile/{id}',[mentalwellbeing::class,'blood_profile']);
Route::get('/clothProfile/{id}',[mentalwellbeing::class,'cloth_profile']);


Route::get('/financialProfile/{id}',[mentalwellbeing::class,'financial_profile']);






Route::group(['middleware'=>['auth']],function(){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/donor',[DonorController::class,'index'])->name('donor');
    Route::post('/donor',[DonorController::class,'create'])->name('donor');
});


// Route for Food-Controller
Route::get('/food',[FoodController::class,'index']);
Route::post('/food',[FoodController::class,'create']);

// Route for Blood-Controller
Route::get('/blood',[BloodController::class,'index']);
Route::post('/blood',[BloodController::class,'create']);




// Route for Cloth-Controller
Route::get('/clothing',[ClothController::class,'index']);
Route::post('/clothing',[ClothController::class,'create']);

//Route for Financial Donation
Route::get('/financial',[FinancialController::class,'index']);
Route::post('/financial',[FinancialController::class,'create']);
// Route::get('/clothing',[ClothController::class,'index']);
// Route::post('/clothing',[ClothController::class,'create']);







// #################################### Start of Admin Dashboard Routes ####################################

// Admin Profile
// Route::get('/adminProfile/{id}',[AdminController::class,'show']);
// Route::view('/adminProfile','admin.adminProfile');
// Route::get('/adminProfile/{id}',[AdminController::class,'show']);
Route::get('/adminProfile',[AdminController::class,'viewProfile']);
Route::get('/adminForm',[AdminController::class,'index']);
Route::post('/adminForm',[AdminController::class,'store']);
Route::get('/activeDonors',[AdminController::class,'activeDonor']);
Route::get('/editDonor/{id}',[AdminController::class,'editDonor']);
Route::put('/editDonor/{id}',[AdminController::class,'donorUpdate']);
Route::get('/donorDestroy/{id}',[AdminController::class,'donorDestroy']);



//Route for News Section
Route::get('/news',[PostNewsController::class,'index']);
Route::post('/news',[NewsCommnetController::class,'create']);
// Route::get('/news',[NewsCommnetController::class,'indexCome']);
Route::view('/postNews','admin.postNews');
Route::post('/postNews',[PostNewsController::class,'store']);
Route::get('/viewNews',[PostNewsController::class,'show']);
Route::get('/editNews/{id}',[PostNewsController::class,'edit']);
Route::put('/editNews/{id}',[PostNewsController::class,'update']);
Route::get('/editComment',[NewsCommnetController::class,'viewComment']);
Route::get('/edit_com/{id}',[NewsCommnetController::class,'edit_com']);

// Route for Subscription
Route::view('/subscription', 'admin.subscription');
Route::get('/subscription',[SubscripController::class,'index']);
Route::post('/',[SubscripController::class,'create']);
Route::get('/destroy/{id}',[SubscripController::class,'destroy']);

// Route for Food-Dashboard 
// Route::view('foodShow','admin.foodShow');
Route::get('/foodShow',[FoodController::class,'foodShow']);
Route::get('/edit_food/{id}',[FoodController::class,'edit_food']);
Route::post('/foodEdit',[FoodController::class,'approve']);
Route::get('/destroy_food/{id}',[FoodController::class,'destroyFood']);
// Route::get('/delete_food/{id}',[FoodController::class,'deleteFood']);

// Route for Blood-Dashboard
Route::get('/bloodShow',[BloodController::class,'bloodShow']);
Route::get('/edit_blood/{id}',[BloodController::class,'edit_blood']);
Route::post('/bloodEdit',[BloodController::class,'approve']);
Route::get('/destroy_blood/{id}',[BloodController::class,'destroyBlood']);



// Route for Cloth-Dashboard
Route::get('/clothShow',[ClothController::class,'clothShow']);
Route::get('/edit_cloth/{id}',[ClothController::class,'edit_cloth']);
Route::post('/clothEdit',[ClothController::class,'approve']);
Route::get('/destroy_cloth/{id}',[ClothController::class,'destroy_cloth']);


// Route for Financial-Dashboard
Route::get('/financialShow',[FinancialController::class,'financialShow']);
Route::get('/edit_financial/{id}',[FinancialController::class,'edit_financial']);
Route::post('/financialEdit',[FinancialController::class,'approve']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


// Route::view('food', 'donors.food');
// Route::view('blood', 'donors.blood');

// Route::view('clothing', 'donors.clothing');
// Route::view('financial', 'donors.financial');




// ---------------------------------- Routed For Patient Dashboard --------------------
// Route For Event Organization
// Route::view('event','Patient.event');
Route::get('/event',[EventOrganizeController::class,'index']);
Route::post('/event',[EventOrganizeController::class,'store']);
Route::get('events',[EventOrganizeController::class,'eventPage']);
Route::get('eventProfile/{id}',[EventOrganizeController::class,'eventProfile']);
Route::get('/PatientProfile/{id}',[EventOrganizeController::class,'eventProfileNog']);
Route::get('joinEvent/{id}',[EventOrganizeController::class,'joinEvent']);
Route::post('joinEvent/{id}',[EventOrganizeController::class,'EventMember']);
Route::get('/myEvent',[EventOrganizeController::class,'myEvent']);

// Route For Organization Profile.
Route::get('/orgProfile',[OrgProfileController::class,'viewProfile']);
Route::get('/editProfile',[OrgProfileController::class,'editProfile']);
Route::post('/editProfile',[OrgProfileController::class,'store']);








// ##################################### USER DASHBOARD ROUTES ############################################
// Donor Profile
Route::get('/userProfile',[UserProfileController::class,'index']);
Route::get('/joinProfile',[UserProfileController::class,'showProfile']);
Route::post('/joinProfile',[UserProfileController::class,'store']);
Route::get('/editUserProfile',[UserProfileController::class,'editUserProfile']);
Route::put('/editUserProfile',[UserProfileController::class,'profileUpdate']);

// ### Help Area
Route::get('/helpArea',[HelpAreaController::class,'index']);
Route::post('/helpArea',[HelpAreaController::class,'store']);


// ### Event Form
Route::get('/userEvent',[EventOrganizeController::class,'userEvent']);



require __DIR__.'/auth.php';
