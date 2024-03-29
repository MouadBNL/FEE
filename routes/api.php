<?php

use App\Http\Controllers\Api\V1\Company\ProfileController as CompanyProfileController;
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
    Route::get('profile', [UserInfoController::class, 'getUserInfo']);
    Route::put('profile/auth-info', [UserInfoController::class, 'updateAuthInfo']);
    Route::put('profile/password', [UserInfoController::class, 'updatePassword']);
    Route::post('profile/picture', [UserInfoController::class, 'updatePicture']);


    /**
     * Routing Student request
     * TODO: Add middleware for type verification
     */
    Route::post('student/profile/cv', [StudentProfileController::class, 'updateCV']);
    Route::delete('student/profile/cv', [StudentProfileController::class, 'deleteCV']);

    Route::get('student/profile/contact', [StudentProfileController::class, 'getContact']);
    Route::put('student/profile/contact', [StudentProfileController::class, 'updateContact']);

    Route::put('student/profile/field', [StudentProfileController::class, 'updateField']);

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

    Route::get('student/profile/projects', [StudentProfileController::class, 'getProjects']);
    Route::put('student/profile/projects', [StudentProfileController::class, 'updateProjects']);

    Route::get('student/profile/certifications', [StudentProfileController::class, 'getCertifications']);
    Route::put('student/profile/certifications', [StudentProfileController::class, 'updateCertifications']);


    /**
     * Routing Student request
     * TODO: Add middleware for type verification
     */

    Route::get('company/profile/about', [CompanyProfileController::class, 'getAbout']);
    Route::put('company/profile/about', [CompanyProfileController::class, 'updateAbout']);

    Route::get('company/profile/description', [CompanyProfileController::class, 'getDescription']);
    Route::put('company/profile/description', [CompanyProfileController::class, 'updateDescription']);

    Route::post('company/profile/banner', [CompanyProfileController::class, 'updateBanner']);
});