<?php

namespace App\Livewire\Project;

use App\Models\Project;
use Livewire\Component;

class ListProject extends Component
{
	public function delete(int $id)
	{
		$project = Project::findOrFail($id);

		if (!auth()->user()->hasProject($project)) {
			abort(403);
		}

		$project->delete();

		$this->dispatch('projects-updated');
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
