<div class="w-full max-w-6xl mx-auto">
    <div class="flex items-center mb-6">
        <h1 class="font-semibold text-3xl text-slate-800">Projects</h1>
        <div class="ms-auto">
            <x-button as="a" href="{{ route('projects.create') }}" wire:navigte>New project</x-button>
        </div>
    </div>
    @forelse($projects as $project)
        <x-projects.item :project="$project" />
    @empty
        <x-empty-state message="No projects created">
            <x-button as="a" href="{{ route('projects.create') }}" wire:navigate class="mt-4">New project</x-button>
        </x-empty-state>
    @endforelse
</div>