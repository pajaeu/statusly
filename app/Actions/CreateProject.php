<?php

namespace App\Actions;

use App\Models\Project;
use Illuminate\Support\Facades\DB;

class CreateProject
{

	public function handle(string $name, string $slug): bool
	{
		DB::beginTransaction();

		try {
			$project = Project::create([
				'name' => $name,
				'slug' => $slug,
				'user_id' => auth()->id()
			]);

			auth()->user()->update([
				'current_project_id' => $project->id,
			]);

			DB::commit();

			return true;
		} catch (\Exception $e) {
			DB::rollBack();

			return false;
		}
	}
}