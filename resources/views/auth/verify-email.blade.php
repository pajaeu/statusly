<x-guest-layout>
    <div class="w-full sm:max-w-md pt-20 px-4 md:px-0 mx-auto text-slate-800">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('img/logo-light.png') }}" class="w-64 mx-auto mb-12" alt="Statusly logo">
        </a>
        <div class="bg-white rounded-lg shadow px-6 py-4 mb-6">
            <div class="text-center py-4 text-sm text-slate-500">
                <h2 class="text-2xl mb-4 font-bold text-slate-700">You are almost there</h2>
                <p>Thanks for registering an account!</p>
                <p>Before we get started, we need to verify your e-mail.</p>
                <form action="{{ route('verification.send') }}" method="post" class="mt-6">
                    @csrf
                    <x-button>Resend e-mail</x-button>
                </form>
                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        A new email verification link has been emailed to you!
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-guest-layout>