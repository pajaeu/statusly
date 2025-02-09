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

	#[Validate('required|unique:projects')]
	public string $slug = '';

	public function save(CreateProjectAction $action)
	{
		$this->validate();

		if (auth()->user()->projects->count() >= 5) {
			session()->flash('danger', 'You can only have 5 projects');

			$this->redirectRoute('projects.index', navigate: true);
		}

		$action->create($this->pull('name'), $this->pull('slug'));

		$this->dispatch('projects-updated');

		$this->redirectRoute('projects.index', navigate: true);
	}

	public function updated($name, $value)
	{
		if ($name === 'name' && empty($this->slug)) {
			$this->fill(['slug' => Str::slug($value)]);
		}

		if ($name === 'slug') {
			$this->fill([
				'slug' => Str::slug($value)
			]);
		}
	}

	#[Layout('layouts.guest')]
	public function render()
	{
		return view('livewire.projects.create');
	}
}
