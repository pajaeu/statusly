<div class="flex gap-2 mb-6">
    <a href="{{ route('settings.project') }}" wire:navigate class="py-2 px-4 text-sm rounded-lg shadow {{ request()->routeIs('settings.project') ? 'text-white bg-orange-500' : 'bg-white hover:shadow-lg transition-shadow' }}">Project</a>
    <a href="{{ route('settings.design') }}" wire:navigate class="py-2 px-4 text-sm rounded-lg shadow {{ request()->routeIs('settings.design') ? 'text-white bg-orange-500' : 'bg-white hover:shadow-lg transition-shadow' }}">Design</a>
</div>