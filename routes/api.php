<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Api\LevelController;
use App\Http\Api\TestLevelController;
use App\Http\Api\TypeObstacleController;


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

Route::resource('levels', LevelController::class);
Route::resource('test-levels', TestLevelController::class);
Route::resource('type-obstacle', TypeObstacleController::class);
