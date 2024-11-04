<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AuthController;

Route::middleware([ExcludeCsrfMiddleware::class])->group(function () {
    Route::post('/customers', [CustomerController::class, 'create']);
    Route::get('/customers/{dni}', [CustomerController::class, 'show']);
    Route::delete('/customers/{dni}', [CustomerController::class, 'delete']);
});

Route::post('/auth/login', [AuthController::class, 'login']);

Route::post('/datos', function () {
    return response()->json(['message' => 'Hello World']);
});

