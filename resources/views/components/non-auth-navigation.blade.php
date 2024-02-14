<nav class="bg-white   p-3 border-b border-gray-400 ">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('index') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="max-sm:hidden  items-center ms-6 flex gap-4 justify-between">

                <a href={{ route('login') }}>
                    <x-primary-button>
                        Log in
                    </x-primary-button>
                </a>
                <a href={{ route('register') }}>
                    <x-secondary-button>
                        Sign Up
                    </x-secondary-button>
                </a>
            </div>

            <!-- Hamburger -->
            <div class="sm:hidden">

                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">

                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link :href="route('login')">
                            Login
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('register')">
                            Sign Up
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>
    </div>

</nav>
