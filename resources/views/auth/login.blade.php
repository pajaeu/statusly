<x-guest-layout>
    <div class="w-screen h-screen flex items-center bg-slate-100">
        <div class="w-full sm:max-w-sm px-4 md:px-0 mx-auto text-slate-800">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/logo-dark.png') }}" class="w-52 mx-auto mb-8" alt="Statusly logo">
            </a>
            <div class="mb-6">
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ route('login') }}" method="post">
                    @csrf
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
                        <label class="flex items-center">
                            <input type="checkbox" id="remember_me" name="remember">
                            <span class="ml-2 text-sm text-slate-400">Remember me</span>
                        </label>
                    </div>
                    <div>
                        <a class="mb-4 inline-block text-sm text-slate-800 underline hover:no-underline"
                           href="{{ route('password.request') }}">Forgot your password?</a>
                        <x-button class="w-full !text-sm !py-3">Continue</x-button>
                    </div>
                </form>
            </div>
            <div class="text-center text-sm text-slate-600">
                <p>Don't have an account yet? <a class="underline hover:no-underline" href="{{ route('register') }}">Sign
                        up!</a></p>
            </div>
        </div>
    </div>
</x-guest-layout>