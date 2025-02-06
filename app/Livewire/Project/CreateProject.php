<?php

namespace App\Livewire\Project;

use App\Livewire\Forms\ProjectForm;
use Illuminate\Support\Str;
use Livewire\Component;

class CreateProject extends Component
{
	public ProjectForm $form;

	public function save()
	{
		$this->form->store();

		$this->dispatch('projects-updated');

		$this->redirectRoute('projects.index');
	}

	public function updated($name, $value)
	{
		if ($name === 'form.name' && empty($this->form->slug)) {
			$this->form->fill([
				'slug' => Str::slug($value)
			]);
		}

		if ($name === 'form.slug') {
			$this->form->fill([
				'slug' => Str::slug($value)
			]);
		}
	}
	
    public function render()
    {
        return view('livewire.projects.create');
    }
}
