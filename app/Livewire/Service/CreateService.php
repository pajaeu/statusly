<?php

namespace App\Livewire\Service;

use Illuminate\Validation\Rule;
use Livewire\Component;

class CreateService extends Component
{

	public string $name;

	public ?string $url = null;

	public string $status;

	public function save()
	{
		$this->validate([
			'name' => 'required|string',
			'url' => Rule::when($this->url, 'required|string|url'),
			'status' => 'required|string|in:operational,maintenance,down'
		]);

		$user = auth()->user();

		$user->currentProject
			->services()
			->create($this->pull(['name', 'url', 'status']));

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
