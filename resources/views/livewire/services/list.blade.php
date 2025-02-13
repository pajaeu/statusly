<x-slot:title>Services | statusly</x-slot:title>

<div class="w-full max-w-6xl mx-auto">
    <div class="flex items-center mb-6">
        <x-projects.current-heading heading="Services"/>
        <div class="ms-auto">
            <x-modal title="New service">
                <x-slot:toggle>
                    <x-button>New service</x-button>
                </x-slot:toggle>
                <x-slot:body>
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
                        <x-secondary-button @click="modalOpen = false">Cancel</x-secondary-button>
                    </form>
                </x-slot:body>
            </x-modal>
        </div>
    </div>
    @forelse($services as $service)
        <div wire:key="{{ $service->id }}">
            <x-services.item :service="$service"/>
        </div>
    @empty
        <x-empty-state message="You don't have any Services yet."></x-empty-state>
    @endforelse
</div>