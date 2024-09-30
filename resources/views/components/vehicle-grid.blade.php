@props([
    'vehicles' => null
])

<div class="mx-auto max-w-screen-xl">
    <div class="flex align-middle justify-center">
        <hr class=" mt-8 h-0.5 w-2/5 bg-pr-500">
        <p class="my-2 mx-8  p-2 font-car font-bold text-pr-400 text-lg ">CARS</p>
        <hr class=" mt-8 h-0.5 w-2/5 bg-pr-500">
        <hr>
    </div>
    <div class="md:mr-16 mr-4 mb-4 flex gap-2 justify-end">
        <div>
            <input type="text"
                   class="rounded p-1.5"
                   wire:model.live.debounce="search"
                   placeholder="Search vehicles..." />
        </div>
        <a href="{{ route('vehicle-list') }}" wire:navigate>
            <button class="border-2 border-pr-400 text-black w-16 p-1 rounded-md hover:bg-pr-400 hover:text-white">
                See All
            </button>
        </a>
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
