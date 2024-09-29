<footer class="px-4  sm:p-6 bg-gray-800">
    <div class="pt-10 mx-auto max-w-screen-xl relative">
        <div class="md:flex md:justify-between">
            <div class="mb-12 md:mb-0 flex justify-center ">
                <a href="" class="flex items-center">
                    <img loading="lazy" src="{{ asset('assets/media/logo_lite.png') }}" class="mr-3 h-24" alt="Hassam">
                </a>
            </div>

            <div class="grid grid-cols-3 gap-8 ">
                <div>
                    <h2 class="mb-6 text-sm font-semibold  uppercase text-white">Resources</h2>
                    <ul class=" text-gray-400">
                        <li>
                            <a href="https://laravel.com/" target="_blank" class="hover:underline">Laravel 11.x</a>
                        </li>
                        <li>
                            <a href="https://filamentphp.com/" target="_blank" class="hover:underline">Filament</a>
                        </li>
                        <li>
                            <a href="https://livewire.laravel.com/" target="_blank" class="hover:underline">Livewire</a>
                        </li>
                        <li>
                            <a href="https://tailwindcss.com/" target="_blank" class="hover:underline">Tailwind CSS</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold  uppercase text-white">Follow us</h2>
                    <ul class="text-gray-400">
                        <li>
                            <a href="javascript:void(0)" class="hover:underline " target="_blank">Github</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover:underline" target="_blank">Linkedin</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold  uppercase text-white">Legal</h2>
                    <ul class=" text-gray-400">
                        <li>
                            <a href="javascript:void(0)" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover:underline">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <hr class="my-6  sm:mx-auto border-gray-700 lg:my-8">

        <div class="sm:flex sm:items-center sm:justify-between md:ms-0 pb-4  ms-32">
                    <span class="text-sm sm:text-center text-gray-400 md:ms-0 -ms-8">
                        © {{ now()->year }}
                        <a href="javascript:void(0)" target="_blank" class="hover:underline">********™</a>. All Rights Reserved.
                    </span>
            <div class="flex mt-4 space-x-6 justify-center items-center sm:mt-0">
                <a href="javascript:void(0)" target="_blank" class="text-gray-500 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="24px" height="24px" fill-rule="nonzero"><g fill="#eeeeee" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M11,4c-3.85433,0 -7,3.14567 -7,7v28c0,3.85433 3.14567,7 7,7h28c3.85433,0 7,-3.14567 7,-7v-28c0,-3.85433 -3.14567,-7 -7,-7zM11,6h28c2.77367,0 5,2.22633 5,5v28c0,2.77367 -2.22633,5 -5,5h-28c-2.77367,0 -5,-2.22633 -5,-5v-28c0,-2.77367 2.22633,-5 5,-5zM13.08594,13l9.22266,13.10352l-9.30859,10.89648h2.5l7.9375,-9.29297l6.53906,9.29297h7.9375l-10.125,-14.38672l8.21094,-9.61328h-2.5l-6.83984,8.00977l-5.63672,-8.00977zM16.91406,15h3.06445l14.10742,20h-3.06445z"></path></g></g></svg>
                </a>
                <a href="javascript:void(0)" target="_blank" class="text-gray-500 hover:text-white">
                    {{--<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="24px" height="24px" fill-rule="nonzero"><g fill="#eeeeee" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(3.2,3.2)"><path d="M26.81641,9c-9.27344,0 -16.81641,7.54297 -16.81641,16.81641v26.36719c0,9.27344 7.54297,16.81641 16.81641,16.81641h26.36719c9.27344,0 16.81641,-7.54297 16.81641,-16.81641v-26.36719c0,-9.27344 -7.54297,-16.81641 -16.81641,-16.81641zM26.81641,11h26.36719c8.19141,0 14.81641,6.625 14.81641,14.81641v26.36719c0,8.19141 -6.625,14.81641 -14.81641,14.81641h-26.36719c-8.19141,0 -14.81641,-6.625 -14.81641,-14.81641v-26.36719c0,-8.19141 6.625,-14.81641 14.81641,-14.81641zM58,19.5c-1.37891,0 -2.5,1.12109 -2.5,2.5c0,1.37891 1.12109,2.5 2.5,2.5c1.37891,0 2.5,-1.12109 2.5,-2.5c0,-1.37891 -1.12109,-2.5 -2.5,-2.5zM40,22c-9.37891,0 -17,7.62109 -17,17c0,9.37891 7.62109,17 17,17c9.37891,0 17,-7.62109 17,-17c0,-9.37891 -7.62109,-17 -17,-17zM40,24c8.29688,0 15,6.70313 15,15c0,8.29688 -6.70312,15 -15,15c-8.29687,0 -15,-6.70312 -15,-15c0,-8.29687 6.70313,-15 15,-15zM40,27c-0.55078,0 -1,0.44922 -1,1c0,0.55078 0.44922,1 1,1c0.55078,0 1,-0.44922 1,-1c0,-0.55078 -0.44922,-1 -1,-1zM35.79688,27.83594c-0.13281,0 -0.26562,0.02344 -0.39062,0.07422c-0.50781,0.21484 -0.75,0.79688 -0.53906,1.30859c0.21094,0.51172 0.79688,0.75391 1.30469,0.54297c0.51172,-0.21484 0.75391,-0.79687 0.54297,-1.30859c-0.15234,-0.37109 -0.51562,-0.61328 -0.91797,-0.61719zM44.23047,27.83594c-0.41406,-0.00781 -0.78906,0.23438 -0.94531,0.61719c-0.21094,0.51172 0.03125,1.09375 0.54297,1.30859c0.50781,0.21094 1.09375,-0.03125 1.30469,-0.54297c0.21094,-0.51172 -0.03125,-1.09375 -0.53906,-1.30859c-0.11719,-0.04687 -0.23828,-0.07031 -0.36328,-0.07422zM32.23438,30.22266c-0.26953,-0.00391 -0.52734,0.10156 -0.71875,0.29297c-0.39062,0.39063 -0.39062,1.02344 0,1.41406c0.39063,0.39063 1.02344,0.39063 1.41406,0c0.39063,-0.39062 0.39063,-1.02344 0,-1.41406c-0.18359,-0.18359 -0.43359,-0.28906 -0.69531,-0.29297zM47.79297,30.22266c-0.27344,-0.00391 -0.53125,0.10156 -0.72266,0.29297c-0.39062,0.39063 -0.39062,1.02344 0,1.41406c0.39063,0.39063 1.02344,0.39063 1.41406,0c0.39063,-0.39062 0.39063,-1.02344 0,-1.41406c-0.18359,-0.18359 -0.43359,-0.28906 -0.69141,-0.29297zM50.17188,33.78906c-0.13672,0 -0.26953,0.02344 -0.39062,0.07422c-0.51172,0.21484 -0.75391,0.79688 -0.54297,1.30859c0.21094,0.51172 0.79688,0.75391 1.30859,0.54297c0.50781,-0.21484 0.75,-0.79687 0.53906,-1.30859c-0.15234,-0.37109 -0.51562,-0.61328 -0.91406,-0.61719zM29.85938,33.79297c-0.41406,-0.01172 -0.78906,0.23438 -0.94531,0.61328c-0.21094,0.51172 0.03125,1.09766 0.53906,1.30859c0.24609,0.10156 0.52344,0.10156 0.76953,0c0.24219,-0.10156 0.4375,-0.29687 0.53906,-0.54297c0.10156,-0.24609 0.10156,-0.51953 0,-0.76562c-0.10156,-0.24609 -0.29687,-0.44141 -0.54297,-0.54297c-0.11328,-0.04297 -0.23437,-0.07031 -0.35937,-0.07031zM29,38c-0.55078,0 -1,0.44922 -1,1c0,0.55078 0.44922,1 1,1c0.55078,0 1,-0.44922 1,-1c0,-0.55078 -0.44922,-1 -1,-1zM51,38c-0.55078,0 -1,0.44922 -1,1c0,0.55078 0.44922,1 1,1c0.55078,0 1,-0.44922 1,-1c0,-0.55078 -0.44922,-1 -1,-1zM29.84375,42.20703c-0.13281,0 -0.26562,0.02734 -0.39062,0.07813c-0.50781,0.21094 -0.75,0.79688 -0.53906,1.30859c0.21094,0.50781 0.79688,0.75 1.30469,0.53906c0.51172,-0.21094 0.75391,-0.79687 0.54297,-1.30469c-0.15234,-0.37109 -0.51562,-0.61719 -0.91797,-0.62109zM50.1875,42.20703c-0.41406,-0.00781 -0.78906,0.23828 -0.94922,0.61719c-0.21094,0.51172 0.03125,1.09375 0.54297,1.30469c0.51172,0.21484 1.09375,-0.02734 1.30859,-0.53906c0.21094,-0.51172 -0.03125,-1.09375 -0.54297,-1.30859c-0.11328,-0.04687 -0.23828,-0.07031 -0.35937,-0.07422zM32.23438,45.77734c-0.26953,-0.00391 -0.53125,0.10156 -0.71875,0.29297c-0.39062,0.39063 -0.39062,1.02344 0,1.41406c0.38672,0.39063 1.02344,0.39063 1.41016,0c0.39063,-0.39062 0.39063,-1.02344 0,-1.41406c-0.18359,-0.18359 -0.42969,-0.28906 -0.69141,-0.29297zM47.79297,45.78125c-0.27344,-0.00781 -0.53125,0.09766 -0.72266,0.28906c-0.1875,0.1875 -0.29297,0.44141 -0.29297,0.70703c0,0.26563 0.10547,0.51953 0.29297,0.70703c0.39063,0.39063 1.02344,0.39063 1.41406,0c0.1875,-0.1875 0.29297,-0.44141 0.29297,-0.70703c0,-0.26562 -0.10547,-0.51953 -0.29297,-0.70703c-0.18359,-0.18359 -0.43359,-0.28906 -0.69141,-0.28906zM35.8125,48.16016c-0.41406,-0.00781 -0.78906,0.23828 -0.94531,0.62109c-0.21094,0.50781 0.03125,1.09375 0.53906,1.30469c0.51172,0.21094 1.09766,-0.03125 1.30859,-0.53906c0.21094,-0.51172 -0.03125,-1.09766 -0.54297,-1.30859c-0.11328,-0.04687 -0.23437,-0.07422 -0.35937,-0.07812zM44.21875,48.16016c-0.13281,0 -0.26562,0.02734 -0.39062,0.07813c-0.51172,0.21094 -0.75391,0.79688 -0.54297,1.30859c0.21484,0.50781 0.79688,0.75 1.30859,0.53906c0.51172,-0.21094 0.75391,-0.79687 0.54297,-1.30469c-0.15625,-0.37109 -0.51562,-0.61719 -0.91797,-0.62109zM40,49c-0.55078,0 -1,0.44922 -1,1c0,0.55078 0.44922,1 1,1c0.55078,0 1,-0.44922 1,-1c0,-0.55078 -0.44922,-1 -1,-1z"></path></g></g></svg>--}}
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="34px" height="34px" fill-rule="nonzero"><g fill="#eeeeee" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(2.56,2.56)"><path d="M30.96094,17.6543c-7.168,0 -13,5.832 -13,13v39c0,7.168 5.832,13 13,13h39c7.168,0 13,-5.832 13,-13v-39c0,-7.169 -5.832,-13 -13,-13zM30.96094,19.6543h39c6.065,0 11,4.935 11,11v39c0,6.065 -4.935,11 -11,11h-39c-6.065,0 -11,-4.935 -11,-11v-39c0,-6.065 4.935,-11 11,-11zM33.79883,22.65234c-5.976,0 -10.83789,4.86189 -10.83789,10.83789v33.32617c0,5.976 4.86189,10.83594 10.83789,10.83594h33.32422c5.976,0 10.83789,-4.85994 10.83789,-10.83594v-18.66211c0,-0.277 -0.224,-0.5 -0.5,-0.5c-0.276,0 -0.5,0.224 -0.5,0.5v18.66211c0,5.424 -4.41389,9.83789 -9.83789,9.83789h-33.32422c-5.424,0 -9.83789,-4.41389 -9.83789,-9.83789v-33.32617c0,-5.424 4.41389,-9.83789 9.83789,-9.83789h33.66211c0.276,0 0.5,-0.224 0.5,-0.5c0,-0.276 -0.224,-0.5 -0.5,-0.5zM50,34.69531c-3.979,0 -4.46444,0.01084 -6.02344,0.08984c-1.459,0.063 -2.59845,0.27913 -3.68945,0.70313c-1.085,0.418 -1.93014,0.96734 -2.74414,1.77734c-0.815,0.81 -1.36806,1.65152 -1.78906,2.72852c-0.426,1.084 -0.64498,2.21436 -0.70898,3.69336c-0.067,1.526 -0.08984,2.03998 -0.08984,5.95898c0,3.955 0.0128,4.43833 0.0918,5.98633c0.063,1.451 0.28103,2.58297 0.70703,3.66797c0.421,1.078 0.97406,1.91852 1.78906,2.72852c0.814,0.81 1.65914,1.35834 2.74414,1.77734c1.09,0.423 2.2297,0.64008 3.7207,0.70508c1.535,0.066 2.05119,0.08789 5.99219,0.08789c3.979,0 4.46544,-0.01084 6.02344,-0.08984c1.459,-0.063 2.5965,-0.27912 3.6875,-0.70312c1.084,-0.418 1.93109,-0.96734 2.74609,-1.77734c0.815,-0.81 1.36611,-1.65152 1.78711,-2.72852c0.426,-1.084 0.64498,-2.21545 0.70898,-3.68945c0.067,-1.526 0.0918,-2.03989 0.0918,-5.96289c0,-3.956 -0.0118,-4.43933 -0.0918,-5.98633c-0.063,-1.452 -0.28298,-2.58297 -0.70898,-3.66797c-0.421,-1.078 -0.97211,-1.92047 -1.78711,-2.73047c-0.815,-0.81 -1.66014,-1.35639 -2.74414,-1.77539c-1.09,-0.423 -2.2297,-0.64008 -3.7207,-0.70508c-1.535,-0.066 -2.05119,-0.08789 -5.99219,-0.08789zM50.00195,35.69531c3.919,0 4.43147,0.02089 5.98047,0.08789c1.347,0.059 2.38609,0.25667 3.37109,0.63867c0.949,0.366 1.68939,0.84378 2.40039,1.55078c0.712,0.708 1.1945,1.44277 1.5625,2.38477v0.00195c0.384,0.978 0.58067,2.00766 0.63867,3.34766c0.079,1.528 0.0918,2.00845 0.0918,5.93945c-0.001,3.903 -0.0248,4.41136 -0.0918,5.94336c-0.059,1.337 -0.25563,2.36966 -0.64062,3.34766c-0.368,0.941 -0.8495,1.67677 -1.5625,2.38477c-0.711,0.707 -1.45234,1.18478 -2.40234,1.55078c-0.986,0.382 -2.02405,0.58067 -3.37305,0.63867c-1.539,0.078 -2.02156,0.08789 -5.97656,0.08789c-3.92,0 -4.43247,-0.02089 -5.98047,-0.08789c-1.347,-0.059 -2.38609,-0.25667 -3.37109,-0.63867c-0.95,-0.367 -1.68939,-0.84378 -2.40039,-1.55078c-0.712,-0.708 -1.1935,-1.44372 -1.5625,-2.38672c-0.384,-0.979 -0.58067,-2.00961 -0.63867,-3.34961c-0.078,-1.529 -0.08984,-2.00845 -0.08984,-5.93945c0,-3.898 0.02284,-4.40541 0.08984,-5.94141c0.059,-1.337 0.25563,-2.37066 0.64063,-3.34766c0.368,-0.942 0.84855,-1.67777 1.56055,-2.38477c0.711,-0.707 1.45234,-1.18478 2.40234,-1.55078c0.986,-0.382 2.026,-0.58067 3.375,-0.63867c1.54,-0.078 2.02156,-0.08789 5.97656,-0.08789zM77.46094,37.6543c-0.276,0 -0.5,0.223 -0.5,0.5v2c0,0.276 0.224,0.5 0.5,0.5c0.276,0 0.5,-0.224 0.5,-0.5v-2c0,-0.276 -0.224,-0.5 -0.5,-0.5zM58.0293,39.19531c-1.236,0 -2.24219,1.00047 -2.24219,2.23047c0,1.23 1.00619,2.23047 2.24219,2.23047c1.236,0 2.24219,-1.00047 2.24219,-2.23047c0.001,-1.23 -1.00519,-2.23047 -2.24219,-2.23047zM58.0293,40.19531c0.685,0 1.24219,0.55147 1.24219,1.23047c0.001,0.679 -0.55619,1.23047 -1.24219,1.23047c-0.685,0 -1.24219,-0.55147 -1.24219,-1.23047c0,-0.679 0.55719,-1.23047 1.24219,-1.23047zM77.46094,41.6543c-0.276,0 -0.5,0.224 -0.5,0.5v4c0,0.276 0.224,0.5 0.5,0.5c0.276,0 0.5,-0.224 0.5,-0.5v-4c0,-0.277 -0.224,-0.5 -0.5,-0.5zM49.98828,41.7207c-4.397,0 -7.97461,3.55478 -7.97461,7.92578c0,4.371 3.57761,7.92773 7.97461,7.92773c4.397,0 7.97461,-3.55673 7.97461,-7.92773c0,-4.37 -3.57761,-7.92578 -7.97461,-7.92578zM49.98828,42.7207c3.846,0 6.97461,3.10578 6.97461,6.92578c0,3.82 -3.12861,6.92773 -6.97461,6.92773c-3.846,0 -6.97461,-3.10773 -6.97461,-6.92773c0,-3.819 3.12861,-6.92578 6.97461,-6.92578z"></path></g></g></svg>
                </a>
            </div>
        </div>
        <div>
            <a href="javascript:void(0);" onclick="scrollToTop();" class="text-white absolute top-4 md:-right-8 -right-2">
                <svg viewBox="0 0 24 24" width="24px" height="24px" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M17 15L12 10L7 15" stroke="#eeeeee" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            </a>
        </div>
    </div>
</footer>
