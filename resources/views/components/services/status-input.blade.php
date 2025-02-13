<div {{ $attributes->merge(['class' => 'status-inputs']) }}>
    <label class="block mb-2 text-sm text-slate-400">Status</label>
    <div class="flex flex-wrap items-center gap-3">
        <div class="flex-1">
            <input type="radio" id="operational" wire:model="status" value="operational" class="hidden peer" required />
            <label for="operational" class="flex items-center justify-center w-full p-4 text-slate-800 bg-white border border-slate-200 rounded-lg cursor-pointer peer-checked:border-orange-500 hover:border-slate-300 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-green-500">
                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                </svg>
                <span class="ms-2 text-lg">Operational</span>
            </label>
        </div>
        <div class="flex-1">
            <input type="radio" id="maintenance" wire:model="status" value="maintenance" class="hidden peer" required />
            <label for="maintenance" class="flex items-center justify-center w-full p-4 text-slate-800 bg-white border border-slate-200 rounded-lg cursor-pointer peer-checked:border-orange-500 hover:border-slate-300 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-yellow-500">
                    <path fill-rule="evenodd" d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025.75.75 0 0 1 .313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 0 1 1.248.313 5.25 5.25 0 0 1-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 1 1 2.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0 1 12 6.75ZM4.117 19.125a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Z" clip-rule="evenodd" />
                </svg>
                <span class="ms-2 text-lg">Maintenance</span>
            </label>
        </div>
        <div class="flex-1">
            <input type="radio" id="down" wire:model="status" value="down" class="hidden peer" required />
            <label for="down" class="flex items-center justify-center w-full p-4 text-slate-800 bg-white border border-slate-200 rounded-lg cursor-pointer peer-checked:border-orange-500 hover:border-slate-300 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-red-500">
                    <path fill-rule="evenodd" d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                </svg>
                <span class="ms-2 text-lg">Down</span>
            </label>
        </div>
    </div>
    @error('status')
        <x-input-error :message="$message"/>
    @enderror
</div>