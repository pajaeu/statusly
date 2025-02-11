<div>
    <div class="fixed top-0 bottom-0 right-0 z-50 mt-3 mr-3 flex flex-col">
        @foreach($messages as $message)
            <div wire-key="{{ uniqid() }}" x-data="{ closed: false }" x-show="!closed"
                 x-init="setTimeout(() => closed = true, 3000)"
                 x-transition:leave="ease-in duration-300"
                 x-transition:leave-start="opacity-100 sm:scale-100"
                 x-transition:leave-end="opacity-0 sm:scale-95"
                 class="mb-4 py-3 px-4 flex items-center gap-2 font-medium text-slate-900 bg-slate-200 rounded-lg">
                @if($message['type'] === 'success')
                    <x-messages.success>{{ $message['message'] }}</x-messages.success>
                @elseif($message['type'] === 'danger')
                    <x-messages.danger>{{ $message['message'] }}</x-messages.danger>
                @elseif($message['type'] === 'warning')
                    <x-messages.warning>{{ $message['message'] }}</x-messages.warning>
                @elseif($message['type'] === 'info')
                    <x-messages.info>{{ $message['message'] }}</x-messages.info>
                @endif
            </div>
        @endforeach
    </div>
</div>