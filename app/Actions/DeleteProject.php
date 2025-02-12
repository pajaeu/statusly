<?php

namespace App\Actions;

use App\Models\Project;
use Illuminate\Support\Facades\DB;

class DeleteProject
{

	public function handle(Project $project): bool
	{
		DB::beginTransaction();

		try {
			$user = auth()->user();

			$project->delete();

			if ($user->current_project_id === $project->id) {
				$user->update([
					'current_project_id' => $user->projects()->latest()->first()->id ?? null,
				]);
			}

			DB::commit();

			return true;
		} catch (\Exception $e) {
			DB::rollback();

			return false;
		}
	}
}