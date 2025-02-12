<x-slot:title>Incidents | statusly</x-slot:title>

<div class="w-full max-w-6xl mx-auto">
    <div class="flex items-center mb-6">
        <x-projects.current-heading heading="Incidents"/>
        <div class="ms-auto">
            <x-modal title="Log incident">
                <x-slot:toggle>
                    <x-button>Log incident</x-button>
                </x-slot:toggle>
                <x-slot:body>
                    <form wire:submit="create">
                        <div class="mb-4">
                            <label for="service" class="block mb-2 text-sm text-slate-400">Service</label>
                            <select wire:model="service" class="w-full p-2 border rounded-lg transition-all focus:ring-2 focus:ring-orange-500 outline-0">
                                <option>Please select Service</option>
                                @foreach($services as $serviceId => $serviceName)
                                    <option value="{{ $serviceId }}">{{ $serviceName }}</option>
                                @endforeach
                            </select>
                            @error('service')
                                <x-input-error :message="$message"/>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block mb-2 text-sm text-slate-400">Message</label>
                            <input type="text" wire:model="message" class="w-full p-2 border rounded-lg transition-all focus:ring-2 focus:ring-orange-500 outline-0">
                            @error('message')
                                <x-input-error :message="$message"/>
                            @enderror
                        </div>
                        <x-button>Log incident</x-button>
                    </form>
                </x-slot:body>
            </x-modal>
        </div>
    </div>
    @if($incidents->isNotEmpty())
        <div class="relative flex flex-col w-full h-full overflow-scroll text-slate-700 bg-white border border-slate-200 rounded-lg shadow bg-clip-border">
            <table class="w-full text-left table-auto min-w-max">
                <thead>
                <tr>
                    <th class="w-3/5 p-3 border-b border-slate-200">
                        <div class="block text-sm font-normal text-slate-500">Message</div>
                    </th>
                    <th class="w-1/3 p-3 border-b border-slate-200">
                        <div class="block text-sm font-normal text-slate-500">Service</div>
                    </th>
                    <th class="p-3 border-b border-slate-200">
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($incidents as $incident)
                    <tr wire:key="{{ $incident->id }}">
                        <td class="p-3 border-b border-slate-100">
                            <div class="block text-sm font-normal text-slate-900">{{ $incident->message }}</div>
                        </td>
                        <td class="p-3 border-b border-slate-100">
                            <div class="block text-sm font-normal text-slate-900">{{ $incident->service->name }}</div>
                        </td>
                        <td class="p-3 text-end border-b border-slate-100">
                            <button wire:click="delete({{ $incident->id }})" wire:confirm="Are you sure you want to delete this incident?" class="text-red-400 hover:text-red-600 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @else
        <x-empty-state message="You don't have any Incidents yet."></x-empty-state>
    @endif
</div>