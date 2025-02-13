<x-slot:title>New service | statusly</x-slot:title>

<div class="w-full max-w-6xl mx-auto">
    <x-projects.current-heading heading="New service" class="mb-6"/>
    <div class="bg-white rounded-lg shadow px-6 py-4 mb-6">
        <form wire:submit="save">
            <div class="mb-4">
                <label for="name" class="block mb-2 text-sm text-slate-400">Name</label>
                <input type="text" wire:model="name" class="w-full p-2 border rounded-lg transition-all focus:ring-2 focus:ring-orange-500 outline-0">
                @error('name')
                    <x-input-error :message="$message"/>
                @enderror
            </div>
            <div class="mb-4">
                <label for="url" class="block mb-2 text-sm text-slate-400">URL</label>
                <input type="text" wire:model="url" class="w-full p-2 border rounded-lg transition-all focus:ring-2 focus:ring-orange-500 outline-0">
                @error('url')
                    <x-input-error :message="$message"/>
                @enderror
            </div>
            <x-services.status-input class="mb-4"/>
            <x-button>Add service</x-button>
            <x-secondary-button as="a" href="{{ route('services.index') }}" wire:navigate>Cancel</x-secondary-button>
        </form>
    </div>
</div>