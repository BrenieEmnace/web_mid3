<?php

use App\Http\Controllers\API\UsersController;
use App\Http\Controllers\API\RegistrationController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('login', [UsersController::class, 'login']);
Route::post('register', [UsersController::class, 'register']);

Route::get('get-all-registrations', [RegistrationController::class, 'getAllRegisters']);
Route::get('get-registration', [RegistrationController::class, 'getRegister']);
Route::get('search-registration', [RegistrationController::class, 'searchRegister']);