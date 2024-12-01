<main>
    <div class="bg-sec-100 ">
        {{-- hero --}}
        <div class="">
            <div class="flex justify-center md:pt-4 py-3 mx-auto max-w-screen-xl">
                <div class="flex flex-col justify-center md:w-3/5  mx-12 md:ms-20 md:mx-0">
                    <h1 class="md:text-start text-center font-car font-bold text-gray-900 mb-2 md:text-6xl text-4xl ">
                        <span class="text-pr-400">EASY</span> WAY TO RENT A CAR
                    </h1>
                    <p class="text-justify md:mx-0 mx-8" style="line-height: 18px;">
                        Renting a car is easier than ever! With a wide selection, competitive prices, and a simple booking process, we make your experience hassle-free. Whether it’s a weekend trip or a long journey, our 24/7 customer service is here to help. Choose us for a seamless ride!
                    </p>
                    <div class="flex justify-center md:justify-start gap-2 py-1">
                        <a href="{{ route('vehicles.list') }}" wire:navigate>
                            <button class="border-2 border-pr-400 text-black w-32 p-1.5 rounded-md hover:bg-sec-400">
                                Available Cars
                            </button>
                        </a>
                        <a href="tel:{{ config('therentcar.whatsapp_number') }}">
                            <button class="border-2 border-pr-400 text-black w-32 p-1.5 rounded-md hover:bg-sec-400">
                                CONTACT US
                            </button>
                        </a>
                    </div>
                </div>
                <div class="md:w-3/5 hidden md:flex md:justify-end">
                    <img loading="lazy" class="h-24 md:h-60" src="{{ asset('assets/media/home_car.webp') }}" alt="home car">
                </div>
            </div>
            <x-vehicle-grid
                :vehicles="$vehicles"
                :models="$models"
                :brands="$brands"
                :categories="$categories"
                :categories="$categories"
                :manualOrAutoOptions="$manualOrAutoOptions"
            />
        </div>

        {{-- Our numbers section --}}
        <div class="mx-auto max-w-screen-xl mt-16 mb-32">
            <div>
                <h2 class="text-center font-car text-3xl font-medium text-pr-400"> <span
                        class=" text-gray-900">Our</span> Numbers</h2>
            </div>
            <div
                class="bg-gray-800 text-white  mt-6 rounded-md flex md:flex-row flex-col md:justify-evently items-center gap-6 md:gap-0  mx-16 max-w-screen-xl">

                <div
                    class="flex justify-around md:w-1/3 text-center my-4 h-16 align-middle md:border-b-0 md:border-r-2 border-b-2 pb-4 border-white">
                    <div class="flex flex-col justify-center">
                        <h3 class="font-car font-medium text-4xl">80</h3>
                        <p class="font-car  text-lg">Cars</p>
                    </div>
                </div>
                <div
                    class="flex justify-around md:w-1/3 text-center my-4 h-16 align-middle md:border-b-0 md:border-r-2 border-b-2 pb-4 border-white">
                    <div class="flex flex-col justify-center">
                        <h3 class="font-car font-medium text-4xl">100 + </h3>
                        <p class="font-car  text-lg">Satisfied Client</p>
                    </div>
                </div>
                <div
                    class="flex justify-around md:w-1/3 text-center my-4 h-16 align-middle  border-b-2 pb-4 border-white md:border-b-0">
                    <div class="flex flex-col justify-center">
                        <h3 class="font-car font-medium text-4xl">1200+</h3>
                        <p class="font-car  text-lg">Reservation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
