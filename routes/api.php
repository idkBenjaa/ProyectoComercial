<?php

use App\Http\Controllers\Api\ConfiguracionesController;
use Illuminate\Support\Facades\Route;

Route::apiResource('configuraciones', ConfiguracionesController::class);