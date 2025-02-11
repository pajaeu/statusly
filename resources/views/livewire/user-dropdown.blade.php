<div x-data="{ open: false }" class="relative">
    <button @click="open = !open" class="w-full text-slate-600 hover:bg-slate-200 flex items-center gap-x-3 rounded-md py-1.5 px-3 text-sm font-medium cursor-pointer transition-colors">
        <img src="{{ $user->avatarUrl }}" alt="{{ $user->name }}" class="size-6 rounded-full">
        <span>{{ $user->name }}</span>
        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ms-auto size-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
        </svg>
        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ms-auto size-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
        </svg>
    </button>
    <div x-show="open" x-on:click.outside="open = false" class="absolute py-2 mb-2 bottom-full left-0 w-full rounded bg-white border border-slate-200 shadow-lg">
        @foreach ($projects as $project)
            @php($route = ($user->currentProject?->id === $project->id) ? route('settings.project') : route('projects.switch', ['id' => $project->id]))
            <a href="{{ $route }}" wire:navigate class="w-full text-slate-500 hover:text-slate-600 hover:bg-slate-100 flex items-center gap-x-2 py-2.5 px-4 text-sm cursor-pointer transition-colors border-b border-slate-200">
                <img src="{{ $project->avatarUrl }}" alt="{{ $project->name }}" class="size-6 rounded">
                <span>{{ $project->name }}</span>
                @if($user->currentProject?->id === $project->id)
                    <span class="ms-auto block size-2 rounded-full bg-green-500"></span>
                @endif
            </a>
        @endforeach
        <a href="{{ route('projects.create') }}" wire:navigate class="w-full text-slate-500 hover:text-slate-600 hover:bg-slate-100 flex items-center gap-x-2 py-2.5 px-4 text-sm cursor-pointer transition-colors border-b border-slate-200">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            <span>Add project</span>
        </a>
        @if($user->currentProject)
            <a href="{{ route('projects.show', ['slug' => $user->currentProject->slug]) }}" target="_blank" class="w-full text-slate-500 hover:text-slate-600 hover:bg-slate-100 flex items-center gap-x-2 py-2.5 px-4 text-sm cursor-pointer transition-colors border-b border-slate-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                </svg>
                <span>Show project page</span>
            </a>
        @endif
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="w-full text-slate-500 hover:text-slate-600 hover:bg-slate-100 flex items-center gap-x-2 py-2.5 px-4 text-sm cursor-pointer transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                </svg>
                <span>Log out</span>
            </button>
        </form>
    </div>
</div>