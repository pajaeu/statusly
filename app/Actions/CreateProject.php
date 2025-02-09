<?php

namespace App\Actions;

use Illuminate\Support\Facades\DB;

class CreateProject
{

	public function create(string $title, string $slug): bool
	{
		DB::beginTransaction();

		try {
			$user = auth()->user();

			$project = $user->projects()
				->create([
					'name' => $title,
					'slug' => $slug,
				]);

			$user->update([
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