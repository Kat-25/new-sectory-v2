<?php

use App\Http\Controllers\addhouseholdcontroller;
use App\Http\Controllers\addresidentcontroller;
use App\Http\Controllers\edithouseholdcontroller;
use App\Http\Controllers\viewhouseholdscontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewresidentscontroller;
use App\Http\Controllers\ViewingController;
use App\Models\AddingHouseholdsModel;
use App\Http\Controllers\dashboardcountcontroller;
use App\Http\Controllers\editresidentcontroller;
use Illuminate\Http\Request;
use App\Models\householdtablemodel;
use App\Http\Controllers\customauthcontroller;
use App\Http\Controllers\regrequestcontroller;
use App\Http\Controllers\complaintsController;
use App\Http\Controllers\viewdetailsController;
use illuminate\support\Facades\DB;
use App\Http\Controllers\documentcontroller;


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

//ADMIN SIDE FUNCTION ROUTES

Route::view('addhouseholds', 'roles.adminside.addhouseholds')->name('addhouseholds');
Route::POST('addhousehold', [addhouseholdcontroller::class,'addHousehold']);

Route::view('adminindex', 'roles.adminside.adminindex');
Route::POST('addhousehold', [addhouseholdcontroller::class,'addHouseholdFunc']);


//Route::view('addresident', 'roles.adminside.addresidents');


Route::view('adduser', 'roles.adminside.addusers');


Route::view('viewresident', 'roles.adminside.viewresidents');
Route::get('viewresident', [viewresidentscontroller::class, 'viewResidentsFunc'])->name('viewresident');


Route::view('viewhousehold', 'roles.adminside.viewhousehold');
Route::get('viewhousehold', [viewhouseholdscontroller::class, 'viewHouseholdsFunc'])->name('viewhousehold');
Route::view('/complaints', 'roles.adminside.viewhousehold');


//ROUTES FOR EDIT HOUSEHOLD
Route::get('update/{id}', [edithouseholdcontroller::class, 'showValueHouseholdsFunc']);
Route::POST('update1', [edithouseholdcontroller::class, 'editHouseholdsFunc']);

//ROUTES FOR EDIT RESIDENT
Route::get('updateres/{id}', [editresidentcontroller::class, 'showValueResidentFunc']);
Route::POST('updateres', [editresidentcontroller::class, 'editResidentFunc1']);

//ROUTES FOR ACCESSING SIDEBAR ROUTES WITHOUT /UPDATE/DASHBOARD
// Route::get('/admindashboard', function () {
//     return view('roles.adminside.admindashboard');
// })->name('admindashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');





//ROUTES FOR COUNTING RESIDENT IN DASHBOARD
Route::get('admindashboard', [dashboardcountcontroller::class, 'countResidents'])->name('admindashboard');

//ROUTES FOR ADD RESIDENT VIEW
Route::get('/getHouseholdID', [viewhouseholdscontroller::class,'getHouseholdID']);
Route::POST('confirmaddres', [addresidentcontroller::class,'addResidentFunc']);
Route::view('addresident', 'roles.adminside.addresident')->name('addresident');

//ROUTES FOR REGISTER AND LOGIN
Route::get('/login',[customauthcontroller::class,'login']);
Route::get('/registration',[customauthcontroller::class,'registration']);
Route::post('/register-user', [customauthcontroller::class,'registerUser'])->name('register-user');
Route::post('login-user',[customauthcontroller::class,'loginUser'])->name('login-user');
Route::get('/logout', [customauthcontroller::class,'logOut'])->name('logout');


//ROUTE DISPLAY FOR RESIDENT LIST
Route::get('residentlist', [regrequestcontroller::class, 'displayResidentList'])->name('residentlist');
Route::view('addstaff', 'roles.adminside.addstaff')->name('addstaff');
Route::view('reg', 'auth.register');

