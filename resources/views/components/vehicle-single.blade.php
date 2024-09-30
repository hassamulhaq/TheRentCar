@props([
    'vehicle' => null,
    'view' => 'card', // card, full
    'short_description_preview' => false,
    'long_description_preview' => false,
])


@php
    $classes = ($view == 'full')
                ? 'block w-full bg-white shadow-sm rounded-lg border border-dashed border-gray-200'
                : 'relative flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-dashed border-gray-200 bg-white shadow-sm hover:drop-shadow-md';
@endphp

<x-slot name="seo">
    {!! seo() !!}
</x-slot>

@push('js_after')
    <script type="module">
        swiperVehicle();
    </script>
@endpush

@push('css_after')
    <style>

    </style>
@endpush

<div {{ $attributes->merge(['class' => $classes]) }}>
    @if($view == 'full' && $vehicle->getMedia('gallery')->count())
        <div class="relative w-full lg:w-1/2 mx-auto">
            <div class="swiper vehicle-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img loading="lazy"
                             class="object-contain w-full h-80"
                             src="{{ $vehicle->getFirstMediaUrl('thumbnail') }}"
                             alt="vehicle image" />
                    </div>
                    @foreach($vehicle->getMedia('gallery') as $media)
                        <div class="swiper-slide">
                            <img loading="lazy"
                                class="object-contain w-full h-80"
                                src="{{ $media->getUrl() }}"
                                alt="vehicle image" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <a
            href="{{ route('vehicles.view', ['vehicle' => $vehicle->slug]) }}"
            class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl"
            wire:navigate>
            <img
                loading="lazy"
                class="object-contain w-full h-full"
                src="{{ $vehicle->getFirstMediaUrl('thumbnail') }}" alt="vehicle image" />
            @if($vehicle->discounted_price)
                <span class="absolute top-0 left-0 m-2 rounded-full bg-pr-400 px-2 text-center text-sm font-medium text-white">{{ $vehicle->discounted_price ?? '0' }}% OFF</span>
            @endif
        </a>
    @endif
    <div {{ $attributes->merge(['class' => 'mt-4 px-4 pb-5 flex flex-grow flex-col justify-between']) }}>
        <div class="{{ ($view == 'full') ? 'w-[380px] mx-auto border border-dashed p-2' : ' ' }}">
            <div class="flex items-center justify-between">
                <h2 class="font-medium text-2xl">
                    <a
                        href="{{ route('vehicles.view', ['vehicle' => $vehicle->slug]) }}"
                        class="hover:text-pr-600"
                        wire:navigate>{{ $vehicle->title }}</a>
                </h2>
                <h2><small>Model: </small>{{ $vehicle->model ?? '' }}</h2>
            </div>
            @if($short_description_preview)
                <p class="text-sm text-gray-600 mt-2">{{ $vehicle->short_description ?? '' }}</p>
            @endif
            <div>
                <span class="tracking-tight text-slate-900 text-sm">
                    <span class="flex justify-start items-center gap-2">
                        Brand:
                        @if($vehicle->brand)
                            <img loading="lazy" title="{{ $vehicle?->brand?->name ?? '' }}" width="30px" src="{{ $vehicle->brand->getFirstMediaUrl('thumbnail') }}" alt="{{ $vehicle?->brand?->name ?? '' }}">
                        @else
                            <span class="uppercase bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">{{ $vehicle?->brand?->name ?? '' }}</span>
                        @endif
                    </span>
                    {{ $vehicle->engine ?? '' }}
                </span>
            </div>
            <!-- meta -->
            <div class=" bg-white flex justify-between py-3">
                <p class="font-medium flex gap-0.5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    {{ $vehicle->number_of_seats ?? '' }} seats
                </p>
                <div class="h-7 border"></div>
                <p class="font-medium flex gap-0.5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    {{ Str::ucfirst($vehicle->manual_or_auto) ?? 'Auto' }}
                </p>
            </div>
            <!-- /meta -->
        </div>
        <div class="{{ ($view == 'full') ? 'w-[380px] mx-auto border border-dashed p-2 mt-2' : ' ' }}">
            <div class="mt-2 mb-5 flex items-center justify-between">
                <p class="vehicle-pricing-block">
                    <span class="">{{ $vehicle->currency->code }}</span>
                    <span class="text-2xl font-bold text-slate-900">
                    {{ $vehicle->price_per_day }} {{ $vehicle->currency->symbol }}
                </span>
                    @if(isset($vehicle->discounted_price))
                        <span class="text-sm text-slate-900 line-through">
                        {{ intval(($vehicle->price_per_day * 100) / (100 - $vehicle->discounted_price)) }}
                    </span>
                    @endif
                </p>

                @if($vehicle->rating)
                    <div class="flex item\s-center">
                        @for ($i = 0; $i < $vehicle?->rating?->count; $i++)
                            <svg aria-hidden="true" class="h-5 w-5 text-pr-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        @endfor
                        <span class="mr-2 ml-3 rounded bg-pr-300 px-2.5 py-0.5 text-xs font-semibold">{{ $vehicle?->rating?->count ?? 0 }}.0</span>
                    </div>
                @endif
            </div>
            <div class="flex items-center gap-2 {{ ($view == 'full') ? 'justify-end' : 'justify-between' }}">
                <div>
                    {{-- {{ route('vehicles.reservation', ['vehicle' => $vehicle->id]) }} --}}
                    <a href="{{ generateWhatsAppLink(vehicle: $vehicle) }}"
                       target="_blank"
                       class="flex items-center justify-center rounded-md bg-slate-900 hover:bg-pr-400 px-3 py-1.5 text-center text-sm font-medium text-white focus:outline-none focus:ring-2 focus:ring-pr-300">
                    Reserve
                </a>
                </div>
                <div>
                    <a
                        href="{{ generateWhatsAppLink(vehicle: $vehicle) }}"
                        target="_blank"
                        class="flex gap-2 items-center justify-center rounded-md bg-slate-900 hover:bg-pr-400 px-3 py-1.5 text-center text-sm font-medium text-white focus:outline-none focus:ring-2 focus:ring-pr-300">
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 40 40" width="{{ ($view == 'full') ? '24px' : '16px' }}" height="{{ ($view == 'full') ? '24px' : '16px' }}"><path fill="#f2faff" d="M4.221,29.298l-0.104-0.181c-1.608-2.786-2.459-5.969-2.458-9.205 C1.663,9.76,9.926,1.5,20.078,1.5c4.926,0.002,9.553,1.919,13.03,5.399c3.477,3.48,5.392,8.107,5.392,13.028 c-0.005,10.153-8.268,18.414-18.42,18.414c-3.082-0.002-6.126-0.776-8.811-2.24l-0.174-0.096l-9.385,2.46L4.221,29.298z"/><path fill="#788b9c" d="M20.078,2L20.078,2c4.791,0.001,9.293,1.867,12.676,5.253C36.137,10.639,38,15.14,38,19.927 c-0.005,9.878-8.043,17.914-17.927,17.914c-2.991-0.001-5.952-0.755-8.564-2.18l-0.349-0.19l-0.384,0.101l-8.354,2.19 l2.226-8.131l0.11-0.403L4.55,28.867c-1.566-2.711-2.393-5.808-2.391-8.955C2.163,10.036,10.202,2,20.078,2 M20.078,1 C9.651,1,1.163,9.485,1.158,19.912c-0.002,3.333,0.869,6.588,2.525,9.455L1,39.169l10.03-2.63c2.763,1.507,5.875,2.3,9.042,2.302 h0.008c10.427,0,18.915-8.485,18.92-18.914c0-5.054-1.966-9.807-5.538-13.382C29.89,2.971,25.14,1.002,20.078,1L20.078,1z"/><path fill="#79ba7e" d="M19.995,35c-2.504-0.001-4.982-0.632-7.166-1.823l-1.433-0.782l-1.579,0.414l-3.241,0.85l0.83-3.03	l0.453-1.656L7,27.485c-1.309-2.267-2.001-4.858-2-7.492C5.004,11.726,11.732,5.001,19.998,5c4.011,0.001,7.779,1.563,10.61,4.397	C33.441,12.231,35,15.999,35,20.005C34.996,28.273,28.268,35,19.995,35z"/><path fill="#fff" d="M28.28,23.688c-0.45-0.224-2.66-1.313-3.071-1.462c-0.413-0.151-0.712-0.224-1.012,0.224	c-0.3,0.45-1.161,1.462-1.423,1.761c-0.262,0.3-0.524,0.337-0.974,0.113c-0.45-0.224-1.899-0.7-3.615-2.231	c-1.337-1.191-2.239-2.663-2.501-3.113c-0.262-0.45-0.029-0.693,0.197-0.917c0.202-0.202,0.45-0.525,0.674-0.787	c0.224-0.262,0.3-0.45,0.45-0.75c0.151-0.3,0.075-0.563-0.038-0.787c-0.113-0.224-1.012-2.437-1.387-3.336	c-0.364-0.876-0.736-0.757-1.012-0.771c-0.262-0.014-0.562-0.015-0.861-0.015c-0.3,0-0.787,0.113-1.198,0.563	c-0.411,0.45-1.573,1.537-1.573,3.749s1.611,4.35,1.835,4.649c0.224,0.3,3.169,4.839,7.68,6.786	c1.072,0.462,1.911,0.739,2.562,0.947c1.076,0.342,2.057,0.294,2.832,0.178c0.864-0.129,2.66-1.087,3.034-2.136	c0.375-1.049,0.375-1.95,0.262-2.136C29.03,24.025,28.731,23.912,28.28,23.688z"/></svg>
                        {{ ($view == 'full') ? 'Direct Booking on WhatsApp' : 'WhatsApp Booking' }}
                    </a>
                </div>
            </div>
        </div>
        @if($long_description_preview)
            <hr class="mt-3">
            <p class="text-sm text-gray-600 mt-2">{!! $vehicle->long_description ?? '' !!}</p>
        @endif
    </div>
</div>
