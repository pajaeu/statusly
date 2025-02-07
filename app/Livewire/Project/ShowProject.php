<?php

namespace App\Livewire\Project;

use App\Models\Project;
use Livewire\Component;

class ShowProject extends Component
{
	public Project $project;

    public function render()
    {
        return view('livewire.projects.show');
    }
}
