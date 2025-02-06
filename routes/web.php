<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'verified', 'has-project']], function () {
	Route::view('/', 'dashboard')->name('dashboard');

	Route::get('/projects', \App\Livewire\Project\ListProject::class)->name('projects.index');
	Route::get('/projects/create', \App\Livewire\Project\CreateProject::class)->name('projects.create');
	Route::get('/projects/{id}/switch', [\App\Http\Controllers\ProjectController::class, 'switch'])->name('projects.switch');
});

