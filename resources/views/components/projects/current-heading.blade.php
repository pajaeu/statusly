@props([
	'heading'
])

@php($currentProject = auth()->user()->currentProject)
<div {{ $attributes }}>
    <div class="flex items-center">
        <img src="{{ $currentProject?->avatarUrl }}" class="size-10 rounded" alt="{{ $currentProject?->name }}">
        <h1 class="ms-3 font-semibold text-3xl text-slate-800">{{ $heading }}</h1>
    </div>
</div>