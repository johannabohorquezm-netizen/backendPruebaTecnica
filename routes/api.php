<?php

use App\Http\Controllers\Api\CargoController;
use App\Http\Controllers\Api\DepartamentoController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/departamentos', [
    DepartamentoController::class,
    'index'
]);

Route::get('/cargos', [
    CargoController::class,
    'index'
]);

Route::apiResource('usuarios', UserController::class)
    ->parameters([
        'usuarios' => 'user',
    ]);