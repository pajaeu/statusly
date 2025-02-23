<?php

namespace App\Livewire\Project;

use App\Actions\CreateProject as CreateProjectAction;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateProject extends Component
{

	#[Validate('required|string|min:6')]
	public string $name;

	public function save(CreateProjectAction $action)
	{
		$this->validate();

		if (auth()->user()->projects->count() >= 5) {
			$this->addError('name', 'You can create only 5 projects.');

			return;
		}

		$name = $this->pull('name');

		$action->create($name, Str::slug($name . '-' . uniqid()));

		$this->dispatch('projects-updated');

		$this->redirectRoute('services.index', navigate: true);
	}

	#[Layout('layouts.guest')]
	public function render()
	{
		return view('livewire.projects.create');
	}
}
