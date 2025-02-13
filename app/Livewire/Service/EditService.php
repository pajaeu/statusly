<?php

namespace App\Livewire\Service;

use App\Models\Service;
use Illuminate\Validation\Rule;
use Livewire\Component;

class EditService extends Component
{
	public Service $service;

	public string $name;

	public ?string $url = null;

	public string $status;

	public function mount(Service $service)
	{
		$this->service = $service;
		$this->name = $service->name;
		$this->url = $service->url;
		$this->status = $service->status;
	}

	public function save()
	{
		$this->validate([
			'name' => 'required|string',
			'url' => Rule::when($this->url, 'required|string|url'),
			'status' => 'required|string|in:operational,maintenance,down'
		]);

		$this->authorize('update', $this->service);

		$this->service->update($this->only(['name', 'url', 'status']));

		$this->dispatch('flash-message', message: 'Service successfully updated.');
	}

	public function render()
	{
		return view('livewire.services.edit', [
			'currentProject' => $this->service->project()
		]);
	}
}
