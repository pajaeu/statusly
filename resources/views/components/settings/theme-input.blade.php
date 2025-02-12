<div {{ $attributes->merge(['class' => 'theme-inputs']) }}>
    <label class="block mb-2 text-sm text-slate-400">Theme</label>
    <div class="flex items-center gap-3">
        <div class="flex-1">
            <input type="radio" id="default" wire:model="theme" value="default" class="hidden peer" required />
            <label for="default" class="block p-2 text-slate-800 bg-white border border-slate-200 rounded-lg cursor-pointer peer-checked:border-orange-500 hover:border-slate-300 transition-colors">
                <span class="block text-white text-center text-lg p-4 bg-gradient-to-bl from-orange-300 to-orange-600 rounded">Default</span>
            </label>
        </div>
        <div class="flex-1">
            <input type="radio" id="pink" wire:model="theme" value="pink" class="hidden peer" required />
            <label for="pink" class="block p-2 text-slate-800 bg-white border border-slate-200 rounded-lg cursor-pointer peer-checked:border-orange-500 hover:border-slate-300 transition-colors">
                <span class="block text-white text-center text-lg p-4 bg-gradient-to-r from-pink-600 to-pink-300 rounded">Pink</span>
            </label>
        </div>
        <div class="flex-1">
            <input type="radio" id="green" wire:model="theme" value="green" class="hidden peer" required />
            <label for="green" class="block p-2 text-slate-800 bg-white border border-slate-200 rounded-lg cursor-pointer peer-checked:border-orange-500 hover:border-slate-300 transition-colors">
                <span class="block text-white text-center text-lg p-4 bg-gradient-to-bl from-green-300 to-green-600 rounded">Green</span>
            </label>
        </div>
        <div class="flex-1">
            <input type="radio" id="blue" wire:model="theme" value="blue" class="hidden peer" required />
            <label for="blue" class="block p-2 text-slate-800 bg-white border border-slate-200 rounded-lg cursor-pointer peer-checked:border-orange-500 hover:border-slate-300 transition-colors">
                <span class="block text-white text-center text-lg p-4 bg-gradient-to-b from-blue-300 to-blue-500 rounded">Blue</span>
            </label>
        </div>
        <div class="flex-1">
            <input type="radio" id="dark" wire:model="theme" value="dark" class="hidden peer" required />
            <label for="dark" class="block p-2 text-slate-800 bg-white border border-slate-200 rounded-lg cursor-pointer peer-checked:border-orange-500 hover:border-slate-300 transition-colors">
                <span class="block text-white text-center text-lg p-4 bg-gradient-to-bl from-slate-800 to-slate-900 rounded">Dark</span>
            </label>
        </div>
    </div>
    @error('theme')
        <x-input-error :message="$message"/>
    @enderror
</div>