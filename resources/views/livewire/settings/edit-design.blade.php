<div class="w-full max-w-6xl mx-auto">
    <h1 class="mb-6 font-semibold text-3xl text-slate-800">Settings</h1>
    <x-settings.tabs/>
    <h2 class="mb-4 font-semibold text-xl text-slate-800">Design settings</h2>
    <div class="bg-white rounded-lg shadow px-6 py-4">
        <form wire:submit="save">
            <x-button>Save changes</x-button>
        </form>
    </div>
</div>