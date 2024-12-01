@props([
    'vehicles' => [],
    'models' => [],
    'brands' => [],
    'categories' => [],
    'categories' => [],
    'manualOrAutoOptions' => []
])

<div class="mx-auto max-w-screen-xl">
    <div class="flex align-middle justify-center">
        <hr class=" mt-8 h-0.5 w-2/5 bg-pr-500">
        <p class="my-2 mx-8  p-2 font-car font-bold text-pr-400 text-lg ">CARS</p>
        <hr class=" mt-8 h-0.5 w-2/5 bg-pr-500">
        <hr>
    </div>
    <div class="">
        <div class="filters bg-gray-100 rounded-md pt-1.5 pb-2">
            <div class="flex justify-end p-1">
                <div class="flex gap-4">
                    <input type="text"
                           class="rounded p-1.5 w-[300px]"
                           wire:model.live.debounce="search"
                           placeholder="Search vehicles..."/>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-1.5 p-1.5 lg:flex lg:gap-1.5 lg:justify-end mt-1.5">
                <!-- Model filter dropdown -->
                <select wire:model="model" class="rounded p-1.5 w-[140px]">
                    <option value="">Select Model</option>
                    @foreach($models as $model)
                        <option value="{{ $model }}">{{ $model }}</option>
                    @endforeach
                </select>

                <select wire:model="brand" class="rounded p-1.5 w-[140px]">
                    <option value="">Select Brand</option>
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>

                <select wire:model="category" class="rounded p-1.5 w-[170px]">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>

                <select wire:model="manualOrAuto" class="rounded p-1.5 w-[160px]">
                    <option value="">Manual or Auto</option>
                    @foreach($manualOrAutoOptions as $option)
                        <option value="{{ $option['label'] }}">{{ $option['value'] }}</option>
                    @endforeach
                </select>

                <input type="text"
                       class="rounded p-1.5"
                       wire:model="noOfSeat"
                       placeholder="Number of Seats"/>

                <input type="text"
                       class="rounded p-1.5"
                       wire:model="perDayPrice"
                       placeholder="Price per Day"/>

                <button wire:click="applyFilters"
                        class="rounded-md bg-slate-900 hover:bg-pr-400 px-6 py-2 text-center text-sm font-medium text-white focus:outline-none focus:ring-2 focus:ring-pr-300">
                    Filter
                </button>
            </div>
        </div>
    </div>
    <div class="max-w-screen-xl justify-center mx-auto md:ps-4 p-2">
        <div class="grid lg:grid-cols-4 md:grid-cols-3 gap-4">
            @forelse($vehicles as $vehicle)
                <x-vehicle-single :vehicle="$vehicle" />
            @empty
                <div class="text-center">
                    <h2 class="text-2xl font-car font-medium text-pr-400">No vehicles found</h2>
                </div>
            @endforelse
        </div>

        {{ $vehicles->links(data: ['scrollTo' => false]) }}
    </div>
</div>
