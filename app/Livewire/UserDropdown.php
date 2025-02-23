<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class UserDropdown extends Component
{

	#[On('projects-updated')]
	public function updateProjectList()
	{
	}

    public function render()
    {
		$user = auth()->user();

        return view('livewire.user-dropdown', [
			'user' => $user,
			'projects' => $user->projects()->latest()->get()
		]);
    }
}
