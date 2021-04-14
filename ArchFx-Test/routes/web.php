<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;
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

// from home page direct to register page
Route::get('/', function () {
    return view('register');
})->name('gotoRegPage');
// from register page direct to login page
Route::get('/register', function () {
    return view('home');
})->name('gotoLoginPage');


Route::get('home', [contactController::class, 'index']);
Route::post('store-form', [contactController::class, 'store']);
/*<!--Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
