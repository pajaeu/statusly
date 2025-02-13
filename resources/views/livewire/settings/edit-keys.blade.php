<x-slot:title>API Keys | statusly</x-slot:title>

<div class="w-full max-w-6xl mx-auto">
    <h1 class="mb-6 font-semibold text-3xl text-slate-800">Settings</h1>
    <x-settings.tabs current="keys"/>
    <div class="flex items-center justify-between mb-4">
        <h2 class="font-semibold text-xl text-slate-800">API Keys</h2>
        <x-modal title="New key">
            <x-slot:toggle>
                <x-button>New key</x-button>
            </x-slot:toggle>
            <x-slot:body>
                <form wire:submit="create">
                    <div class="mb-4">
                        <label for="name" class="block mb-2 text-sm text-slate-400">Name</label>
                        <input type="text" wire:model="name" class="w-full p-2 border rounded-lg transition-all focus:ring-2 focus:ring-orange-500 outline-0">
                        @error('name')
                            <x-input-error :message="$message"/>
                        @enderror
                    </div>
                    <x-button>Save</x-button>
                    <x-secondary-button @click="modalOpen = false">Cancel</x-secondary-button>
                </form>
            </x-slot:body>
        </x-modal>
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
                            <button @click="show = !show" class="cursor-pointer text-slate-600 hover:text-slate-900 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </button>
                            <button x-data="{ clicked: false }" :class="clicked ? 'text-green-500' : 'text-slate-600 hover:text-slate-900'" @click="navigator.clipboard.writeText('{{ $key->token }}'), clicked = true, $dispatch('flash-message', { message: 'Copied {{ $key->name }} to clipboard' }), setTimeout(() => clicked = false, 300)" class="cursor-pointer transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 7.5V6.108c0-1.135.845-2.098 1.976-2.192.373-.03.748-.057 1.123-.08M15.75 18H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08M15.75 18.75v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5A3.375 3.375 0 0 0 6.375 7.5H5.25m11.9-3.664A2.251 2.251 0 0 0 15 2.25h-1.5a2.251 2.251 0 0 0-2.15 1.586m5.8 0c.065.21.1.433.1.664v.75h-6V4.5c0-.231.035-.454.1-.664M6.75 7.5H4.875c-.621 0-1.125.504-1.125 1.125v12c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V16.5a9 9 0 0 0-9-9Z" />
                                </svg>
                            </button>
                            <button wire:click="delete({{ $key->id }})" wire:confirm="Do you really want to delete this key?" class="cursor-pointer text-red-500 hover:text-red-600 transition-colors">
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