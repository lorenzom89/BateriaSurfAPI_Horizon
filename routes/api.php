<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurferController;
use App\Http\Controllers\HeatController;
use App\Http\Controllers\WaveController;
use App\Http\Controllers\ScoreController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('')->group(function () {
    Route::post('/surfistas', [SurferController::class, 'store']);
    Route::get('/surfistas', [SurferController::class, 'index']);

    Route::post('/baterias', [HeatController::class, 'store']);
    Route::get('/baterias/{bateriaId}/vencedor', [HeatController::class, 'getWinner']);

    Route::post('/ondas', [WaveController::class, 'store']);

    Route::post('/notas', [ScoreController::class, 'store']);
});