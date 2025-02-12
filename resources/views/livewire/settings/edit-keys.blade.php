<x-slot:title>API Keys | statusly</x-slot:title>

<div class="w-full max-w-6xl mx-auto">
    <h1 class="mb-6 font-semibold text-3xl text-slate-800">Settings</h1>
    <x-settings.tabs current="keys"/>
    <div class="flex items-center justify-between mb-4">
        <h2 class="font-semibold text-xl text-slate-800">API Keys</h2>
        <div x-data="{ modalOpen: false }"
             @keydown.escape.window="modalOpen = false"
             class="relative z-50 w-auto h-auto">
            <x-button @click="modalOpen=true">New key</x-button>
            <template x-teleport="body">
                <div x-show="modalOpen" @close-modal.window="modalOpen = false" class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen" x-cloak>
                    <div x-show="modalOpen"
                         x-transition:enter="ease-out duration-300"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="ease-in duration-300"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0"
                         @click="modalOpen=false" class="absolute inset-0 w-full h-full bg-black bg-opacity-40"></div>
                    <div x-show="modalOpen"
                         x-trap.inert.noscroll="modalOpen"
                         x-transition:enter="ease-out duration-300"
                         x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                         x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                         x-transition:leave="ease-in duration-200"
                         x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                         x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                         class="relative w-full py-6 bg-white px-7 sm:max-w-lg sm:rounded-lg">
                        <div class="flex items-center justify-between pb-2">
                            <h3 class="text-lg font-semibold">New key</h3>
                            <button @click="modalOpen=false" class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-5 mr-5 text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                            </button>
                        </div>
                        <div class="relative w-auto">
                            <form wire:submit="create">
                                <div class="mb-4">
                                    <label for="name" class="block mb-2 text-sm text-slate-400">Name</label>
                                    <input type="text" wire:model="name" class="w-full p-2 border rounded-lg transition-all focus:ring-2 focus:ring-orange-500 outline-0">
                                    @error('name')
                                        <x-input-error :message="$message"/>
                                    @enderror
                                </div>
                                <x-button>Save</x-button>
                            </form>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
    <div class="bg-white rounded-lg shadow px-6 py-4 mb-6">
        @forelse($keys as $key)
            <div wire:key="{{ $key->id }}" class="flex items-center py-4 border-b border-slate-200 last:border-b-0">
                <div>{{ $key->name }}</div>
                <div class="ms-auto">
                    <div x-data="{ show: false }" class="relative flex items-center justify-end">
                        <div class="me-4">
                            <span x-show="!show" class="blur-sm">{{ str_repeat('*', strlen($key->token)) }}</span>
                            <span x-show="show" x-cloak>{{ $key->token }}</span>
                        </div>
                        <div class="flex gap-1">
                            <button @click="show = !show" class="cursor-pointer text-slate-600 hover:text-slate-900">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </button>
                            <button wire:click="delete({{ $key->id }})" wire:confirm="Do you really want to delete this key?" class="cursor-pointer text-red-500 hover:text-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <x-empty-state message="You don't have any API Keys yet."/>
        @endforelse
    </div>
</div>