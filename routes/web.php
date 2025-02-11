<?php

use App\Http\Controllers\Project\ShowProjectController;
use App\Http\Controllers\Project\SwitchProjectController;
use App\Livewire\Dashboard;
use App\Livewire\Project\CreateProject;
use App\Livewire\Service\CreateService;
use App\Livewire\Service\ListService;
use App\Livewire\Settings\EditTheme;
use App\Livewire\Settings\EditProject;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'verified', 'has-project']], function () {
	Route::get('/', Dashboard::class)->name('dashboard');

	Route::get('/projects/create', CreateProject::class)->name('projects.create');
	Route::get('/projects/{id}/switch', SwitchProjectController::class)->name('projects.switch');

	Route::get('/services', ListService::class)->name('services.index');
	Route::get('/services/create', CreateService::class)->name('services.create');

	Route::group(['prefix' => 'settings', 'as' => 'settings.'], function () {
		Route::get('/projects', EditProject::class)->name('project');
		Route::get('/theme', EditTheme::class)->name('theme');
	});
});

Route::get('/@{slug}', ShowProjectController::class)->name('projects.show');