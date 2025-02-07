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

	#[Validate('required|string')]
	public string $status = 'operational';

	public function setProject(Service $service)
	{
		$this->service = $service;
		$this->status = $service->status;
	}

	public function store()
	{
		$this->validate();

		$user = auth()->user();

		sleep(2);

		$user->currentProject
			->services()
			->create($this->only('name', 'status'));
	}

	public function update()
	{
		$this->validate();

		$this->service->update($this->pull());
	}
}
