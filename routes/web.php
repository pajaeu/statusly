<?php

use App\Http\Controllers\Project\SwitchProjectController;
use App\Livewire\Dashboard;
use App\Livewire\Project\CreateProject;
use App\Livewire\Project\ListProject;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'verified', 'has-project']], function () {
	Route::get('/', Dashboard::class)->name('dashboard');

	Route::get('/projects', ListProject::class)->name('projects.index');
	Route::get('/projects/create', CreateProject::class)->name('projects.create');
	Route::get('/projects/{id}/switch', SwitchProjectController::class)->name('projects.switch');
});

