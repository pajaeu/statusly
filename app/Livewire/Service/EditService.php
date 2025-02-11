<?php

namespace App\Livewire\Service;

use App\Models\Service;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EditService extends Component
{
	public Service $service;

	#[Validate('required')]
	public string $name;

	#[Validate('required|string')]
	public string $status;

	public function mount(Service $service)
	{
		$this->service = $service;
		$this->name = $service->name;
		$this->status = $service->status;
	}

	public function save()
	{
		$this->validate();

		$this->authorize('update', $this->service);

		$this->service->update($this->only(['name', 'status']));

		$this->dispatch('flash-message', type: 'success', message: 'Service successfully updated.');
	}

	public function render()
	{
		return view('livewire.services.edit', [
			'currentProject' => $this->service->project()
		]);
	}
}
