<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/ourwork', function () {
    return view('ourwork');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/ourservice', function () {
    return view('ourservice');
});
Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/dark', function () {
    return view('dark');
});

Route::get('/home', function () {
    return view('home');
});
Route::resource('customer',CustomerController::class) ;
