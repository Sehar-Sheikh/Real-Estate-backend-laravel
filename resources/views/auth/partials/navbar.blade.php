<!-- Navigation Bar -->
<nav class="bg-white shadow-md" id="home">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <img src="{{asset ("assets/images/logo.png") }}" alt="Home Icon" class="h-8 w-8 text-teal-600 md:flex">
            <span class="lg:text-xl font-bold text-teal-800 md:text-sm">
               <a href="{{ route('welcome') }}">Dream Home Real Estate</a>
            </span>
        </div>
        @if (!Route::is('password.reset'))

            <div class="hidden md:flex space-x-4">
                <a href="{{ route('welcome') }}#home"
                    class="text-base md:text-sm lg:text-lg text-teal-700 hover:text-teal-500 transition-colors hover-pop">
                    Home
                </a>
                <a href="{{ route('welcome') }}#"
                    class="text-base md:text-sm lg:text-lg text-teal-700 hover:text-teal-500 transition-colors hover-pop">
                    Properties
                </a>
                <a href="{{ route('welcome') }}#services"
                    class="text-base md:text-sm lg:text-lg text-teal-700 hover:text-teal-500 transition-colors hover-pop">
                    Services
                </a>
                <a href="{{ route('welcome') }}#about"
                    class="text-base md:text-sm lg:text-lg text-teal-700 hover:text-teal-500 transition-colors hover-pop">
                    About
                </a>
                <a href="{{ route('welcome') }}#contact"
                    class="text-base md:text-sm lg:text-lg text-teal-700 hover:text-teal-500 transition-colors hover-pop">
                    Contact
                </a>
            </div>
            @endif

            <div class="hidden md:flex space-x-2">
                <button
                    class="text-base md:text-sm lg:text-lg text-teal-600 border-teal-600 hover:bg-teal-50 border-2 px-4 py-2 hover-pop"
                    onclick="window.location.href='{{ route('login') }}';">
                    Login
                </button>
                <button
                    class="bg-teal-600 text-white text-base md:text-sm lg:text-lg hover:bg-teal-700 px-4 py-2 hover-pop"
                    onclick="window.location.href='{{ route('register') }}';">
                    Register
                </button>
            </div>

            <button class="md:hidden text-teal-600"
                onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="2.5rem" height="2.5rem"
                    viewBox="0,0,256,256" class="">
                    <g fill="#005757" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                        stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                        font-family="none" font-weight="none" font-size="none" text-anchor="none"
                        style="mix-blend-mode: normal">
                        <g transform="scale(4,4)">
                            <path d="M7,29v5l50,1v-7zM7,11v6h50v-6zM7,46v7l50,-1v-5z"></path>
                        </g>
                    </g>
                </svg>
            </button>
    </div>
    <div id="mobile-menu" class="md:hidden bg-white p-4 hidden">
        <div class="flex flex-col space-y-2">
            @if (!Route::is('password.reset'))

            <a href="{{ route('welcome') }}#home" class="text-teal-700 hover:text-teal-500 transition-colors hover-pop">Home</a>
            <a href="{{ route('welcome') }}#" class="text-teal-700 hover:text-teal-500 transition-colors hover-pop">Properties</a>
            <a href="{{ route('welcome') }}#services" class="text-teal-700 hover:text-teal-500 transition-colors hover-pop">Services</a>
            <a href="{{ route('welcome') }}#about" class="text-teal-700 hover:text-teal-500 transition-colors hover-pop">About</a>
            <a href="{{ route('welcome') }}#contact" class="text-teal-700 hover:text-teal-500 transition-colors hover-pop">Contact</a>
            @endif
            <button class="text-teal-600 border-teal-600 hover:bg-teal-50 border-2 w-full px-4 py-2 hover-pop"
                onclick="window.location.href='{{ route('login') }}';">
                Login
            </button>
            <button class="bg-teal-600 text-white hover:bg-teal-700 w-full px-4 py-2 hover-pop"
                onclick="window.location.href='{{ route('register') }}';">
                Register
            </button>
        </div>
    </div>
</nav>
