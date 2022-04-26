<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeliverymanController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\DeliverylistController;

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
    return view('/home');
});

Route::get('/home', [DeliverymanController::class, 'index'])->name('home');
Route::get('/registration', [DeliverymanController::class, 'registration'])->name('registration');
Route::get('/login', [DeliverymanController::class, 'login'])->name('login');
//Route::get('/deliverylist', [DeliverymanController::class, 'deliverylist'])->name('deliverylist');
Route::get('/logout', [DeliverymanController::class, 'index'])->name('login');


Route::post('/registration', [DeliverymanController::class, 'registrationsubmit'])->name('registrationsubmit');
Route::post('/login', [DeliverymanController::class, 'loginsubmit'])->name('loginsubmit');

Route::get('/send-email',[MailController::class,'sendEmail']);

Route::get('/list',[DeliverylistController::class,'show']);
