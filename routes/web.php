<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\fundscontroller;

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

Route::get('/welcomepage',function(){
    return view('welcomepage');
});

Route::get('/AddHealthOfficer',function(){
    return view('AddHealthOfficer');
});
Route::view('add','addhealthofficer');
Route::post('add',[usercontroller::class,'adddata']);

Route::get('/Funds',function(){
    return view('Funds');
});
Route::view('plus','Funds');
Route::post('plus',[fundscontroller::class,'addfund']);