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

		session()->flash('success', 'Theme updated successfully.');

		$this->redirectRoute('settings.theme', navigate: true);
	}

    public function render()
    {
        return view('livewire.settings.edit-theme');
    }
}
