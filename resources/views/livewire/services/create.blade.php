<div class="w-full max-w-6xl mx-auto">
    <div class="flex items-center mb-6">
        <img src="{{ $currentProject->avatarUrl }}" class="size-10 rounded" alt="{{ $currentProject->name }}">
        <h1 class="ms-3 font-semibold text-3xl text-slate-800">New service</h1>
    </div>
    <div class="bg-white rounded-lg shadow px-6 py-4 mb-6">
        <form wire:submit="save">
            <div class="mb-4">
                <label for="name" class="block mb-2 text-sm text-slate-400">Name</label>
                <input type="text" wire:model="form.name" class="w-full p-2 border rounded-lg transition-all focus:ring-2 focus:ring-orange-500 outline-0">
                @error('form.name')
                    <x-input-error :message="$message"/>
                @enderror
            </div>
            <x-button>Save</x-button>
        </form>
    </div>
</div>