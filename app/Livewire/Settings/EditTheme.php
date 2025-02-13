<?php

namespace App\Livewire\Settings;

use Livewire\Attributes\Validate;
use Livewire\Component;

class EditTheme extends Component
{

	#[Validate('required|string')]
	public string $theme = 'default';

	public function mount()
	{
		$this->theme = current_project()->theme ?? 'default';
	}

	public function save()
	{
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
