<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PageController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ListingController;
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
    Route::post('register', [RegisterController::class, 'store'])->name('register')->middleware('guest');
    Route::delete('logout', [AuthController::class, 'destroy'])->name('logout')->middleware('auth');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('myprofile', [PageController::class, 'myprofile'])->name('myprofile');

    Route::get('companies', [ListingController::class, 'listCompanies'])->name('list-companies');
    Route::get('companies/{id}', [ListingController::class, 'showCompany'])->name('show-company');

    Route::get('students', [ListingController::class, 'listStudents'])->name('list-students');
    Route::get('students/{id}', [ListingController::class, 'showStudent'])->name('show-student');
});

Route::group(['middleware' => 'guest'], function() {
    Route::view('student/login', 'student.auth.login')->name('student.login');
    Route::view('company/login', 'company.auth.login')->name('company.login');
    Route::view('student/register', 'student.auth.register')->name('student.register');
});