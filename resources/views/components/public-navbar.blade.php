<nav x-data="{ mobileMenuOpen: false }" class="fixed top-0 left-0 right-0 z-50 bg-cream-100/80 dark:bg-zinc-900/80 backdrop-blur-md border-b border-cream-200 dark:border-zinc-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-2 sm:gap-3">
                <img src="{{ asset('images/nonoy-order-logo.jpg') }}" alt="Nonoy Lutong Bahay" class="h-10 sm:h-12 w-auto">
                <span class="hidden sm:block font-semibold text-zinc-800 dark:text-white text-lg">Nonoy Lutong Bahay</span>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center gap-6 lg:gap-8">
                <a href="#menu" class="text-zinc-600 dark:text-zinc-300 hover:text-teal-600 dark:hover:text-teal-400 transition-colors font-medium">
                    Menu
                </a>
                <a href="#how-it-works" class="text-zinc-600 dark:text-zinc-300 hover:text-teal-600 dark:hover:text-teal-400 transition-colors font-medium">
                    How It Works
                </a>
                <a href="#about" class="text-zinc-600 dark:text-zinc-300 hover:text-teal-600 dark:hover:text-teal-400 transition-colors font-medium">
                    About Us
                </a>
                <a href="#contact" class="text-zinc-600 dark:text-zinc-300 hover:text-teal-600 dark:hover:text-teal-400 transition-colors font-medium">
                    Contact
                </a>
            </div>

            <!-- Auth Buttons -->
            <div class="hidden md:flex items-center gap-3">
                @auth
                    <a href="{{ url('/dashboard') }}" class="px-4 py-2 bg-teal-600 hover:bg-teal-700 text-white rounded-lg font-medium transition-colors">
                        Dashboard
                    </a>
                @else
                    <button @click="$dispatch('open-login-modal')" class="px-4 py-2 text-zinc-700 dark:text-zinc-300 hover:text-teal-600 dark:hover:text-teal-400 font-medium transition-colors cursor-pointer">
                        Log in
                    </button>
                    @if (Route::has('register'))
                        <button @click="$dispatch('open-register-modal')" class="px-4 py-2 bg-teal-600 hover:bg-teal-700 text-white rounded-lg font-medium transition-colors cursor-pointer">
                            Register
                        </button>
                    @endif
                @endauth
            </div>

            <!-- Mobile Menu Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-3 -mr-1 rounded-lg text-zinc-600 dark:text-zinc-300 hover:bg-cream-200 dark:hover:bg-zinc-800">
                <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="mobileMenuOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" x-cloak x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             class="md:hidden py-4 border-t border-cream-200 dark:border-zinc-800">
            <div class="flex flex-col gap-1">
                <a @click="mobileMenuOpen = false" href="#menu" class="px-3 py-3 text-zinc-600 dark:text-zinc-300 hover:bg-cream-200 dark:hover:bg-zinc-800 rounded-lg font-medium">Menu</a>
                <a @click="mobileMenuOpen = false" href="#how-it-works" class="px-3 py-3 text-zinc-600 dark:text-zinc-300 hover:bg-cream-200 dark:hover:bg-zinc-800 rounded-lg font-medium">How It Works</a>
                <a @click="mobileMenuOpen = false" href="#about" class="px-3 py-3 text-zinc-600 dark:text-zinc-300 hover:bg-cream-200 dark:hover:bg-zinc-800 rounded-lg font-medium">About Us</a>
                <a @click="mobileMenuOpen = false" href="#contact" class="px-3 py-3 text-zinc-600 dark:text-zinc-300 hover:bg-cream-200 dark:hover:bg-zinc-800 rounded-lg font-medium">Contact</a>
                <hr class="my-2 border-cream-200 dark:border-zinc-700">
                @auth
                    <a href="{{ url('/dashboard') }}" class="px-3 py-3 bg-teal-600 text-white text-center rounded-lg font-medium">Dashboard</a>
                @else
                    <button @click="mobileMenuOpen = false; $dispatch('open-login-modal')" class="px-3 py-3 text-zinc-600 dark:text-zinc-300 hover:bg-cream-200 dark:hover:bg-zinc-800 rounded-lg font-medium text-left cursor-pointer">Log in</button>
                    @if (Route::has('register'))
                        <button @click="mobileMenuOpen = false; $dispatch('open-register-modal')" class="px-3 py-3 bg-teal-600 text-white text-center rounded-lg font-medium cursor-pointer">Register</button>
                    @endif
                @endauth
            </div>
        </div>
    </div>
</nav>
