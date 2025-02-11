<div class="w-full max-w-6xl mx-auto">
    <div class="flex items-center mb-6">
        <x-projects.current-heading heading="Services"/>
        <div class="ms-auto">
            <x-button as="a" href="{{ route('services.create') }}" wire:navigate>New service</x-button>
        </div>
    </div>
    @forelse($services as $service)
        <div wire:key="{{ $service->id }}">
            <x-services.item :service="$service"/>
        </div>
    @empty
        <x-empty-state message="No services created">
            <x-button as="a" href="{{ route('services.create') }}" wire:navigate class="mt-4">New service</x-button>
        </x-empty-state>
    @endforelse
</div>