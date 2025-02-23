<?php

namespace App\Livewire\Settings;

use App\Models\User;
use Livewire\Component;

class EditProfile extends Component
{

	public User $user;

	public string $name;

	public string $current_password;

	public string $password;

	public string $password_confirmation;

	public function mount()
	{
		$this->user = auth()->user();
		$this->name = $this->user->name;
	}

	public function save()
	{
		$this->validate([
			'name' => 'required|string|min:3',
		]);

		$this->user->update($this->only(['name']));

		$this->dispatch('flash-message', message: 'Profile successfully updated.');
	}

	public function changePassword()
	{
		$this->validate([
			'current_password' => 'required|current_password:web',
			'password' => 'required|min:6|confirmed',
		]);

		$this->user->update($this->only(['password']));

		$this->dispatch('flash-message', message: 'Password successfully changed.');

		$this->reset(['current_password', 'password', 'pasword_confirmation']);
	}

    public function render()
    {
        return view('livewire.settings.edit-profile');
    }
}
