<div class="w-full max-w-6xl mx-auto">
    <h1 class="font-semibold text-3xl text-slate-800 mb-6">Projects</h1>
    @forelse($projects as $project)
        <x-projects.item :project="$project" />
    @empty
        <x-empty-state message="No projects created">
            <x-button as="a" href="{{ route('projects.create') }}" wire:navigate class="mt-4">New project</x-button>
        </x-empty-state>
    @endforelse
</div>