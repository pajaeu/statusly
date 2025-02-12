<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
		$user = auth()->user();

        return view('livewire.dashboard', [
			'user' => $user,
			'services' => $user->currentProject->services ?? [],
			'incidents' => $user->currentProject->incidents()->latest()->get() ?? []
		]);
    }
}
