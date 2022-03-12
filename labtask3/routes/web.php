<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registrationController;





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
    return view('/login');
});


Route::get('/home/user', [userController::class, 'index'])->name('home');
Route::get('/contactus', [userController::class, 'contactus'])->name('contactus');

Route::get('/home/admin', [adminController::class, 'index'])->name('homeAdmin');
Route::get('/contactus', [adminController::class, 'contactus'])->name('contactus');
Route::get('/userList', [adminController::class, 'userList'])->name('userList')->middleware('validuser');
Route::get('/addUser', [adminController::class, 'addUser'])->name('addUser');
Route::get('/editUser/{id}', [adminController::class, 'editUser']);
Route::get('/deleteUser/{id}', [adminController::class, 'deleteUser']);
Route::post('/editUser', [adminController::class, 'editUser'])->name('editUser');
Route::post('/deleteUser', [adminController::class, 'deleteUser'])->name('deleteUser');
Route::get('/logout', [loginController::class, 'logout'])->name('logout');


Route::get('/registration', [registrationController::class, 'registration'])->name('registration');
Route::get('/login', [loginController::class, 'login'])->name('login');
Route::post('/registration', [registrationController::class, 'registrationsubmit'])->name('registration');
Route::post('/login', [loginController::class, 'loginsubmit'])->name('login');