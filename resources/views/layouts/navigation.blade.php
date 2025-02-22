<nav class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo di kiri -->
            <div class="flex items-center">
                <a href="/" class="flex items-center">
                    <i class="fas fa-book text-blue-500 text-3xl"></i>
                    <span class="ml-2 text-xl font-bold">CatatKas</span>
                </a>
            </div>

            <!-- Menu di kanan -->
            <div class="flex items-center">
                <!-- Desktop Menu -->
                <div class="hidden sm:flex items-center space-x-8">
                    <a href="/" class="text-gray-600 hover:text-gray-900">Beranda</a>
                    <a href="{{ route('about') }}" class="text-gray-600 hover:text-gray-900">Tentang Kami</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900">Fitur Online</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900">Layanan</a>
                    
                    @auth
                        <!-- Settings Dropdown -->
                        <div class="ml-4">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>
                                        <div class="ms-1">
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        <i class="fas fa-user mr-2"></i>{{ __('Profile') }}
                                    </x-dropdown-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            <i class="fas fa-sign-out-alt mr-2"></i>{{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                            <i class="fas fa-sign-in-alt mr-2"></i>Masuk
                        </a>
                    @endauth
                </div>

                <!-- Hamburger Menu untuk Mobile -->
                <div class="flex items-center sm:hidden">
                    <button @click="open = ! open" class="text-gray-500 hover:text-gray-600 focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div x-show="open" class="sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a href="/" class="block px-4 py-2 text-gray-600 hover:bg-gray-50">Beranda</a>
            <a href="{{ route('about') }}" class="block px-4 py-2 text-gray-600 hover:bg-gray-50">Tentang Kami</a>
            <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-50">Fitur Online</a>
            <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-50">Layanan</a>
        </div>
    </div>
</nav>
