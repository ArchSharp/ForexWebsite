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

Route::get('/auth/resend_verification_code', [MainController::class, 'resendverification'])->name('auth.resend_verification_code');
Route::post('/auth/resend', [MainController::class, 'resend'])->name('auth.resend');

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
    Route::get('/Forex/Definition', [PagesController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/Forex/Major+Currencies', [PagesController::class, 'page2'])->name('page2');
    Route::get('/Forex/Currency+Pairs', [PagesController::class, 'page3'])->name('page3');
    Route::get('/Forex/Forex+Terminologies', [PagesController::class, 'page4'])->name('page4');
    Route::get('/Forex/Forex+Order+Types', [PagesController::class, 'page5'])->name('page5');
    Route::get('/Forex/Forex+Trading+Session', [PagesController::class, 'page6'])->name('page6');
    Route::get('/Forex/Forex+Participants', [PagesController::class, 'page7'])->name('page7');
    Route::get('/Forex/Account+Metrics', [PagesController::class, 'page8'])->name('page8');
    Route::get('/Forex/Brokers', [PagesController::class, 'page9'])->name('page9');
    Route::get('/Forex/Factors+for+selecting+broker', [PagesController::class, 'page10'])->name('page10');
    Route::get('/Forex/How+to+open+forex+account', [PagesController::class, 'page11'])->name('page11');
    Route::get('/Forex/Market+Analysis', [PagesController::class, 'page12'])->name('page12');
    Route::get('/Forex/Vedio+Recap', [PagesController::class, 'page13'])->name('page13');
    Route::get('/Forex/Remarks', [PagesController::class, 'page14'])->name('page14');
    Route::get('/Forex/Support+and+Resistance', [PagesController::class, 'page15'])->name('page15');
    Route::get('/Forex/Trend+and+Trend+channels', [PagesController::class, 'page16'])->name('page16');
    Route::get('/Forex/Candlestick+pattern', [PagesController::class, 'page17'])->name('page17');
    Route::get('/Forex/Chart+Indicators', [PagesController::class, 'page18'])->name('page18');
    Route::get('/Forex/Chart+Patterns', [PagesController::class, 'page19'])->name('page19');
    Route::get('/Forex/Divergence', [PagesController::class, 'page20'])->name('page20');
    Route::get('/Forex/Fundamental+Analysis', [PagesController::class, 'page21'])->name('page21');
    Route::get('/Forex/Sentimental+Analysis', [PagesController::class, 'page22'])->name('page22');
    Route::get('/Forex/Correlation', [PagesController::class, 'page23'])->name('page23');
    Route::get('/Forex/Risk+Management', [PagesController::class, 'page24'])->name('page24');
    Route::get('/Forex/Overall+Recap', [PagesController::class, 'page25'])->name('page25');
    
});

Route::get('home', [contactController::class, 'index']);
Route::post('store-form', [contactController::class, 'store']);
/*<!--Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/

//routes for uploading
//Route::get("MainController","auth.sendJob");
Route::get('/', [MainController::class, 'home'])->name('home');
Route::post('/auth/sendJob', [MainController::class, 'sendJob'])->name('auth.sendJob');


