<?php

namespace App\Livewire\Project;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateProject extends Component
{

	#[Validate('required|min:6')]
	public string $name = '';

	#[Validate('required|unique:projects')]
	public string $slug = '';

	public function save()
	{
		$this->validate();

		$user = auth()->user();

		if ($user->projects->count() >= 5) {
			session()->flash('danger', 'You can only have 5 projects');

			$this->redirectRoute('projects.index', navigate: true);
		}

		DB::beginTransaction();;

		try {
			$project = $user->projects()
				->create(
					$this->pull(['name', 'slug'])
				);

			$user->update([
				'current_project_id' => $project->id
			]);

			DB::commit();
		} catch (\Exception $e) {
			DB::rollBack();
		}

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

	public function render()
	{
		return view('livewire.projects.create');
	}
}
