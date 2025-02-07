<div class="flex flex-col gap-4 mb-4">
    @foreach(['success', 'danger', 'warning', 'info'] as $key)
        @if(session()->has($key))
            @if($key === 'success')
                <x-messages.success>{{ session($key) }}</x-messages.success>
            @elseif($key === 'danger')
                <x-messages.danger>{{ session($key) }}</x-messages.danger>
            @elseif($key === 'warning')
                <x-messages.warning>{{ session($key) }}</x-messages.warning>
            @elseif($key === 'info')
                <x-messages.info>{{ session($key) }}</x-messages.info>
            @endif
        @endif
    @endforeach
</div>