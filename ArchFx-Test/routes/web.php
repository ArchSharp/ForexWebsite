<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PagesController;
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
/*
Route::get('/', function () {
    return view('home');
});
*/

Route::get('/auth/reset_password', [MainController::class, 'resetpassword'])->name('auth.resetpassword');
Route::post('/auth/resetpass', [MainController::class, 'resetpass'])->name('auth.resetpass');
Route::get('/auth/verify-passreset/{verification_code}', [MainController::class, 'verify_passreset'])->name('verify_passreset');

//verify email and password reset
Route::get('/auth/verify-email/{verification_code}', [MainController::class, 'verify_email'])->name('verify_email');
Route::get('/auth/resetpasswordform', [MainController::class, 'resetpasswordform'])->name('auth.resetpasswordform');

Route::get('/admin/page2', [PagesController::class, 'page2'])->name('page2');
Route::get('/admin/dashboard', [PagesController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/register', [MainController::class, 'home'])->name('home');
Route::post('/auth/save', [MainController::class, 'save'])->name('auth.save');
Route::post('/auth/check', [MainController::class, 'check'])->name('auth.check');
Route::get('/auth/logout', [MainController::class, 'logout'])->name('auth.logout');

Route::get('home', [contactController::class, 'index']);
Route::post('store-form', [contactController::class, 'store']);


Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/auth/login', [MainController::class, 'login'])->name('auth.login');
    Route::get('/auth/register', [MainController::class, 'register'])->name('auth.register');
    Route::get('/admin/dashboard', [MainController::class, 'dashboard'])->name('admin.dashboard');
});

Route::get('home', [contactController::class, 'index']);
Route::post('store-form', [contactController::class, 'store']);
/*<!--Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/


