<x-guest-layout>
    <x-slot:title>statusly - Simple way to display service status.</x-slot:title>

    <header class="py-8 border-b border-slate-200">
        <div class="w-full px-7 max-w-7xl mx-auto">
            <div class="flex items-center">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/logo-dark.png') }}" alt="Statusly logo" class="h-8">
                </a>
                <div class="ms-auto flex items-center gap-2">
                    <a href="{{ route('login') }}"
                       class="inline-flex items-center justify-center px-4 py-2 border-0 text-slate-900 bg-slate-100 rounded-md font-semibold text-sm hover:bg-slate-200 focus:outline-none focus:ring-0 focus:ring-offset-0 transition ease-in-out duration-150">Login</a>
                    <a href="{{ route('register') }}"
                       class="inline-flex items-center justify-center px-4 py-2 border-0 text-white bg-orange-500 rounded-md font-semibold text-sm hover:bg-orange-600 focus:outline-none focus:ring-0 focus:ring-offset-0 transition ease-in-out duration-150">Sign
                        Up</a>
                </div>
            </div>
        </div>
    </header>
    <div class="flex items-center justify-center w-full max-w-2xl gap-6 px-8 pt-24 pb-8 mx-auto text-left md:px-12 xl:px-20 sm:pb-16 md:pt-32 lg:max-w-4xl">
        <div class="text-center">
            <h1 class="text-5xl font-bold tracking-tighter sm:text-6xl md:text-7xl text-slate-900">Display your project
                <span class="text-transparent bg-clip-text bg-gradient-to-br from-orange-300 to-orange-600 italic">service status</span>
            </h1>
            <p class="mt-5 text-lg font-normal text-slate-500">A simple way to display service status designed for
                smaller projects.</p>
            <div class="mt-8 flex justify-center gap-2">
                <a href="{{ route('register') }}"
                   class="inline-flex items-center justify-center gap-2 px-5 py-3 border-0 text-white bg-orange-500 rounded-lg font-semibold text-md hover:bg-orange-600 focus:outline-none focus:ring-0 focus:ring-offset-0 transition ease-in-out duration-150">
                    <span>Get started</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="w-full px-7 pb-16 lg:pb-24 max-w-6xl mx-auto">
        <div class="ring-1 ring-slate-200 rounded-[20px] p-2 shadow-lg">
            <img src="{{ asset('img/screenshot.png') }}" alt="Statusly screenshot" class="w-full rounded-xl">
        </div>
    </div>
    <div class="w-full px-7 pb-10 lg:pb-20 max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="mb-6 text-4xl font-bold text-slate-900">🚀 Built with Cutting-Edge Technology</h2>
            <p class="text-slate-500">We leverage a powerful and efficient tech stack to ensure performance,
                scalability, and a seamless user experience.</p>
        </div>
        <div class="flex gap-5 mb-5">
            <div class="w-full lg:w-1/2">
                <div class="p-8 border border-slate-200 rounded-xl shadow-md">
                    <div class="flex items-center gap-4 mb-3">
                        <svg role="img" viewBox="0 0 24 24" fill="currentColor" class="size-10 text-[#FF2D20]"><title>
                                Laravel</title>
                            <path d="M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 01-.188.326L9.93 23.949a.316.316 0 01-.066.027c-.008.002-.016.008-.024.01a.348.348 0 01-.192 0c-.011-.002-.02-.008-.03-.012-.02-.008-.042-.014-.062-.025L.533 18.755a.376.376 0 01-.189-.326V2.974c0-.033.005-.066.014-.098.003-.012.01-.02.014-.032a.369.369 0 01.023-.058c.004-.013.015-.022.023-.033l.033-.045c.012-.01.025-.018.037-.027.014-.012.027-.024.041-.034H.53L5.043.05a.375.375 0 01.375 0L9.93 2.647h.002c.015.01.027.021.04.033l.038.027c.013.014.02.03.033.045.008.011.02.021.025.033.01.02.017.038.024.058.003.011.01.021.013.032.01.031.014.064.014.098v9.652l3.76-2.164V5.527c0-.033.004-.066.013-.098.003-.01.01-.02.013-.032a.487.487 0 01.024-.059c.007-.012.018-.02.025-.033.012-.015.021-.03.033-.043.012-.012.025-.02.037-.028.014-.01.026-.023.041-.032h.001l4.513-2.598a.375.375 0 01.375 0l4.513 2.598c.016.01.027.021.042.031.012.01.025.018.036.028.013.014.022.03.034.044.008.012.019.021.024.033.011.02.018.04.024.06.006.01.012.021.015.032zm-.74 5.032V6.179l-1.578.908-2.182 1.256v4.283zm-4.51 7.75v-4.287l-2.147 1.225-6.126 3.498v4.325zM1.093 3.624v14.588l8.273 4.761v-4.325l-4.322-2.445-.002-.003H5.04c-.014-.01-.025-.021-.04-.031-.011-.01-.024-.018-.035-.027l-.001-.002c-.013-.012-.021-.025-.031-.04-.01-.011-.021-.022-.028-.036h-.002c-.008-.014-.013-.031-.02-.047-.006-.016-.014-.027-.018-.043a.49.49 0 01-.008-.057c-.002-.014-.006-.027-.006-.041V5.789l-2.18-1.257zM5.23.81L1.47 2.974l3.76 2.164 3.758-2.164zm1.956 13.505l2.182-1.256V3.624l-1.58.91-2.182 1.255v9.435zm11.581-10.95l-3.76 2.163 3.76 2.163 3.759-2.164zm-.376 4.978L16.21 7.087 14.63 6.18v4.283l2.182 1.256 1.58.908zm-8.65 9.654l5.514-3.148 2.756-1.572-3.757-2.163-4.323 2.489-3.941 2.27z"/>
                        </svg>
                        <h3 class="text-2xl font-bold text-slate-800">Laravel</h3>
                    </div>
                    <p class="text-sm text-slate-500">Robust and scalable backend framework</p>
                </div>
            </div>
            <div class="w-full lg:w-1/2">
                <div class="p-8 border border-slate-200 rounded-xl shadow-md">
                    <div class="flex items-center gap-4 mb-3">
                        <svg role="img" viewBox="0 0 24 24" fill="currentColor" class="size-10 text-[#4E56A6]"><title>
                                Livewire</title>
                            <path d="M12.001 0C6.1735 0 1.4482 4.9569 1.4482 11.0723c0 2.0888.5518 4.0417 1.5098 5.709.2492.2796.544.4843.9649.4843 1.3388 0 1.2678-2.0644 2.6074-2.0644 1.3395 0 1.4111 2.0644 2.75 2.0644 1.3388 0 1.2659-2.0644 2.6054-2.0644.5845 0 .9278.3967 1.2403.8398-.2213-.2055-.4794-.3476-.8203-.3476-1.1956 0-1.3063 1.6771-2.2012 2.1406v4.5097c0 .9145.7418 1.6563 1.6562 1.6563.9145 0 1.6563-.7418 1.6563-1.6563v-5.8925c.308.4332.647.8144 1.2207.8144 1.3388 0 1.266-2.0644 2.6055-2.0644.465 0 .7734.2552 1.039.58-.1294-.0533-.2695-.0878-.4297-.0878-1.1582 0-1.296 1.574-2.1171 2.0937v2.4356c0 .823.6672 1.4902 1.4902 1.4902s1.4902-.6672 1.4902-1.4902V16.371c.3234.4657.6684.8945 1.2774.8945.7955 0 1.093-.7287 1.4843-1.3203.6878-1.4704 1.0743-3.1245 1.0743-4.873C22.5518 4.9569 17.8284 0 12.001 0zm-.5664 2.877c2.8797 0 5.2148 2.7836 5.2148 5.8066 0 3.023-1.5455 5.1504-5.2148 5.1504-3.6693 0-5.2149-2.1274-5.2149-5.1504S8.5548 2.877 11.4346 2.877zM10.0322 4.537a1.9554 2.1583 0 00-1.955 2.1582 1.9554 2.1583 0 001.955 2.1582 1.9554 2.1583 0 001.9551-2.1582 1.9554 2.1583 0 00-1.955-2.1582zm-.3261.664a.9777.9961 0 01.9785.9962.9777.9961 0 01-.9785.996.9777.9961 0 01-.9766-.996.9777.9961 0 01.9766-.9961zM6.7568 15.6935c-1.0746 0-1.2724 1.3542-1.9511 1.9648v1.7813c0 .823.6672 1.4902 1.4902 1.4902s1.4902-.6672 1.4902-1.4902v-3.1817c-.2643-.3237-.5767-.5644-1.0293-.5644Z"/>
                        </svg>
                        <h3 class="text-2xl font-bold text-slate-800">Livewire</h3>
                    </div>
                    <p class="text-sm text-slate-500">Dynamic and reactive UI without complex JavaScript</p>
                </div>
            </div>
        </div>
        <div class="flex gap-5">
            <div class="w-full lg:w-1/2">
                <div class="p-8 border border-slate-200 rounded-xl shadow-md">
                    <div class="flex items-center gap-4 mb-3">
                        <svg role="img" viewBox="0 0 24 24" fill="currentColor" class="size-10 text-[#8BC0D0]"><title>
                                Alpine.js</title>
                            <path d="m24 12-5.72 5.746-5.724-5.741 5.724-5.75L24 12zM5.72 6.254 0 12l5.72 5.746h11.44L5.72 6.254z"/>
                        </svg>
                        <h3 class="text-2xl font-bold text-slate-800">Alpine</h3>
                    </div>
                    <p class="text-sm text-slate-500">Lightweight JavaScript framework for interactivity</p>
                </div>
            </div>
            <div class="w-full lg:w-1/2">
                <div class="p-8 border border-slate-200 rounded-xl shadow-md">
                    <div class="flex items-center gap-4 mb-3">
                        <svg role="img" viewBox="0 0 24 24" fill="currentColor" class="size-10 text-[#06B6D4]"><title>
                                Tailwind CSS</title>
                            <path d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z"/>
                        </svg>
                        <h3 class="text-2xl font-bold text-slate-800">Tailwind</h3>
                    </div>
                    <p class="text-sm text-slate-500">Utility-first styling for sleek and responsive design</p>
                </div>
            </div>
        </div>
    </div>
    <footer class="pt-10 text-slate-700">
        <div class="w-full px-7 max-w-7xl mx-auto">
            <div class="flex flex-col items-center justify-between py-10 border-t border-solid lg:flex-row border-slate-200">
                <ul class="flex flex-wrap space-x-5 text-xs">
                    <li class="mb-6 text-center flex-full lg:flex-none lg:mb-0">© 2025 Pavel Skrbel. All rights
                        reserved.
                    </li>
                    <li>v.1.0.0</li>
                </ul>
                <ul class="flex items-center mt-6 space-x-5 lg:mt-0">
                    <li>
                        <a href="https://github.com/pajaeu/statusly" target="_blank"
                           class="text-slate-600 hover:text-slate-900">
                            <span class="sr-only">GitHub</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</x-guest-layout>