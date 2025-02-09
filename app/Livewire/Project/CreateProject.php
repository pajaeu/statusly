<?php

namespace App\Livewire\Project;

use App\Actions\CreateProject as CreateProjectAction;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateProject extends Component
{

	#[Validate('required|min:6')]
	public string $name = '';

	public function save(CreateProjectAction $action)
	{
		$this->validate();

		if (auth()->user()->projects->count() >= 5) {
			session()->flash('danger', 'You can only have 5 projects');

			$this->redirectRoute('projects.index', navigate: true);
		}

		$name = $this->pull('name');

		$action->create($name, Str::slug($name . '-' . uniqid()));

		$this->dispatch('projects-updated');

		$this->redirectRoute('projects.index', navigate: true);
	}

	#[Layout('layouts.guest')]
	public function render()
	{
		return view('livewire.projects.create');
	}
}
