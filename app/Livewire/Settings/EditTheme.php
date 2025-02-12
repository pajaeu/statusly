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
		$this->theme = auth()->user()->currentProject->theme ?? 'default';
	}

	public function save()
	{
		auth()->user()->currentProject->update([
			'theme' => $this->theme,
		]);

		$this->dispatch('flash-message', type: 'success', message: 'Theme successfully updated.');
	}

    public function render()
    {
        return view('livewire.settings.edit-theme');
    }
}
