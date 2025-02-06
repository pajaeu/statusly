<?php

use App\Http\Controllers\Project\SwitchProjectController;
use App\Livewire\Dashboard;
use App\Livewire\Project\CreateProject;
use App\Livewire\Project\ListProject;
use App\Livewire\Service\CreateService;
use App\Livewire\Service\ListService;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'verified', 'has-project']], function () {
	Route::get('/', Dashboard::class)->name('dashboard');

	Route::get('/projects', ListProject::class)->name('projects.index');
	Route::get('/projects/create', CreateProject::class)->name('projects.create');
	Route::get('/projects/{id}/switch', SwitchProjectController::class)->name('projects.switch');

	Route::get('/services', ListService::class)->name('services.index');
	Route::get('/services/create', CreateService::class)->name('services.create');
});

