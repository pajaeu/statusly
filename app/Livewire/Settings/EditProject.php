<?php

namespace App\Livewire\Settings;

use App\Models\Project;
use Illuminate\Validation\Rule;
use Livewire\Component;

class EditProject extends Component
{
	public Project $project;

	public string $name = '';

	public string $slug = '';

	public function mount()
	{
		$this->project = auth()->user()->currentProject;
		$this->name = $this->project->name;
		$this->slug = $this->project->slug;
	}

	public function save()
	{
		$this->validate([
			'name' => 'required|min:6',
			'slug' => [
				'required',
				Rule::unique('projects')->ignore($this->project)
			]
		]);

		$this->project->update($this->only(['name', 'slug']));

		session()->flash('success', 'Project updated successfully.');

		$this->dispatch('projects-updated');

		$this->redirect(back()->getTargetUrl(), true);
	}

	public function render()
	{
		return view('livewire.settings.edit-project');
	}
}
