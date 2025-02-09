<?php

namespace App\Livewire\Project;

use App\Models\Project;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ListProject extends Component
{
	public function delete(int $id)
	{
		$project = Project::findOrFail($id);
		$user = auth()->user();

		$this->authorize('delete', $project);

		DB::beginTransaction();;

		try {
			$project->delete();

			if ($user->current_project_id === $project->id) {
				$user->update([
					'current_project_id' => $user->projects()->latest()->first()->id ?? null,
				]);
			}

			DB::commit();

			$this->dispatch('projects-updated');
		} catch (\Exception $e) {
			DB::rollback();
		}
	}

	public function render()
	{
		$projects = auth()->user()
			->projects()
			->orderBy('created_at', 'desc')
			->get();

		return view('livewire.projects.list', [
			'projects' => $projects,
		]);
	}
}
