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


<div {{ $attributes->merge(['class' => $classes]) }}>
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
    <div {{ $attributes->merge(['class' => 'mt-4 px-4 pb-5 flex flex-grow flex-col justify-between']) }}>
        <div class="">
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
        <div>
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
                <a href="{{ route('vehicle.reservation', ['vehicle' => $vehicle->id]) }}"
                   class="flex items-center justify-center rounded-md bg-slate-900 hover:bg-pr-400 px-3 py-1.5 text-center text-sm font-medium text-white focus:outline-none focus:ring-2 focus:ring-pr-300">
                    {{--<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                    </svg>--}}
                    Reserve
                </a>
                <a
                    href="{{ generateWhatsAppLink(vehicle: $vehicle) }}"
                    target="_blank"
                    class="flex items-center justify-center rounded-md bg-slate-900 hover:bg-pr-400 px-3 py-1.5 text-center text-sm font-medium text-white focus:outline-none focus:ring-2 focus:ring-pr-300">
                    {{ ($view == 'full') ? 'Direct Booking on WhatsApp' : 'Direct WhatsApp' }}
                </a>
            </div>
        </div>
        @if($long_description_preview)
            <hr class="mt-3">
            <p class="text-sm text-gray-600 mt-2">{!! $vehicle->long_description ?? '' !!}</p>
        @endif
    </div>
</div>
