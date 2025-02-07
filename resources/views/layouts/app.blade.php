<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>statusly</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-slate-100">
<div class="fixed z-40 w-full max-w-xs h-full border-r border-slate-200 bg-slate-100">
    <div class="flex flex-col h-full justify-between">
        <div class="px-3 py-4">
            <a href="{{ route('dashboard') }}" wire:navigate class="block px-2 mt-3 mb-6">
                <img src="{{ asset('img/logo-dark.png') }}" class="w-24" alt="Statusly logo">
            </a>
            @include('layouts.navigation')
        </div>
        <div class="px-3 py-4">
            <livewire:user-dropdown/>
        </div>
    </div>
</div>
<div class="ms-80 p-6">
    <x-messages/>
    {{ $slot }}
</div>
@livewireScripts
</body>
</html>