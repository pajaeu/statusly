<?php

use App\Models\Project;

if (!function_exists('current_project')) {
	function current_project(): ?Project
	{
		return auth()->user()->currentProject;
	}
}

if (!function_exists('current_project_id')) {
	function current_project_id(): ?int
	{
		return auth()->user()->current_project_id;
	}
}