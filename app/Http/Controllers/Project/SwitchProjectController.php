<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Support\Facades\Gate;

class SwitchProjectController extends Controller
{

	public function __invoke(int $id)
	{
		$project = Project::findOrFail($id);

		Gate::authorize('switch', $project);

		auth()->user()->update([
			'current_project_id' => $project->id
		]);

		return back();
	}
}