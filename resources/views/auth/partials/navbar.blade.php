<!-- Navigation Bar -->
<nav class="bg-white shadow-md" id="home">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Home Icon" class="h-8 w-8 text-teal-600 md:flex">
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
            @guest
                <button
                    class="text-base md:text-sm lg:text-md text-teal-600 border-teal-600 hover:bg-teal-50 border-2 px-4 py-2 hover-pop"
                    onclick="window.location.href='{{ route('login') }}';">
                    Login
                </button>
                <button class="bg-teal-600 text-white text-base md:text-sm lg:text-md hover:bg-teal-700 px-4 py-2 hover-pop"
                    onclick="window.location.href='{{ route('register') }}';">
                    Register
                </button>
            @endguest

            @auth
                <div class="relative">
                    <button
                        class="bg-teal-600 text-white text-base md:text-sm lg:text-md hover:bg-teal-700 px-4 py-2 flex items-center focus:outline-none"
                        id="user-menu-button" aria-expanded="false" aria-haspopup="true" onclick="toggleDropdown()">
                        {{ auth()->user()->name }}
                    </button>

                    <div id="dropdown-menu"
                        class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 ring-1 ring-black ring-opacity-5 focus:outline-none z-20">
                        <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fa fa-user mr-2" aria-hidden="true"></i>
                            Profile
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full text-left block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fa fa-sign-out mr-2" aria-hidden="true"></i>
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            @endauth
        </div>


        <button class="md:hidden text-teal-600"
            onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="2.5rem" height="2.5rem" viewBox="0,0,256,256"
                class="">
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
                <a href="{{ route('welcome') }}#home"
                    class="text-teal-700 hover:text-teal-500 transition-colors hover-pop">
                    <i class="fa fa-home mr-2" aria-hidden="true"></i>
                    Home</a>
                <a href="{{ route('welcome') }}#"
                    class="text-teal-700 hover:text-teal-500 transition-colors hover-pop">
                    <i class="fa fa-building mr-2" aria-hidden="true"></i>
                    Properties</a>
                <a href="{{ route('welcome') }}#services"
                    class="text-teal-700 hover:text-teal-500 transition-colors hover-pop">
                    <i class="fa fa-cogs mr-2" aria-hidden="true"></i>Services</a>
                <a href="{{ route('welcome') }}#about"
                    class="text-teal-700 hover:text-teal-500 transition-colors hover-pop">
                    <i class="fa fa-info-circle mr-2" aria-hidden="true"></i>
                    About</a>
                <a href="{{ route('welcome') }}#contact"
                    class="text-teal-700 hover:text-teal-500 transition-colors hover-pop">
                    <i class="fa fa-envelope mr-2" aria-hidden="true"></i>
                    Contact</a>
            @endif

            <hr class="faded-hr" style="margin-top: 25px;margin-bottom: 10px;">

            @auth
                <a href="#" class="text-teal-700 hover:text-teal-500 transition-colors hover-pop">
                    <i class="fa fa-user mr-2" aria-hidden="true"></i>
                    Profile
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-teal-700 hover:text-teal-500 transition-colors hover-pop">
                        {{-- <i class="fa-solid fa-sign-out-alt"></i> --}}
                        <i class="fa fa-sign-out mr-2" aria-hidden="true"></i>

                        Logout
                    </button>
                </form>
            @endauth



            <script>
                function toggleDropdown() {
                    console.log('Toggle function called'); // Add this line for debugging
                    const dropdownMenu = document.getElementById('dropdown-menu');
                    dropdownMenu.classList.toggle('hidden');
                }

                // Close the dropdown if clicked outside
                window.onclick = function(event) {
                    const dropdownMenu = document.getElementById('dropdown-menu');
                    const button = document.getElementById('user-menu-button');
                    if (!event.target.matches('#user-menu-button') && !dropdownMenu.contains(event.target)) {
                        if (!dropdownMenu.classList.contains('hidden')) {
                            dropdownMenu.classList.add('hidden');
                        }
                    }
                }
            </script>



            @guest
                <button class="text-teal-600 border-teal-600 hover:bg-teal-50 border-2 w-full px-4 py-2 hover-pop"
                    onclick="window.location.href='{{ route('login') }}';">
                    Login
                </button>
                <button class="bg-teal-600 text-white hover:bg-teal-700 w-full px-4 py-2 hover-pop"
                    onclick="window.location.href='{{ route('register') }}';">
                    Register
                </button>
            @endguest
        </div>
    </div>

</nav>


<script>
    function toggleDropdown() {
        const dropdown = document.getElementById('dropdown-menu');
        dropdown.classList.toggle('hidden');
    }

    // Optionally close dropdown if clicked outside
    document.addEventListener('click', function(event) {
        const dropdown = document.getElementById('dropdown-menu');
        const button = document.getElementById('user-menu-button');

        if (!button.contains(event.target)) {
            dropdown.classList.add('hidden');
        }
    });
</script>
