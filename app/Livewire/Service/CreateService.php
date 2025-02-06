<?php

namespace App\Livewire\Service;

use App\Livewire\Forms\ServiceForm;
use Livewire\Component;

class CreateService extends Component
{
	public ServiceForm $form;

	public function save()
	{
		$this->form->store();

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
