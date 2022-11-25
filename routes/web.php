<?php

use App\Http\Controllers\Auth\PageController;
use App\Http\Controllers\Student\Auth\LoginController as StudentLoginController;
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

Route::group(['middleware' => 'auth'], function(){
    /**
     * Routing basic Auth pages (dashboard, profile, ...)
     */
    Route::get('dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('myprofile', [PageController::class, 'myprofile'])->name('myprofile');
});

Route::group(['middleware' => 'guest'], function() {
    Route::get('student/login', [StudentLoginController::class, 'create'])->name('student.login.create');
    Route::get('student/login', [StudentLoginController::class, 'create'])->name('login');
    Route::post('student/login', [StudentLoginController::class, 'store'])->name('student.login.store');
});