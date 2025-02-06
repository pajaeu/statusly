<?php

namespace App\Livewire\Forms;

use App\Models\Service;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ServiceForm extends Form
{

	public ?Service $service;

	#[Validate('required')]
	public string $name = '';

	public function setProject(Service $service)
	{
		$this->service = $service;
	}

	public function store()
	{
		$this->validate();

		$user = auth()->user();

		$user->currentProject
			->services()
			->create($this->only('name'));
	}

	public function update()
	{
		$this->validate();

		$this->service->update($this->pull());
	}
}
