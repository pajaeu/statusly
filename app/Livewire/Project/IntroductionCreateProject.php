<?php

namespace App\Livewire\Project;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class IntroductionCreateProject extends Component
{

	#[Validate('required|min:6')]
	public string $name = '';

	public function save()
	{
		$this->validate();

		DB::beginTransaction();

		try {
			$user = auth()->user();

			$project = $user->projects()
				->create([
					'name' => $this->name,
					'slug' => Str::slug($this->name . '-' . uniqid()),
				]);

			$user->update([
				'current_project_id' => $project->id,
			]);

			DB::commit();
		} catch (\Exception $e) {
			DB::rollBack();
		}

		$this->redirectRoute('dashboard', navigate: true);
	}

	#[Layout('layouts.guest')]
	public function render()
	{
		return view('livewire.projects.introduction');
	}
}
