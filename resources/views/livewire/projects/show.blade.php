<x-slot:title>{{ $project->name }} | statusly</x-slot:title>

<div wire:poll.5s class="w-screen h-screen bg-slate-100">
    @includeIf('projects.themes.' . $project->theme, ['project' => $project])
    <div class="w-full sm:max-w-3xl pt-10 px-4 md:px-0 mx-auto text-slate-800">
        <div class="bg-white rounded-lg shadow border border-slate-200 px-6 py-4 mb-10">
            @forelse($project->services as $service)
                <div class="flex items-center py-3 border-b border-slate-200 last:border-b-0">
                    <div class="inline-block text-base font-semibold flex-1 text-slate-800">
                        {{ $service->name }}
                        <div class="mt-1 text-xs font-normal text-slate-400">updated {{ $service->updated_at->diffForHumans() }}</div>
                    </div>
                    <div class="text-xs font-medium rounded-full flex items-center
                        @if ($service->status === 'operational') text-green-500
                        @elseif ($service->status === 'maintenance') text-yellow-500
                        @else text-red-500
                        @endif">
                        @if ($service->status === 'operational')
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                        @elseif ($service->status === 'maintenance')
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd" d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025.75.75 0 0 1 .313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 0 1 1.248.313 5.25 5.25 0 0 1-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 1 1 2.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0 1 12 6.75ZM4.117 19.125a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Z" clip-rule="evenodd" />
                            </svg>
                        @else
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd" d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                            </svg>
                        @endif
                        <span class="ms-1">{{ ucfirst($service->status) }}</span>
                    </div>
                </div>
            @empty
                <p class="py-4 text-slate-500">This project does not have any service yet.</p>
            @endforelse
        </div>
        <div x-data="{ collapsed: true }">
            <div class="cursor-pointer flex items-center mb-3" @click="collapsed = !collapsed">
                <h2 class="text-md font-semibold text-slate-800">Incident history</h2>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ms-auto size-5" x-show="!collapsed">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ms-auto size-5" x-show="collapsed" x-cloak>
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                </svg>
            </div>
            <div class="bg-white rounded-lg shadow border border-slate-200 px-6 py-4 mb-10" x-show="!collapsed">
                @forelse($incidents as $incident)
                    <div class="text-slate-800 py-3 border-b last:border-b-0 border-slate-300">
                        <div class="mb-2">{{ $incident->message }}</div>
                        <div class="text-sm text-slate-400">{{ $incident->created_at->format('j. M y, H:i') }}</div>
                    </div>
                @empty
                    <div class="p-4 text-center text-slate-500 text-md">History is empty</div>
                @endforelse
            </div>
        </div>
    </div>
    <div class="pt-4 pb-8 flex items-center justify-center">
        <div class="text-center">
            <small class="text-sm font-medium text-slate-700">powered by</small>
            <a href="{{ route('home') }}" class="block mt-1 hover:opacity-45 transition-opacity ease-in">
                <img src="{{ asset('img/logo-dark.png') }}" alt="statusly" class="w-32">
            </a>
        </div>
    </div>
</div>