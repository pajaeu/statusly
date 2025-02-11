<?php

namespace App\Livewire\Service;

use App\Models\Service;
use Livewire\Component;

class ListService extends Component
{
	public function delete(int $id)
	{
		$service = Service::findOrFail($id);

		$service->delete();

		$this->dispatch('flash-message', type: 'success', message: 'Service successfully deleted.');
	}

	public function render()
	{
		$project = auth()->user()->currentProject;
		$services = $project->services;

		return view('livewire.services.list', [
			'currentProject' => $project,
			'services' => $services,
		]);
	}
}
