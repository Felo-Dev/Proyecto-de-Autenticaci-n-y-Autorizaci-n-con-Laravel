<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AuthController;

Route::post('/customers', [CustomerController::class, 'create']);
Route::get('/customers/{dni}', [CustomerController::class, 'show']);
Route::delete('/customers/{dni}', [CustomerController::class, 'delete']);

Route::post('/auth/login', [AuthController::class, 'login']);

