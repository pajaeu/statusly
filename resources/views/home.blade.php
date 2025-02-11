<x-guest-layout>
    <header class="py-8 border-b border-slate-200">
        <div class="w-full px-7 max-w-7xl mx-auto">
            <div class="flex items-center">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/logo-dark.png') }}" alt="Statusly logo" class="h-8">
                </a>
                <div class="ms-auto flex items-center gap-2">
                    <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-4 py-2 border-0 text-slate-900 bg-slate-100 rounded-md font-semibold text-sm hover:bg-slate-200 focus:outline-none focus:ring-0 focus:ring-offset-0 transition ease-in-out duration-150">Login</a>
                    <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-4 py-2 border-0 text-white bg-orange-500 rounded-md font-semibold text-sm hover:bg-orange-600 focus:outline-none focus:ring-0 focus:ring-offset-0 transition ease-in-out duration-150">Sign Up</a>
                </div>
            </div>
        </div>
    </header>
    <div class="flex items-center justify-center w-full max-w-2xl gap-6 px-8 pt-24 pb-8 mx-auto text-left md:px-12 xl:px-20 sm:pb-16 md:pt-32 lg:max-w-5xl">
        <div class="text-center">
            <h1 class="text-5xl font-bold tracking-tighter sm:text-6xl md:text-8xl text-slate-900">Display your project service status</h1>
            <p class="mt-5 text-lg font-normal text-slate-500">A simple way to display service status designed for smaller projects.</p>
            <div class="mt-8 flex justify-center gap-2">
                <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-5 py-3 border-0 text-white bg-orange-500 rounded-lg font-semibold text-md hover:bg-orange-600 focus:outline-none focus:ring-0 focus:ring-offset-0 transition ease-in-out duration-150">Get started</a>
                <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-5 py-3 border-0 text-slate-900 bg-slate-100 rounded-lg font-semibold text-md hover:bg-slate-200 focus:outline-none focus:ring-0 focus:ring-offset-0 transition ease-in-out duration-150">Check demo</a>
            </div>
        </div>
    </div>
    <div class="pb-10 lg:pb-20">
        <div class="w-full px-7 max-w-7xl mx-auto">
            <div class="ring-1 ring-slate-200 rounded-[20px] p-2 shadow-lg">
                <img src="{{ asset('img/screenshot.png') }}" alt="Statusly screenshot" class="w-full rounded-xl">
            </div>
        </div>
    </div>
    <footer class="pt-10 text-slate-700">
        <div class="w-full px-7 max-w-7xl mx-auto">
            <div class="flex flex-col items-center justify-between py-10 border-t border-solid lg:flex-row border-slate-200">
                <ul class="flex flex-wrap space-x-5 text-xs">
                    <li class="mb-6 text-center flex-full lg:flex-none lg:mb-0">© 2025 Pavel Skrbel. All rights reserved.</li>
                </ul>
                <ul class="flex items-center mt-6 space-x-5 lg:mt-0">
                    <li>
                        <a href="https://github.com/pajaeu/statusly" target="_blank" class="text-slate-600 hover:text-slate-900">
                            <span class="sr-only">GitHub</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</x-guest-layout>