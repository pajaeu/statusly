<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'verified', 'has-project']], function () {
	Route::get('/', function () {
		return view('dashboard');
	})->name('dashboard');

	Route::resource('projects', \App\Http\Controllers\ProjectController::class);
	Route::get('/projects/{id}/switch', [\App\Http\Controllers\ProjectController::class, 'switch'])->name('projects.switch');
});

