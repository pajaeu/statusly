<x-slot:title>Profile settings | statusly</x-slot:title>

<div class="w-full max-w-6xl mx-auto">
    <h1 class="mb-6 font-semibold text-3xl text-slate-800">Settings</h1>
    <x-settings.tabs/>
    <h2 class="mb-4 font-semibold text-xl text-slate-800">Profile settings</h2>
    <div class="bg-white rounded-lg shadow px-6 py-4 mb-6">
        <form wire:submit="save">
            <div class="mb-4">
                <label for="name" class="block mb-2 text-sm text-slate-400">Name</label>
                <input type="text" wire:model="name" class="w-full p-2 border rounded-lg transition-all focus:ring-2 focus:ring-orange-500 outline-0">
                @error('name')
                    <x-input-error :message="$message"/>
                @enderror
            </div>
            <x-button>Save changes</x-button>
        </form>
    </div>
    <h2 class="mb-1.5 font-semibold text-lg text-slate-800">Change your password</h2>
    <div class="bg-white rounded-lg shadow px-6 py-4">
        <form wire:submit="changePassword">
            <div class="mb-4">
                <label for="current_password" class="block mb-2 text-sm text-slate-400">Current password</label>
                <input type="password" wire:model="current_password" class="w-full p-2 border rounded-lg transition-all focus:ring-2 focus:ring-orange-500 outline-0">
                @error('current_password')
                    <x-input-error :message="$message"/>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block mb-2 text-sm text-slate-400">New password</label>
                <input type="password" wire:model="password" class="w-full p-2 border rounded-lg transition-all focus:ring-2 focus:ring-orange-500 outline-0">
                @error('password')
                    <x-input-error :message="$message"/>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block mb-2 text-sm text-slate-400">Confirm password</label>
                <input type="password" wire:model="password_confirmation" class="w-full p-2 border rounded-lg transition-all focus:ring-2 focus:ring-orange-500 outline-0">
                @error('password_confirmation')
                    <x-input-error :message="$message"/>
                @enderror
            </div>
            <x-button>Change password</x-button>
        </form>
    </div>
</div>