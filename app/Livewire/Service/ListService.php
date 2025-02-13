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
		return view('livewire.services.list', [
			'currentProject' => current_project(),
			'services' => current_project()->services()->latest()->get(),
		]);
	}
}
