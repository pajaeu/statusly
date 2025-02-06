<?php

namespace App\Livewire\Project;

use App\Models\Project;
use Livewire\Component;

class ListProject extends Component
{
	public function delete(int $id)
	{
		$project = Project::findOrFail($id);

		$project->delete();

		$this->dispatch('projects-updated');
	}

	public function render()
	{
		return view('livewire.projects.list', [
			'projects' => Project::all()
		]);
	}
}
