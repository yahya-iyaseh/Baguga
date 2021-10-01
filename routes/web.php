<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\receivableController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CustomerController;

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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/user', UserController::class);
Route::get('/dash', function(){
    return view('dashboard');
});
Route::resource('/receivable', receivableController::class);
Route::resource('/receipt', ReceiptController::class);

Route::resource('/project', ProjectController::class);
Route::resource('/customer', CustomerController::class);
Route::get('customer/delete/{customer_id}','App\Http\Controllers\CustomerController@deletecustomer')->name('customer.delete');
Route::get('receivable/delete/{receivable_id}','App\Http\Controllers\receivableController@deletereceivable')->name('receivable.delete');
