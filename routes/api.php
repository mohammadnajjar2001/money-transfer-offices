<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OfficeController;
use App\Http\Controllers\Api\TransfersController;
use App\Http\Controllers\Api\UsersController;

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
    Route::group(['prefix' => ''], function () {
    Route::get('/get-offices', [OfficeController::class, 'index']);
    Route::post('/create-office', [OfficeController::class, 'store']);
    Route::put('/update-office/{id}', [OfficeController::class, 'update']);
    Route::delete('/delete-office/{id}', [OfficeController::class, 'destroy']);
});

Route::group(['prefix' => ''], function () {
    Route::get('/get-transfers', [TransfersController::class, 'index']);
    Route::put('/transfers/{id}', [TransfersController::class, 'update']);
    Route::post('/transfers/store', [TransfersController::class, 'store']);
    
});
Route::get('/accounts', [UsersController::class,'index']);