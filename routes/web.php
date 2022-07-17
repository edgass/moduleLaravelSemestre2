<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResParkinController;
use App\Http\Controllers\ResPiscineController;
use App\Http\Controllers\PlainteController;


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
    return view('home');
});

//Route::get('/reservation_parking',[reservation_parking_controller::class,'index']);
Route::get('/lister_parking',[lister_parking_controller::class,'index']);
Route::get('/reservation_piscine',[reservation_piscine_controller::class,'index']);
Route::get('/lister_piscine',[lister_piscine_controller::class,'index']);

Route::resource('/reservation_parking', ResParkinController::class);
Route::resource('/reservation_piscine', ResPiscineController::class);
Route::resource('/plainte', PlainteController::class);


