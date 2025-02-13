<?php

namespace App\Livewire\Service;

use App\Models\Service;
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

		Service::create([
			'name' => $this->pull('name'),
			'url' => $this->pull('url'),
			'status' => $this->pull('status'),
			'project_id' => current_project_id()
		]);

		$this->dispatch('flash-message', type: 'success', message: 'Service successfully created.');

		$this->redirectRoute('services.index', navigate: true);
	}

	public function render()
	{
		return view('livewire.services.create', [
			'currentProject' => current_project()
		]);
	}
}
