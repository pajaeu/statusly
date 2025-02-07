<x-guest-layout>
    <div class="w-screen h-screen bg-gradient-to-bl from-orange-300 to-orange-600">
        <div class="w-full sm:max-w-md pt-20 px-4 md:px-0 mx-auto text-slate-800">
            <a href="{{ route('dashboard') }}">
                <img src="{{ asset('img/logo-light.png') }}" class="w-64 mx-auto mb-12" alt="Statusly logo">
            </a>
            <div class="bg-white rounded-lg shadow px-6 py-4 mb-6">
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ route('password.update') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="block mb-2 text-sm text-slate-400">Email</label>
                        <input type="email" id="email" name="email"
                               class="w-full p-2 border rounded-lg transition-all focus:ring-2 focus:ring-orange-500 outline-0"
                               value="{{ old('email') }}">
                        <x-input-error :message="$errors->first('email')"/>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block mb-2 text-sm text-slate-400">Password</label>
                        <input type="password" id="password" name="password"
                               class="w-full p-2 border rounded-lg transition-all focus:ring-2 focus:ring-orange-500 outline-0">
                        <x-input-error :message="$errors->first('password')"/>
                    </div>
                    <div class="mb-4">
                        <label for="password_confirmation" class="block mb-2 text-sm text-slate-400">Confirm
                            password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                               class="w-full p-2 border rounded-lg transition-all focus:ring-2 focus:ring-orange-500 outline-0">
                        <x-input-error :message="$errors->first('password_confirmation')"/>
                    </div>
                    <div class="text-center">
                        <input type="hidden" name="token" value="{{ $token }}">
                        <x-button class="w-full !text-sm">Reset password</x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>