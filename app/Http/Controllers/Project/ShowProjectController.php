<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ShowProjectController extends Controller
{

	public function __invoke(string $slug)
	{
		$project = Project::where('slug', $slug)->firstOrFail();

		return view('projects.show', [
			'project' => $project
		]);
	}
}