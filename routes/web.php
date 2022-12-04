<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PageController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('welcome');


Route::group(['prefix' => 'auth'], function() {
    Route::post('login', [AuthController::class, 'store'])->name('login')->middleware('guest');
    Route::delete('logout', [AuthController::class, 'destroy'])->name('logout')->middleware('auth');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('myprofile', [PageController::class, 'myprofile'])->name('myprofile');
});

Route::group(['middleware' => 'guest'], function() {
    
    Route::view('student/login', 'student.auth.login');
    Route::view('company/login', 'company.auth.login');
});