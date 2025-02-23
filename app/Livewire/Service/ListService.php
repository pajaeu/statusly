<?php

namespace App\Livewire\Service;

use App\Models\Service;
use Illuminate\Validation\Rule;
use Livewire\Component;

class ListService extends Component
{

	public string $name;

	public ?string $url = null;

	public string $status;

	public function save()
	{
		$this->validate([
			'name' => 'required|string|min:3|max:255',
			'url' => Rule::when($this->url, 'required|string|url'),
			'status' => 'required|string|in:operational,maintenance,down'
		]);

		Service::create([
			'name' => $this->pull('name'),
			'url' => $this->pull('url'),
			'status' => $this->pull('status'),
			'project_id' => current_project_id()
		]);

		$this->dispatch('flash-message', message: 'Service successfully created.');

		$this->dispatch('close-modal');
	}

	public function delete(int $id)
	{
		$service = Service::findOrFail($id);

		$service->delete();

		$this->dispatch('flash-message', message: 'Service successfully deleted.');
	}

	public function render()
	{
		return view('livewire.services.list', [
			'currentProject' => current_project(),
			'services' => current_project()->services()->latest()->get(),
		]);
	}
}
