<?php

use App\Http\Controllers\API\V1\Student\AuthController as StudentAuthController;
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


Route::group([
    'prefix' => 'auth/student'
], function() {
    Route::controller(StudentAuthController::class)->group(function() {
        Route::post('login', 'login');
        Route::post('register', 'register');
    });
});

Route::get('/test', function() {
    return  [
        'success' => true,
        'message' => 'test endpoint working',
        'data' => null
    ];
});