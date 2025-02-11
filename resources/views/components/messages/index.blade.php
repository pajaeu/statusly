<div class="flex flex-col mb-4">
    @foreach(['success', 'danger', 'warning', 'info'] as $key)
        @if(session()->has($key))
            <div wire-key="{{ uniqid() }}" x-data="{ closed: false }">
                <div x-show="!closed" class="mb-4 py-3 px-4 flex items-center gap-2 font-medium text-slate-900 bg-slate-200 rounded-lg">
                    @if($key === 'success')
                        <x-messages.success>{{ session($key) }}</x-messages.success>
                    @elseif($key === 'danger')
                        <x-messages.danger>{{ session($key) }}</x-messages.danger>
                    @elseif($key === 'warning')
                        <x-messages.warning>{{ session($key) }}</x-messages.warning>
                    @elseif($key === 'info')
                        <x-messages.info>{{ session($key) }}</x-messages.info>
                    @endif
                </div>
            </div>
        @endif
    @endforeach
</div>