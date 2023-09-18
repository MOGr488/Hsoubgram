<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home_page') }}">
                        <x-application-logo class="block w-32 h-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                @guest
                    <div class="hidden md:flex md:items-center md:space-x-2">
                        <div class="space-x-3 text-[1.6rem] ltr:mr-5 rtl:ml-5">
                            <a href="/login"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest ltr:mr-2 rtl:ml-2">{{ __('Login') }}</a>
                            <a href="/register"
                                class="inline-flex items-center px-4 py-2 dark:text-white font-semibold text-xs uppercase tracking-widest">{{ __('Register') }}</a>
                        </div>
                    </div>
                @else
                    <div class="flex items-center space-x-3">
                        <div class="space-x-3 text-[1.6rem] mr-2 leading-5">
                            <a href="{{ route('home_page') }}">
                                {!! url()->current() == route('home_page')
                                    ? '<i class="bx bxs-home-alt-2" style="color:#ffffff"></i>'
                                    : '<i class="bx bx-home-alt-2" style="color:#ffffff"></i>' !!}
                            </a>
                            <a href="{{ route('explore') }}">
                                {!! url()->current() == route('explore')
                                    ? '<i class="bx bxs-compass" style="color:#ffffff"></i>'
                                    : '<i class="bx bx-compass" style="color:#ffffff"></i>' !!}
                            </a>

                            <a href="{{ route('create_post') }}">
                                {!! url()->current() == route('create_post')
                                    ? '<i class="bx bxs-message-square-add" style="color:#ffffff"></i>'
                                    : '<i class="bx bx-message-square-add" style="color:#ffffff"></i>' !!}
                            </a>


                        </div>

                        <div class="hidden md:block">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <div>
                                        <img src="{{ auth()->user()->image }}" alt="user profile picture"
                                            class="w-6 h-6 rounded-full">
                                    </div>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('user_profile', ['user' => auth()->user()->username])">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </div>
                @endguest
                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = !open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">


            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                @guest
                    <div class="mt-3 space-y-1">
                        <x-responsive-nav-link :href="route('login')">{{ __('Login') }}</x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('register')">{{ __('Register') }}</x-responsive-nav-link>
                    </div>
                @else
                    <div class="mt-3 space-y-1">
                        <x-responsive-nav-link :href="route('user_profile', ['user' => auth()->user()->username])">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                @endguest
            </div>
        </div>
    </div>
</nav>
