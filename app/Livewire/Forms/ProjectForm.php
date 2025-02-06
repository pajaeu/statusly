<?php

namespace App\Livewire\Forms;

use App\Models\Project;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProjectForm extends Form
{

	public ?Project $project;

	#[Validate('required|min:6')]
	public string $name = '';

	#[Validate('required|unique:projects')]
	public string $slug = '';

	public function setProject(Project $project)
	{
		$this->project = $project;
		$this->name = $project->name;
		$this->slug = $project->slug;
	}

	public function store()
	{
		$this->validate();

		$user = auth()->user();

		if ($user->projects->count() >= 5) {
			return back()->with('error', 'You can only have 5 projects');
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

			return to_route('dashboard');
		} catch (\Exception $e) {
			DB::rollBack();

			return back();
		}

	}

	public function update()
	{
		$this->validate();

		$this->project->update($this->pull());
	}
}