//ROUTE DISPLAY FOR REGISTRATION REQUESTS
Route::get('/registration-requests', [regrequestcontroller::class, 'displayData'])->name('registration-requests');
Route::view('/registration-requests/details', 'roles.adminside.viewrequestdetails')->name('requestdetails');
Route::get('request/{id}', [regrequestcontroller::class, 'viewRequestsRegisterFunc']);
Route::POST('viewreq', [regrequestcontroller::class, 'approveReqFunc']);


// Route::post('/update-status', function(Request $request) {
//     $residentID = $request->input('residentID');
//     $accountStatus = $request->input('accountStatus');
    
//     // Update the database with the new accountStatus
//     DB::table('residents')
//         ->where('residentID', $residentID)
//         ->update(['accountStatus' => $accountStatus]);
        
//     return 'Status updated successfully';
// });

Route::post('/update-status', [regrequestcontroller::class, 'updateStatus']);

Route::post('/delete-request', [regrequestcontroller::class, 'deleteRequest']);






// OVERRIDED
// Route::get('/request/{id}', 'regrequestcontroller@show');
//Route::get('/registration-request/detail'[regrequestcontroller::class,'show']);
// OVERRIDED
// Route::get('/request/registration/details', [regrequestcontroller::class, 'showDetails'])->name('registrationdetails.show');
//Route::get('/residents/showdetails/{id}', [viewdetailsController::class, 'show'])->name('residents.show');


//COMPLAINTS
Route::controller(complaintsController::class)->group(function ()
{
    Route::get('/complaints/all', 'viewComplaints')->name('roles.adminside.listofcomplaints');
    Route::get('/complaints/add', 'addComplaints')->name('complaints.add');
    Route::get('/complaints/edit/{id}', 'editComplaint')->name('complaints.edit');
    Route::POST('/complaints/store', 'storeComplaints')->name('complaints.store');
    Route::POST('/complaints/update', 'updateComplaints')->name('complaints.update');
    Route::view('/complaints/details/', 'roles.adminside.viewcomplaintdetails');
    Route::POST('/complaints/update', 'updateComplaints')->name('complaints.update');    
    Route::view('/complaints/details/', 'roles.adminside.viewcomplaintdetails');    
    Route::delete('/residents/{id}', 'destroy')->name('deletecomplaint');

});

//ROUTE DISPLAY FOR STAFF LIST
Route::get('stafflist', [regrequestcontroller::class, 'displayStaffList'])->name('stafflist');

//RESIDENT SIDE FUNCTION ROOTS
Route::view('dashboard','roles.userside.resdashboard')->name('dashboard');

//ROUTES FOR DOCUMENT MANAGEMENT
Route::view('manageDocument', 'roles.adminside.manageDocument')->name('manageDocument');
Route::get('/manageDocument', [documentcontroller::class, 'createForm']);
Route::post('/manageDocument',[documentcontroller::class, 'fileUpload'])->name('fileUpload');

































// IMPORTANT OPTIONS
// Route::get('/admindashboard', function () {
//     $controller1 = app()->make(\App\Http\Controllers\dashboardcountcontroller::class);
//     $controller2 = app()->make(\App\Http\Controllers\customauthcontroller::class);
    
//     $result1 = $controller1->countResidents();
//     $result2 = $controller2->headerdisplayname();
    
//     return view('roles.adminside.admindashboard', compact('result1', 'result2'));
// });

// Route::match(['get', 'post'], '/addresident', function(Request $request) {
//     if ($request->isMethod('post')) {
//         $householdno = $request->input('householdno');
//         $household = householdtablemodel::where('householdNo', $householdno)->first();

//         if ($household) {
//             return response()->json(['success' => true, 'householdID' => $household->householdID]);
//         } else {
//             return response()->json(['success' => false, 'message' => 'Household not found']);
//         }
//     }

//     return view('roles.adminside.addresidents');
// });

//Route::get('addresident', [viewhouseholdscontroller::class, 'getData']);

//Route::view('admindashboard', 'roles.adminside.admindashboard');



// Route::get('/header1', function(){
//     return view('header');
// });

// Route::get('/addhouse', array('as' => 'addhouse', function()
// {
//     return view('adminside.addhousehold');
// }));