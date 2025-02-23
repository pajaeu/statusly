<?php

namespace App\Livewire\Incident;

use App\Models\Incident;
use App\Models\Service;
use Illuminate\Validation\Rule;
use Livewire\Component;

class ListIncident extends Component
{
	public array $services;
	public int $service;
	public string $message;

	public function mount()
	{
		$this->services = Service::where('project_id', current_project_id())->pluck('name', 'id')->toArray();
	}

	public function create()
	{
		$this->validate([
			'service' => [
				'required',
				'integer',
				Rule::in(array_keys($this->services)),
			],
			'message' => 'required|string',
		]);

		Incident::create([
			'service_id' => $this->pull('service'),
			'project_id' => current_project_id(),
			'message' => $this->pull('message')
		]);

		$this->dispatch('flash-message', message: 'Incident successfully logged.');

		$this->dispatch('close-modal');
	}

	public function delete(int $id)
	{
		$incident = Incident::findOrFail($id);

		$incident->delete();

		$this->dispatch('flash-message', message: 'Incident successfully deleted.');
	}

	public function render()
	{
		return view('livewire.incidents.list', [
			'incidents' => Incident::where('project_id', current_project_id())->with('service')->latest()->get()
		]);
	}
}
