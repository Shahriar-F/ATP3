<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/home', [StudentController::class, 'index'])->name('home');
Route::get('/registration', [StudentController::class, 'registration'])->name('registration');
Route::get('/login', [StudentController::class, 'login'])->name('login');
Route::get('/contactus', [StudentController::class, 'contactus'])->name('contactus');

Route::post('/registration', [StudentController::class, 'registrationsubmit'])->name('registrationsubmit');
Route::post('/login', [StudentController::class, 'loginsubmit'])->name('loginsubmit');
Route::post('/contactus', [StudentController::class, 'contactus'])->name('contactus');