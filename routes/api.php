<?php

use App\Http\Controllers\API\PatientController;
use App\Http\Controllers\API\CitasController;

Route::prefix('patient')->group(function (){
    Route::get('/', [PatientController::class, 'getAll']);
    Route::post('/', [PatientController::class, 'create']);
    Route::delete('/{id}', [PatientController::class, 'delete']);
    Route::get('/{id}', [PatientController::class, 'get']);
    Route::put('/{id}', [PatientController::class, 'update']);
});
Route::prefix('citas')->group(function (){
    Route::get('/', [CitasController::class, 'getAll']);
    Route::post('/', [CitasController::class, 'create']);
    Route::delete('/{id}', [CitasController::class, 'delete']);
    Route::get('/{id}', [CitasController::class, 'get']);
    Route::put('/{id}', [CitasController::class, 'update']);
});







