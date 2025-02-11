<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;


class FlashMessages extends Component
{
	public array $messages = [];

	#[On('flash-message')]
	public function addMessage(string $message, string $type = 'success')
	{
		$this->messages[] = [
			'message' => $message,
			'type' => $type
		];
	}

    public function render()
    {
        return view('livewire.flash-messages');
    }
}
