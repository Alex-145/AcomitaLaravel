<?php
use App\Http\Controllers\MenberController;
use App\Http\Controllers\PenaltyController;
use App\Http\Controllers\SonController;
use App\Models\Penalty;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PeriodController;
use App\Http\Controllers\StandController;
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

Route::apiResource('activity',ActivityController::class);
Route::apiResource('penalty', PenaltyController::class);
Route::apiResource('menbers', MenberController::class);
Route::apiResource('sons', SonController::class);
Route::apiResource('stands', StandController::class);
Route::apiResource('periods', PeriodController::class);

Route::group(['middleware' => 'api','prefix' => 'auth'], function ($router) {
    Route::post('login',[AuthController::class,'login']);
    Route::post('logout',[AuthController::class,'logout']);
    Route::post('refresh',[AuthController::class,'refresh']);
    Route::post('register',[AuthController::class,'register']);
    Route::get('me',[AuthController::class,'me']);
});
