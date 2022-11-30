<?php

use App\Http\Controllers\Api\V1\Student\ProfileController as StudentProfileController;
use App\Http\Controllers\Api\V1\UserInfoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware(['auth:sanctum'])->group(function() {
    Route::get('myprofile', [UserInfoController::class, 'getUserInfo']);
    Route::post('myprofile/user-info', [UserInfoController::class, 'update']);


    Route::get('student/profile/links', [StudentProfileController::class, 'getLinks']);
    Route::put('student/profile/links', [StudentProfileController::class, 'updateLinks']);

    Route::get('student/profile/hobbies', [StudentProfileController::class, 'getHobbies']);
    Route::put('student/profile/hobbies', [StudentProfileController::class, 'updateHobbies']);

    Route::get('student/profile/skills', [StudentProfileController::class, 'getSkills']);
    Route::put('student/profile/skills', [StudentProfileController::class, 'updateSkills']);

    Route::get('student/profile/languages', [StudentProfileController::class, 'getLanguages']);
    Route::put('student/profile/languages', [StudentProfileController::class, 'updateLanguages']);

    Route::get('student/profile/summary', [StudentProfileController::class, 'getSummary']);
    Route::put('student/profile/summary', [StudentProfileController::class, 'updateSummary']);

    Route::get('student/profile/experiences', [StudentProfileController::class, 'getExperiences']);
    Route::put('student/profile/experiences', [StudentProfileController::class, 'updateExperiences']);

    Route::get('student/profile/education', [StudentProfileController::class, 'getEducation']);
    Route::put('student/profile/education', [StudentProfileController::class, 'updateEducation']);

});