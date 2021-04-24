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

Route::get('/admin/tutorialPages/page2', [PagesController::class, 'page2'])->name('page2');
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
