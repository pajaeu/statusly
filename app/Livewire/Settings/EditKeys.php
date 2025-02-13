<?php

namespace App\Livewire\Settings;

use App\Models\ApiKey;
use Illuminate\Support\Str;
use Livewire\Component;

class EditKeys extends Component
{

	public string $name;

	public function create()
	{
		$this->validate([
			'name' => 'required|string'
		]);

		ApiKey::create([
			'name' => $this->pull('name'),
			'token' => Str::random(32),
			'project_id' => current_project_id()
		]);

		$this->dispatch('flash-message', message: 'API Key successfully created.');

		$this->dispatch('close-modal');
	}

	public function delete(int $id)
	{
		$key = ApiKey::findOrFail($id);

		$key->delete();
	}

    public function render()
    {
        return view('livewire.settings.edit-keys', [
			'keys' => current_project()->apiKeys ?? []
		]);
    }
}
