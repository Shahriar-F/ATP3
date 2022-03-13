<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeliverymanController;

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


Route::post('/registration', [DeliverymanController::class, 'registrationsubmit'])->name('registrationsubmit');
Route::post('/login', [DeliverymanController::class, 'loginsubmit'])->name('loginsubmit');
