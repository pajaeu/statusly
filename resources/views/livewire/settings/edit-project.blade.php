<div class="w-full max-w-6xl mx-auto">
    <h1 class="mb-6 font-semibold text-3xl text-slate-800">Settings</h1>
    <x-settings.tabs/>
    <h2 class="mb-4 font-semibold text-xl text-slate-800">Project settings</h2>
    <div class="bg-white rounded-lg shadow px-6 py-4">
        <form wire:submit="save">
            <div class="mb-4">
                <label for="name" class="block mb-2 text-sm text-slate-400">Name</label>
                <input type="text" wire:model="name" class="w-full p-2 border rounded-lg transition-all focus:ring-2 focus:ring-orange-500 outline-0">
                @error('name')
                    <x-input-error :message="$message"/>
                @enderror
            </div>
            <div class="mb-4">
                <label for="slug" class="block mb-2 text-sm text-slate-400">Slug</label>
                <input type="text" wire:model="slug" class="w-full p-2 border rounded-lg transition-all focus:ring-2 focus:ring-orange-500 outline-0">
                @error('slug')
                    <x-input-error :message="$message"/>
                @enderror
            </div>
            <x-button>Save changes</x-button>
        </form>
    </div>
</div>