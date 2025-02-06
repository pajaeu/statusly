<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;

class SwitchProjectController extends Controller
{

	public function __invoke(int $id)
	{
		$project = Project::findOrFail($id);
		$user = auth()->user();

		if (!$user->hasProject($project)) {
			abort(403);
		}

		$user->update([
			'current_project_id' => $project->id
		]);

		return back();
	}
}