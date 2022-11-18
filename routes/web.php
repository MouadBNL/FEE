<?php

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
});



Route::get('dashboard', function(){
    return redirect()->route('student.dashboard');
})->middleware('auth');

Route::group(['middleware' => 'guest'], function() {
    Route::get('student/login', [StudentLoginController::class, 'create'])->name('student.login.create');
    Route::get('student/login', [StudentLoginController::class, 'create'])->name('login');
    Route::post('student/login', [StudentLoginController::class, 'store'])->name('student.login.store');
});


Route::view('student/dashboard', 'student.dashboard')->middleware('auth')->name('student.dashboard');