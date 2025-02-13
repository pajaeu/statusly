@props([
    'as' => 'button',
])

<{{ $as }} {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center justify-center px-4 py-2 border text-white bg-slate-500 border-0 rounded-md font-semibold text-xs hover:bg-slate-600 focus:outline-none focus:ring-0 focus:ring-offset-0 transition ease-in-out duration-150']) }}>
{{ $slot }}
</{{ $as }}>