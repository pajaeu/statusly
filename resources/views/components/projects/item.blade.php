@props([
	'project'
])

@php($currentProject = auth()->user()->currentProject)

<div x-data="{ open:false }" class="relative">
    <div @click="open = !open" class="block w-full p-4 border border-slate-200 rounded-md shadow bg-white hover:border-slate-300 hover:shadow-lg cursor-pointer transition-colors transition-shadow mb-4" wire:key="{{ $project->id }}">
        <div class="flex items-center">
            <div class="relative size-8 me-4">
                @if($project->id === auth()->user()->currentProject?->id)
                    <span class="absolute -top-1 -right-1 size-3 rounded-full bg-green-500"></span>
                @endif
                <img src="{{ $project->avatarUrl }}" class="w-full h-full rounded" alt="{{ $project->name }}">
            </div>
            <div>
                <div class="mb-0.5 text-slate-700 font-medium">{{ $project->name }}</div>
                <div class="text-slate-500 text-sm">created {{ $project->created_at->diffForHumans() }}</div>
            </div>
            <div class="ms-auto flex items-center">
                @if($project->id === auth()->user()->currentProject?->id)
                    <span class="me-4 text-sm text-green-500">currently selected</span>
                @endif
                <button wire:click="delete({{ $project->id }})" wire:confirm="Are you sure you want to delete this project?" class="text-red-400 hover:text-red-600 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div x-show="open" x-on:click.outside="open = false" class="absolute z-30 top-full left-0 mt-2 py-2 rounded bg-white border border-slate-200 shadow">
        @if($project->id !== $currentProject?->id)
            <a href="{{ route('projects.switch', ['id' => $project->id]) }}" wire:navigate class="w-full text-slate-500 hover:text-slate-600 hover:bg-slate-100 flex items-center gap-x-2 py-2.5 px-4 text-sm cursor-pointer transition-colors border-b border-slate-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                </svg>
                <span>Switch to project</span>
            </a>
        @else
            @if($currentProject?->services->count() > 0)
                <a href="{{ route('services.index') }}" wire:navigate class="w-full text-slate-500 hover:text-slate-600 hover:bg-slate-100 flex items-center gap-x-2 py-2.5 px-4 text-sm cursor-pointer transition-colors border-b border-slate-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    <span>Show services</span>
                </a>
            @endif
            <a href="{{ route('services.create') }}" wire:navigate class="w-full text-slate-500 hover:text-slate-600 hover:bg-slate-100 flex items-center gap-x-2 py-2.5 px-4 text-sm cursor-pointer transition-colors border-b border-slate-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                <span>Add service</span>
            </a>
        @endif
        <a href="" wire:navigate class="w-full text-slate-500 hover:text-slate-600 hover:bg-slate-100 flex items-center gap-x-2 py-2.5 px-4 text-sm cursor-pointer transition-colors border-b border-slate-200">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
            </svg>
            <span>Edit project</span>
        </a>
        <button wire:click="delete({{ $project->id }})" wire:confirm="Are you sure you want to delete this project?" class="w-full text-red-400 hover:text-red-600 hover:bg-slate-100 flex items-center gap-x-2 py-2.5 px-4 text-sm cursor-pointer transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
            </svg>
            <span>Delete project</span>
        </button>
    </div>
</div>