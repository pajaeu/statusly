<?php

namespace App\Livewire\Settings;

use Livewire\Attributes\Validate;
use Livewire\Component;

class EditTheme extends Component
{

	#[Validate('required|string|in:default,pink,green,blue,dark')]
	public string $theme = 'default';

	public function mount()
	{
		$this->theme = current_project()->theme ?? 'default';
	}

	public function save()
	{
		$this->validate();

		current_project()->update([
			'theme' => $this->theme,
		]);

		$this->dispatch('flash-message', message: 'Theme successfully updated.');
	}

    public function render()
    {
        return view('livewire.settings.edit-theme');
    }
}
