<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\fundscontroller;
use App\Http\Controllers\returnfundscontroller;
use App\Http\Controllers\healthofficercontroller;
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


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/auth/login',[usercontroller::class,"login"]);

//viewing main page
Route::get('/welcomepage',function(){
    return view('welcomepage');
});

//viewing page add HO
Route::get('/AddHealthOfficer',function(){
    return view('AddHealthOfficer');
});

//adding health officer to db
Route::view('add','addhealthofficer');
Route::post('add',[usercontroller::class,'adddata']);

//view funds page
Route::get('/Funds',function(){
    return view('Funds');
});

//adding funds to db
Route::view('plus','Funds');
Route::post('plus',[fundscontroller::class,'addfund']);

//patients
Route::get('/patients',function(){
    return view('patients');
});

//graphs
Route::get('/page-graphs',function(){
    return view('page-graphs');
});

//view payments
Route::get('/payments',function(){
    return view('payments');
});

//View records
Route::get('/records',function(){
    return view('records');
});

//View reports
Route::get('/reports',function(){
    return view('reports');
});

//for-returning-funds
route::get('availablefunds',[returnfundscontroller::class,'show']);

//for assigning hospital automatically
Route::get('hospital',[healthofficercontroller::class,'assign']);