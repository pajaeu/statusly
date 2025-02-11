<x-guest-layout>
    <div class="w-screen h-screen flex items-center bg-slate-100">
        <div class="w-full sm:max-w-sm px-4 md:px-0 mx-auto text-slate-800">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/logo-dark.png') }}" class="w-52 mx-auto mb-8" alt="Statusly logo">
            </a>
            <div class="bg-white border border-slate-200 rounded-lg shadow px-5 py-4">
                <div class="text-center py-4 text-sm text-slate-500">
                    <h2 class="text-2xl mb-4 font-bold text-slate-700">You are almost there</h2>
                    <p>Thanks for registering an account!</p>
                    <p>Before we get started, we need to verify your e-mail.</p>
                    <form action="{{ route('verification.send') }}" method="post" class="mt-6">
                        @csrf
                        <x-button>Resend e-mail</x-button>
                    </form>
                    @if (session('status') == 'verification-link-sent')
                        <div class="mt-4 font-medium text-sm text-green-600">
                            A new email verification link has been emailed to you!
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>