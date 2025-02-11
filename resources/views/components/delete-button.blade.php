@props([
    'as' => 'button',
])

<{{ $as }} wire:loading.attr="disabled" {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-4 py-2 border text-white bg-red-500 border-0 rounded-md font-semibold text-xs hover:bg-red-600 focus:outline-none focus:ring-0 focus:ring-offset-0 transition ease-in-out duration-150']) }}>
{{ $slot }}
</{{ $as }}>