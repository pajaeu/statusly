<?php

namespace App\Livewire\Project;

use App\Models\Project;
use Livewire\Component;

class ShowProject extends Component
{
	public Project $project;

    public function render()
    {
		$incidents = $this->project->incidents()->latest()->get();

        return view('livewire.projects.show', [
			'incidents' => $incidents
		]);
    }
}
