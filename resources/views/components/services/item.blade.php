@props([
	'service'
])

<div x-data="{ open:false }" class="relative">
    <div @click="open = !open" class="block w-full p-4 border border-slate-200 rounded-md shadow bg-white hover:border-slate-300 hover:shadow-lg cursor-pointer transition-colors transition-shadow mb-4">
        <div class="flex items-center">
            <div>
                <div class="mb-0.5 text-slate-700 font-medium">{{ $service->name }}</div>
                <div class="text-slate-500 text-sm">created {{ $service->created_at->diffForHumans() }}</div>
            </div>
            <div class="ms-auto flex items-center">
                <button wire:click="delete({{ $service->id }})" wire:confirm="Are you sure you want to delete this service?" class="text-red-400 hover:text-red-600 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div x-show="open" x-on:click.outside="open = false" class="absolute z-30 top-full left-0 mt-2 py-2 rounded bg-white border border-slate-200 shadow" x-cloak>
        <a href="{{ route('services.edit', ['service' => $service]) }}" wire:navigate class="w-full text-slate-500 hover:text-slate-600 hover:bg-slate-100 flex items-center gap-x-2 py-2.5 px-4 text-sm cursor-pointer transition-colors border-b border-slate-200">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
            </svg>
            <span>Edit service</span>
        </a>
        <button wire:click="delete({{ $service->id }})" wire:confirm="Are you sure you want to delete this service?" class="w-full text-red-400 hover:text-red-600 hover:bg-slate-100 flex items-center gap-x-2 py-2.5 px-4 text-sm cursor-pointer transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
            </svg>
            <span>Delete service</span>
        </button>
    </div>
</div>