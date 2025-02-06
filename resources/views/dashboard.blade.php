<x-app-layout>
    <div class="w-full py-4 bg-slate-900">
        <div class="container mx-auto">
            <div class="flex items-center justify-between">
                <a href="{{ route('dashboard') }}">
                    <img src="{{ asset('img/logo-light.png') }}" class="w-40" alt="Statusly logo">
                </a>
                <div>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <x-button>Log out</x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>