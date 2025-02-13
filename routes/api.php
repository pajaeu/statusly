<?php

use App\Http\Controllers\Api\IncidentController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\TestController;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'api.'], function () {
	Route::get('/', TestController::class)->name('test');

	Route::apiResource('services', ServiceController::class);
	Route::apiResource('incidents', IncidentController::class);
});

