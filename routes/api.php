<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FuelConsumptionController;
use App\Http\Controllers\EnergyConsumptionController;
use App\Http\Controllers\PetroleumDerivativeConsumptionController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/fuel-consumption', [FuelConsumptionController::class, 'store']);
Route::post('/energy-consumption', [EnergyConsumptionController::class, 'store']);
Route::post('/petroleum-derivate-consumption', [PetroleumDerivativeConsumptionController::class, 'store']);
Route::post('/travel-registration', [TravelController::class, 'store']);


Route::put('/fuel-consumption', [FuelConsumptionController::class, 'update']);


Route::get('/calculate-annual-fuel-assumption-by-category', [DashboardController::class, 'calculateAnnualFuelAssumptionByCategory']);
Route::get('/calculate-monthly-fuel-assumption', [DashboardController::class, 'calculateMonthlyFuelAssumption']);
