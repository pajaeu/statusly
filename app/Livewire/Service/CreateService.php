<?php

namespace App\Livewire\Service;

use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateService extends Component
{
	#[Validate('required')]
	public string $name;

	#[Validate('required|string')]
	public string $status;

	public function save()
	{
		$this->validate();

		$user = auth()->user();

		$user->currentProject
			->services()
			->create($this->pull(['name', 'status']));

		$this->dispatch('flash-message', type: 'success', message: 'Service successfully created.');

		$this->redirectRoute('services.index', navigate: true);
	}

	public function render()
	{
		$project = auth()->user()->currentProject;

		return view('livewire.services.create', [
			'currentProject' => $project
		]);
	}
}
