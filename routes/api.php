<?php

<<<<<<< HEAD
use App\Http\Controllers\MenberController;
use App\Http\Controllers\PenaltyController;
use App\Http\Controllers\SonController;
use App\Models\Penalty;
=======
use App\Http\Controllers\ActivityController;
>>>>>>> 59e949d58f085f9725cd0c56d0f20bd61e7c8380
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

<<<<<<< HEAD
Route::apiResource('penalty', PenaltyController::class);
Route::apiResource('menbers', MenberController::class);
Route::apiResource('sons', SonController::class);

=======
Route::apiResource('activity',ActivityController::class);
>>>>>>> 59e949d58f085f9725cd0c56d0f20bd61e7c8380
