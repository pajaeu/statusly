<x-guest-layout>
    <div class="w-screen h-screen flex items-center">
        <div class="w-full sm:max-w-sm px-4 md:px-0 mx-auto text-slate-800">
            <a href="{{ route('dashboard') }}">
                <img src="{{ asset('img/logo-dark.png') }}" class="w-52 mx-auto mb-8" alt="Statusly logo">
            </a>
            <div class="mb-6">
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <input type="text" id="name" name="name"
                               class="w-full p-3 placeholder:text-xs border border-slate-300 rounded-lg transition-all focus:ring-2 focus:ring-orange-500 outline-0"
                               value="{{ old('name') }}" placeholder="Name">
                        <x-input-error :message="$errors->first('name')"/>
                    </div>
                    <div class="mb-4">
                        <input type="email" id="email" name="email"
                               class="w-full p-3 placeholder:text-xs border border-slate-300 rounded-lg transition-all focus:ring-2 focus:ring-orange-500 outline-0"
                               value="{{ old('email') }}" placeholder="Email">
                        <x-input-error :message="$errors->first('email')"/>
                    </div>
                    <div class="mb-4">
                        <input type="password" id="password" name="password"
                               class="w-full p-3 placeholder:text-xs border border-slate-300 rounded-lg transition-all focus:ring-2 focus:ring-orange-500 outline-0"
                               placeholder="Password">
                        <x-input-error :message="$errors->first('password')"/>
                    </div>
                    <div class="mb-4">
                        <input type="password" id="password_confirmation" name="password_confirmation"
                               class="w-full p-3 placeholder:text-xs border border-slate-300 rounded-lg transition-all focus:ring-2 focus:ring-orange-500 outline-0"
                               placeholder="Confirm password">
                        <x-input-error :message="$errors->first('password_confirmation')"/>
                    </div>
                    <x-button class="w-full !text-sm !py-3">Register</x-button>
                </form>
            </div>
            <div class="text-center text-sm text-slate-600">
                <p>Already have an account? <a class="underline hover:no-underline" href="{{ route('login') }}">Login
                        here.</a></p>
            </div>
        </div>
    </div>
</x-guest-layout>