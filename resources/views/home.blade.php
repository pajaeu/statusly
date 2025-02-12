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
    <div class="w-full px-7 pb-16 lg:pb-24 max-w-6xl mx-auto" x-data="{ show: 'public' }">
        <div class="max-w-lg mx-auto mb-6">
            <div class="flex flex-wrap justify-center bg-white rounded-[16px] p-2 border border-slate-200">
                <div class="cursor-pointer md:flex-1 flex justify-center items-center px-3 py-2 text-xs font-semibold rounded-lg" :class="{ 'bg-slate-100': show === 'public' }" @click="show = 'public'">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="hidden sm:block size-5 me-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    Public Page
                </div>
                <div class="cursor-pointer md:flex-1 flex justify-center items-center px-3 py-2 text-xs font-semibold rounded-lg" :class="{ 'bg-slate-100': show === 'services' }" @click="show = 'services'">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="hidden sm:block size-5 me-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 0 1-3-3m3 3a3 3 0 1 0 0 6h13.5a3 3 0 1 0 0-6m-16.5-3a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3m-19.5 0a4.5 4.5 0 0 1 .9-2.7L5.737 5.1a3.375 3.375 0 0 1 2.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 0 1 .9 2.7m0 0a3 3 0 0 1-3 3m0 3h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Zm-3 6h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Z" />
                    </svg>
                    Services
                </div>
                <div class="cursor-pointer md:flex-1 flex justify-center items-center px-3 py-2 text-xs font-semibold rounded-lg" :class="{ 'bg-slate-100': show === 'themes' }" @click="show = 'themes'">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="hidden sm:block size-5 me-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.098 19.902a3.75 3.75 0 0 0 5.304 0l6.401-6.402M6.75 21A3.75 3.75 0 0 1 3 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 0 0 3.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008Z" />
                    </svg>
                    Themes
                </div>
                <div class="cursor-pointer md:flex-1 flex justify-center items-center px-3 py-2 text-xs font-semibold rounded-lg" :class="{ 'bg-slate-100': show === 'api' }" @click="show = 'api'">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="hidden sm:block size-5 me-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                    </svg>
                    API
                </div>
            </div>
        </div>
        <div class="ring-1 ring-slate-200 rounded-[20px] p-2 shadow-lg">
            <img src="{{ asset('img/screenshots/public.png') }}" alt="Statusly screenshot" class="w-full rounded-xl" x-show="show === 'public'">
            <img src="{{ asset('img/screenshots/services.png') }}" alt="Statusly screenshot" class="w-full rounded-xl" x-show="show === 'services'">
            <img src="{{ asset('img/screenshots/theme.png') }}" alt="Statusly screenshot" class="w-full rounded-xl" x-show="show === 'themes'">
            <img src="{{ asset('img/screenshots/api.png') }}" alt="Statusly screenshot" class="w-full rounded-xl" x-show="show === 'api'">
        </div>
    </div>
    <div class="w-full px-7 pb-16 md:pb-20 lg:pb-28 max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="mb-6 text-4xl font-bold text-slate-900">Our features</h2>
            <p class="text-slate-500">Stay informed about your service status with real-time monitoring and instant alerts.</p>
        </div>
        <div class="flex flex-col md:flex-row gap-5 mb-10">
            <div class="w-full md:w-1/3">
                <div class="h-full">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-orange-500 mx-auto mb-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                        </svg>
                        <h3 class="mb-2 text-xl font-semibold text-slate-800">Public Status Page</h3>
                        <p class="text-sm text-slate-500">Share a sleek status page with customers.</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3">
                <div class="h-full">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-orange-500 mx-auto mb-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                        </svg>
                        <h3 class="mb-2 text-xl font-semibold text-slate-800">Real-Time Monitoring</h3>
                        <p class="text-sm text-slate-500">Automatically checks your service health every minute.</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3">
                <div class="h-full">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-orange-500 mx-auto mb-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                        </svg>
                        <h3 class="mb-2 text-xl font-semibold text-slate-800">Automated Incident Logging</h3>
                        <p class="text-sm text-slate-500">Records service downtimes automatically.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center gap-5">
            <div class="w-full md:w-1/3">
                <div class="h-full">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-orange-500 mx-auto mb-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        <h3 class="mb-2 text-xl font-semibold text-slate-800">Open-Source</h3>
                        <p class="text-sm text-slate-500">Fully customizable with open-source flexibility.</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3">
                <div class="h-full">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-orange-500 mx-auto mb-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                        </svg>
                        <h3 class="mb-2 text-xl font-semibold text-slate-800">Developer API</h3>
                        <p class="text-sm text-slate-500">Access your service status via an API for full automation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full px-7 pb-10 lg:pb-20 max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="mb-6 text-4xl font-bold text-slate-900">🚀 Built with Cutting-Edge Technology</h2>
            <p class="text-slate-500">We leverage a powerful and efficient tech stack to ensure performance,
                scalability, and a seamless user experience.</p>
        </div>
        <div class="flex flex-col md:flex-row gap-5 mb-5">
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
        <div class="flex flex-col md:flex-row gap-5">
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