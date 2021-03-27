<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\BookController;




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
/********************
 * Author:Asha chandran
 * Date:9/3/2021
 * Module:main
 * function:index page
 **********************/

Route::get('/', function () {
    return view('index');
});
/********************
 * Author:Nihala N
 * Date:9/3/2021
 * Module:admin
 * function:Admin home page
 **********************/

Route::view("home",'adminhome');
/********************
 * Author:Geethu Eipe
 * Date:9/3/2021
 * Module:admin
 * function:flight  add view update and delete
 **********************/
Route::view("add",'flightadd');
Route::get('insertflight',[FlightController::class,'insertflight']);
Route::get('flights',[FlightController::class,'list']);
Route::get("delete/{id}",[FlightController::class,'delete']);
Route::get("update/{id}",[FlightController::class,'flightupdates']);
Route::get("update_action/",[FlightController::class,'update_actions']);


/********************
 * Author:Geethu Eipe
 * Date:11/3/2021
 * Module:admin
 * function:notification add and view
 **********************/
//Route::view('noti','noti');
Route::view('notiform','notifictionadd');
Route::get('notiadd/{id}',[FlightController::class,'notification']);
Route::get('notification',[NotificationController::class,'notificationadd']);
Route::get('tableview',[NotificationController::class,'notification_view']);

/********************
 * Author:Asha chandran
 * Date:10/3/2021
 * Module:admin
 * function:Admin login
 **********************/

Route::view('adminlogin','welcome');
Route::get('adminlog',[AdminLoginController::class,'check']);
Route::view("admn",'admin');
/********************
 * Author:Athulya a
 * Date:9/3/2021
 * Module:user
 * function:user form and view
 **********************/


Route::view('user_reg','user_reg');
Route::get('/user_regform',[RegisterController::class,'user_register']);
Route::view("updt",'userupdate');
Route::get('user_view',[RegisterController::class,'user_view']);
Route::get("updates/{id}",[RegisterController::class,'userupdates']);
Route::get("user_update/",[RegisterController::class,'update_action']);
/********************
 * Author:Athulya a
 * Date:10/3/2021
 * Module:user
 * function:user login
 **********************/

Route::get('user_view',[RegisterController::class,'user_view']);
Route::get('userlog',[RegisterController::class,'check']);
Route::view("login",'login');



Route::view("booked",'bookedusers');
//Route::view("ticket",'ticketissue');

/********************
 * Author:Asha chandran
 * Date:10/3/2021
 * Module:admin
 * function:Add and view Airport details
 **********************/
Route::view("airport",'addairport');
Route::get("addairport",[AirportController::class,'addairport']);
Route::get("addairport_view",[AirportController::class,'addairport_view']);

// Route::view('user_regform','user_reg');
// Route::get('user',[RegisterController::class,'user_register']);
// Route::get('user_view',[RegisterController::class,'user_view']);

/********************
 * Author:Athulya A
 * Date:11/3/2021
 * Module:user
 * function:search flights
 **********************/

Route::get("searchflight/",[FlightController::class,'searchaction']);
Route::view("flightview",'flightview');


/*****user****/

/********************
 * Author:Nihala N
 * Date:11/3/2021
 * Module:user
 * function:dashboards
 **********************/
Route::view("usr",'user');

Route::view("uflights",'userflightlist');

Route::view("updt",'userupdate');
Route::view("uairport",'viewairport');
Route::view("uticket",'viewticket');

/********************
 * Author:Athulya a
 * Date:12/3/2021
 * Module:user
 * function:payment details
 **********************/
Route::view("payment",'payment');
Route::view("pay",'success');


//User flight view
Route::view("view_user_flight",'flight_view_user');
Route::get("view_flight",[FlightController::class,'flight_view_user']);
//booking
Route::view("bookform/",'bookform');
Route::get("bookformview/{id}",[FlightController::class,'flight_view_user_book']);

Route::get("booknow",[BookController::class,'booknow']);
Route::get("receipt",[BookController::class,'receipt']);
Route::get("book_table",[BookController::class,'book_table']);




//file upload
Route::get('/upload-file', [FileController::class, 'createForm']);

Route::post('/upload-file', [FileController::class, 'fileUpload'])->name('fileUpload');

//download file

Route::get('viewfile',[FileController::class,'file_downlod']);
//payment

Route::get('payment',[BookController::class,'pay_payment']);
Route::get('ticket',[FlightController::class,'ticket_issue']);
Route::view('ticket_view','ticket_view');



//search view
Route::view('search','search');
//seat avalibilty
Route::view('seat','seat_aval');
Route::get('seat_avali',[FlightController::class,'seat_aval']);

Route::get('payment',[RegisterController::class,'payment_fet']);