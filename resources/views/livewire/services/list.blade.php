<div class="w-full max-w-6xl mx-auto">
    <div class="flex items-center mb-6">
        <div class="flex items-center">
            <img src="{{ $currentProject->avatarUrl }}" class="size-10 rounded" alt="{{ $currentProject->name }}">
            <h1 class="ms-3 font-semibold text-3xl text-slate-800">Services</h1>
        </div>
        <div class="ms-auto">
            <x-button as="a" href="{{ route('services.create') }}" wire:navigte>New service</x-button>
        </div>
    </div>
    @forelse($services as $service)
        <x-services.item :service="$service" />
    @empty
        <x-empty-state message="No services created">
            <x-button as="a" href="{{ route('services.create') }}" wire:navigate class="mt-4">New service</x-button>
        </x-empty-state>
    @endforelse
</div>