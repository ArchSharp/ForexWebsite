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
//route for saving updating new password in database
Route::post('/auth/savenewpassword', [MainController::class, 'savenewpassword'])->name('auth.savenewpassword');
//route for password resetting form
Route::get('/auth/resetpasswordform', [MainController::class, 'resetpasswordform'])->name('auth.resetpasswordform');


//route for sending verification mail for email address and resetting of password 
Route::get('/auth/verify-email/{verification_code}', [MainController::class, 'verify_email'])->name('verify_email');
Route::get('/auth/verify-passreset/{verification_code}', [MainController::class, 'verify_passreset'])->name('verify_passreset');



//route for new user
Route::get('/', [MainController::class, 'home'])->name('home');
Route::post('/auth/save', [MainController::class, 'save'])->name('auth.save');
Route::post('/auth/check', [MainController::class, 'check'])->name('auth.check');
Route::get('/auth/logout', [MainController::class, 'logout'])->name('auth.logout');
Route::get('/auth/logoutpass', [MainController::class, 'logoutpass'])->name('auth.logoutpass');

Route::get('home', [contactController::class, 'index']);
Route::post('store-form', [contactController::class, 'store']);


//designing verification mail
Route::get('/layouts/mail/vmail', [PagesController::class, 'vmail'])->name('vmail');

Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/auth/login', [MainController::class, 'login'])->name('auth.login');
    Route::get('/auth/register', [MainController::class, 'register'])->name('auth.register');

    //only accessible to registered and signed in user
    Route::get('/admin/dashboard', [MainController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/page2', [PagesController::class, 'page2'])->name('page2');
    Route::get('/admin/page3', [PagesController::class, 'page3'])->name('page3');
    Route::get('/admin/page4', [PagesController::class, 'page4'])->name('page4');
    Route::get('/admin/page5', [PagesController::class, 'page5'])->name('page5');
    Route::get('/admin/page6', [PagesController::class, 'page6'])->name('page6');
    Route::get('/admin/page7', [PagesController::class, 'page7'])->name('page7');
    Route::get('/admin/page8', [PagesController::class, 'page8'])->name('page8');
    Route::get('/admin/page9', [PagesController::class, 'page9'])->name('page9');
    Route::get('/admin/page10', [PagesController::class, 'page10'])->name('page10');
    Route::get('/admin/page11', [PagesController::class, 'page11'])->name('page11');
    Route::get('/admin/page12', [PagesController::class, 'page12'])->name('page12');
    Route::get('/admin/page13', [PagesController::class, 'page13'])->name('page13');
    Route::get('/admin/page14', [PagesController::class, 'page14'])->name('page14');
    
});

Route::get('home', [contactController::class, 'index']);
Route::post('store-form', [contactController::class, 'store']);
/*<!--Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/

//routes for uploading
//Route::get("MainController","auth.sendJob");
Route::get('/', [MainController::class, 'home'])->name('home');
Route::post('/auth/sendJob', [MainController::class, 'sendJob'])->name('auth.sendJob');


