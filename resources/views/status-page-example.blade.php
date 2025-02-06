<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/test.css')
</head>
<body>
<div class="h-screen bg-slate-100">
    <div class="py-8 bg-gradient-to-bl from-orange-300 to-orange-600">
        <div class="w-full sm:max-w-3xl px-4 md:px-0 mx-auto flex items-center justify-center">
            <div>
                <img src="https://app.indexovac.cz/storage/indexlogo_web_b.png" class="w-52 h-20 object-contain brightness-0 invert-1">
                @php($minutes = rand(3, 200))
                <div class="flex items-center justify-center text-sm font-normal text-slate-50">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                        <path fill-rule="evenodd" d="M4.755 10.059a7.5 7.5 0 0 1 12.548-3.364l1.903 1.903h-3.183a.75.75 0 1 0 0 1.5h4.992a.75.75 0 0 0 .75-.75V4.356a.75.75 0 0 0-1.5 0v3.18l-1.9-1.9A9 9 0 0 0 3.306 9.67a.75.75 0 1 0 1.45.388Zm15.408 3.352a.75.75 0 0 0-.919.53 7.5 7.5 0 0 1-12.548 3.364l-1.902-1.903h3.183a.75.75 0 0 0 0-1.5H2.984a.75.75 0 0 0-.75.75v4.992a.75.75 0 0 0 1.5 0v-3.18l1.9 1.9a9 9 0 0 0 15.059-4.035.75.75 0 0 0-.53-.918Z" clip-rule="evenodd" />
                    </svg>
                    <span class="ms-2">{{ now()->subMinutes($minutes)->diffForHumans() }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full sm:max-w-3xl pt-10 px-4 md:px-0 mx-auto text-slate-800 ">
        <div class="bg-white rounded-lg shadow px-6 py-4 mb-10">
            @foreach($services as $service)
                <div class="flex items-center py-3 border-b border-gray-200 last:border-b-0">
                    <div class="inline-block text-base font-semibold flex-1 text-slate-800">{{ $service->name }}</div>
                    <div class="text-xs font-medium rounded-full flex items-center
                        @if ($service->currentIncident && $service->currentIncident->status === 'operational') text-green-500
                        @elseif ($service->currentIncident && $service->currentIncident->status === 'maintenance') text-yellow-500
                        @else text-red-500
                        @endif">
                        @if ($service->currentIncident && $service->currentIncident->status === 'operational')
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>

                        @elseif ($service->currentIncident && $service->currentIncident->status === 'maintenance')
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd" d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025.75.75 0 0 1 .313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 0 1 1.248.313 5.25 5.25 0 0 1-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 1 1 2.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0 1 12 6.75ZM4.117 19.125a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Z" clip-rule="evenodd" />
                            </svg>
                        @else
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd" d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                            </svg>
                        @endif
                        <span class="ms-1">{{ $service->currentIncident ? ucfirst($service->currentIncident->status) : 'Unknown' }}</span>
                    </div>
                </div>
            @endforeach
        </div>

        <h2 class="text-lg font-semibold mb-3">Status history</h2>
        <div class="bg-white rounded-lg shadow px-6 py-4 mb-6">
            <div class="">
                @foreach ($history as $incident)
                    <div class="border-b border-gray-200 last:border-b-0 py-2">
                        <p class="text-sm text-slate-400">{{ $incident->created_at->format('M d, Y H:i A') }}</p>
                        <p class="text-base">{{ $incident->message }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="pt-4 pb-8 flex items-center justify-center">
        <div class="text-center">
            <small class="text-sm font-medium text-slate-700">powered by</small>
            <a href="/" class="text-2xl transition-colors text-slate-900 hover:text-orange-500 block font-bold italic">statusly</a>
        </div>
    </div>
</div>
</body>
</html>
