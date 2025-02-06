<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>statusly</title>
        @vite(['resources/css/app.css', 'resources/css/app.js'])
        @livewireStyles
    </head>
    <body class="bg-slate-100">
        <div class="fixed z-40 w-full max-w-xs h-full border-r border-slate-200 bg-slate-100">
            <div class="flex flex-col h-full justify-between">
                <div class="px-3 py-4">
                    <a href="{{ route('dashboard') }}" class="block px-2 mt-3 mb-6">
                        <img src="{{ asset('img/logo-dark.png') }}" class="w-24" alt="Statusly logo">
                    </a>
                    <ul class="flex flex-col gap-y-1">
                        <li>
                            <a href="" class="text-slate-600 hover:bg-slate-200 flex items-center gap-x-3 rounded-md py-1.5 px-3 text-sm font-medium cursor-pointer transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 0 1-3-3m3 3a3 3 0 1 0 0 6h13.5a3 3 0 1 0 0-6m-16.5-3a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3m-19.5 0a4.5 4.5 0 0 1 .9-2.7L5.737 5.1a3.375 3.375 0 0 1 2.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 0 1 .9 2.7m0 0a3 3 0 0 1-3 3m0 3h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Zm-3 6h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Z" />
                                </svg>
                                <span>Services</span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="text-slate-600 hover:bg-slate-200 flex items-center gap-x-3 rounded-md py-1.5 px-3 text-sm font-medium cursor-pointer transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 1 1 0-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 0 1-1.44-4.282m3.102.069a18.03 18.03 0 0 1-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 0 1 8.835 2.535M10.34 6.66a23.847 23.847 0 0 0 8.835-2.535m0 0A23.74 23.74 0 0 0 18.795 3m.38 1.125a23.91 23.91 0 0 1 1.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 0 0 1.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 0 1 0 3.46" />
                                </svg>
                                <span>Incidents</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="px-3 py-4">
                    <x-user-dropdown />
                </div>
            </div>
        </div>
        <div class="ms-80 p-6">
            {{ $slot }}
        </div>
    @livewireScripts
    </body>
</html>