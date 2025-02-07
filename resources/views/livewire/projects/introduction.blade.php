<div class="w-screen h-screen bg-slate-100 flex items-center justify-center">
    <div class="bg-white border border-slate-200 rounded-lg shadow p-8">
        <img src="{{ asset('img/logo-dark.png') }}" class="w-24 mx-auto mb-6" alt="Statusly logo">
        <h1 class="font-semibold text-2xl text-center text-slate-800 mb-6">Let's make your first project</h1>
        <form wire:submit="save">
            <div class="mb-4">
                <label for="name" class="block mb-2 text-sm text-slate-400">Name</label>
                <input type="text" wire:model="name" class="w-full p-2 border rounded-lg transition-all focus:ring-2 focus:ring-orange-500 outline-0">
                @error('name')
                    <x-input-error :message="$message"/>
                @enderror
            </div>
            <x-button class="w-full py-3">Create and continue</x-button>
        </form>
    </div>
</div>