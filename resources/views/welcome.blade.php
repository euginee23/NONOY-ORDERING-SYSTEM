<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nonoy Lutong Bahay - Home-Cooked Filipino Food | Pagadian City</title>
        <meta name="description" content="Order authentic home-cooked Filipino meals online from Nonoy Lutong Bahay. Serving Pagadian City since 2004. Fresh ingredients, traditional recipes, delivered to you.">

        <link rel="icon" href="{{ asset('images/nonoy-order-logo.jpg') }}" type="image/jpeg">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800,900" rel="stylesheet" />

        <!-- Styles & Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            [x-cloak] { display: none !important; }
        </style>
    </head>
    <body class="bg-cream-50 dark:bg-zinc-950 text-zinc-900 dark:text-white antialiased">
        {{-- Navigation --}}
        <x-public-navbar />

        {{-- Hero Section --}}
        <div class="pt-16">
            <x-hero-section />
        </div>

        {{-- Food Categories Section --}}
        <section id="menu" class="py-12 sm:py-16 lg:py-24 bg-white dark:bg-zinc-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                {{-- Section Header --}}
                <div class="text-center mb-12">
                    <span class="inline-block px-4 py-1 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-400 rounded-full text-sm font-medium mb-4">
                        Our Menu
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-zinc-900 dark:text-white">
                        Masarap na Pagkain para sa Lahat
                    </h2>
                    <p class="mt-4 text-zinc-600 dark:text-zinc-400 max-w-2xl mx-auto">
                        Browse our selection of authentic home-cooked Filipino dishes, prepared fresh daily with the finest ingredients.
                    </p>
                </div>

                {{-- Category Cards Grid --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <x-category-card
                        title="Ulam / Main Dishes"
                        description="Hearty main courses like Adobo, Sinigang, Bulalo, and more"
                        icon="🍲"
                        gradient="from-teal-500 to-teal-600"
                    />
                    <x-category-card
                        title="Silog Meals"
                        description="Classic Filipino breakfast combos with sinangag and itlog"
                        icon="🍳"
                        gradient="from-amber-500 to-orange-500"
                    />
                    <x-category-card
                        title="Pancit & Noodles"
                        description="Bihon, Canton, Palabok, and other noodle favorites"
                        icon="🍜"
                        gradient="from-rose-500 to-pink-500"
                    />
                    <x-category-card
                        title="Inihaw / Grilled"
                        description="Smoky grilled pork, chicken, and seafood specialties"
                        icon="🔥"
                        gradient="from-orange-500 to-red-500"
                    />
                </div>

                {{-- Featured Dish Banner --}}
                <div class="mt-8 sm:mt-12 relative overflow-hidden rounded-2xl sm:rounded-3xl bg-gradient-to-r from-teal-600 to-teal-700 p-6 sm:p-8 lg:p-12">
                    <div class="absolute inset-0 opacity-10">
                        <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                            <circle cx="90" cy="10" r="50" fill="white"/>
                            <circle cx="10" cy="90" r="40" fill="white"/>
                        </svg>
                    </div>
                    <div class="relative z-10 flex flex-col lg:flex-row items-center gap-8">
                        <div class="lg:flex-1 text-center lg:text-left">
                            <span class="inline-block px-3 py-1 bg-white/20 text-white rounded-full text-sm font-medium mb-4">
                                ⭐ House Specialty
                            </span>
                            <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-white mb-3">
                                Nonoy's Special Bulalo
                            </h3>
                            <p class="text-white/80 mb-6">
                                Our signature beef bone marrow soup, slow-cooked for hours to bring out the rich, savory flavors. Served with corn, cabbage, and pechay.
                            </p>
                            <a href="#" class="inline-flex items-center gap-2 px-6 py-3 bg-white text-teal-700 font-semibold rounded-xl hover:bg-cream-100 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                                Order Now
                            </a>
                        </div>
                        <div class="lg:flex-shrink-0">
                            <img src="{{ asset('images/nonoy-order-logo.jpg') }}" alt="Bulalo Special" class="w-48 h-48 lg:w-64 lg:h-64 object-contain rounded-2xl bg-white/10 p-4">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- How It Works Section --}}
        <section id="how-it-works" class="py-12 sm:py-16 lg:py-24 bg-cream-50 dark:bg-zinc-950">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                {{-- Section Header --}}
                <div class="text-center mb-16">
                    <span class="inline-block px-4 py-1 bg-amber-100 dark:bg-amber-900/30 text-amber-700 dark:text-amber-400 rounded-full text-sm font-medium mb-4">
                        Easy Ordering
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-zinc-900 dark:text-white">
                        How to Order
                    </h2>
                    <p class="mt-4 text-zinc-600 dark:text-zinc-400 max-w-2xl mx-auto">
                        Getting your favorite lutong bahay is quick and easy. Follow these simple steps.
                    </p>
                </div>

                {{-- Steps --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
                    {{-- Step 1 --}}
                    <div class="relative text-center">
                        <div class="w-16 h-16 mx-auto bg-gradient-to-br from-teal-500 to-teal-600 rounded-2xl flex items-center justify-center text-white text-2xl font-bold shadow-lg shadow-teal-500/30 mb-6">
                            1
                        </div>
                        <div class="w-20 h-20 mx-auto bg-white dark:bg-zinc-800 rounded-full flex items-center justify-center mb-4 shadow-lg">
                            <svg class="w-10 h-10 text-teal-600 dark:text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-zinc-900 dark:text-white mb-2">Browse Menu</h3>
                        <p class="text-zinc-600 dark:text-zinc-400">
                            Explore our delicious selection of home-cooked Filipino dishes
                        </p>
                        {{-- Connector Line --}}
                        <div class="hidden md:block absolute top-8 left-[60%] w-[80%] h-0.5 bg-gradient-to-r from-teal-500 to-amber-500"></div>
                    </div>

                    {{-- Step 2 --}}
                    <div class="relative text-center">
                        <div class="w-16 h-16 mx-auto bg-gradient-to-br from-amber-500 to-orange-500 rounded-2xl flex items-center justify-center text-white text-2xl font-bold shadow-lg shadow-amber-500/30 mb-6">
                            2
                        </div>
                        <div class="w-20 h-20 mx-auto bg-white dark:bg-zinc-800 rounded-full flex items-center justify-center mb-4 shadow-lg">
                            <svg class="w-10 h-10 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-zinc-900 dark:text-white mb-2">Place Order</h3>
                        <p class="text-zinc-600 dark:text-zinc-400">
                            Add items to cart and complete your order online
                        </p>
                        {{-- Connector Line --}}
                        <div class="hidden md:block absolute top-8 left-[60%] w-[80%] h-0.5 bg-gradient-to-r from-amber-500 to-rose-500"></div>
                    </div>

                    {{-- Step 3 --}}
                    <div class="relative text-center">
                        <div class="w-16 h-16 mx-auto bg-gradient-to-br from-rose-500 to-pink-500 rounded-2xl flex items-center justify-center text-white text-2xl font-bold shadow-lg shadow-rose-500/30 mb-6">
                            3
                        </div>
                        <div class="w-20 h-20 mx-auto bg-white dark:bg-zinc-800 rounded-full flex items-center justify-center mb-4 shadow-lg">
                            <svg class="w-10 h-10 text-rose-600 dark:text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-zinc-900 dark:text-white mb-2">Enjoy Your Meal</h3>
                        <p class="text-zinc-600 dark:text-zinc-400">
                            Pick up or get your order delivered fresh and hot
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Features Section --}}
        <section id="about" class="py-12 sm:py-16 lg:py-24 bg-white dark:bg-zinc-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                {{-- Section Header --}}
                <div class="text-center mb-12">
                    <span class="inline-block px-4 py-1 bg-rose-100 dark:bg-rose-900/30 text-rose-700 dark:text-rose-400 rounded-full text-sm font-medium mb-4">
                        Why Choose Us
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-zinc-900 dark:text-white">
                        Bakit Nonoy Lutong Bahay?
                    </h2>
                    <p class="mt-4 text-zinc-600 dark:text-zinc-400 max-w-2xl mx-auto">
                        For over 20 years, we've been serving Pagadian City with authentic home-cooked meals made with love.
                    </p>
                </div>

                {{-- Feature Cards --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                    <x-feature-card
                        title="Fresh Ingredients"
                        description="We source only the freshest ingredients from local markets every morning."
                        icon-bg="bg-green-100 dark:bg-green-900/30"
                        icon-color="text-green-600 dark:text-green-400"
                    >
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                        </svg>
                    </x-feature-card>

                    <x-feature-card
                        title="Home-Cooked Quality"
                        description="Traditional recipes passed down through generations, cooked with care."
                        icon-bg="bg-amber-100 dark:bg-amber-900/30"
                        icon-color="text-amber-600 dark:text-amber-400"
                    >
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </x-feature-card>

                    <x-feature-card
                        title="Affordable Prices"
                        description="Delicious meals that won't break the bank. Quality food for everyone."
                        icon-bg="bg-teal-100 dark:bg-teal-900/30"
                        icon-color="text-teal-600 dark:text-teal-400"
                    >
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </x-feature-card>

                    <x-feature-card
                        title="Fast & Reliable"
                        description="Quick service whether you're dining in, picking up, or ordering delivery."
                        icon-bg="bg-rose-100 dark:bg-rose-900/30"
                        icon-color="text-rose-600 dark:text-rose-400"
                    >
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </x-feature-card>
                </div>

                {{-- Stats --}}
                <div class="mt-10 sm:mt-16 grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                    <div class="text-center p-4 sm:p-6 bg-cream-50 dark:bg-zinc-800 rounded-2xl">
                        <p class="text-3xl sm:text-4xl font-black text-teal-600 dark:text-teal-400">21+</p>
                        <p class="text-xs sm:text-sm text-zinc-600 dark:text-zinc-400 mt-1">Years of Service</p>
                    </div>
                    <div class="text-center p-4 sm:p-6 bg-cream-50 dark:bg-zinc-800 rounded-2xl">
                        <p class="text-3xl sm:text-4xl font-black text-amber-600 dark:text-amber-400">50+</p>
                        <p class="text-xs sm:text-sm text-zinc-600 dark:text-zinc-400 mt-1">Menu Items</p>
                    </div>
                    <div class="text-center p-4 sm:p-6 bg-cream-50 dark:bg-zinc-800 rounded-2xl">
                        <p class="text-3xl sm:text-4xl font-black text-rose-600 dark:text-rose-400">1000+</p>
                        <p class="text-xs sm:text-sm text-zinc-600 dark:text-zinc-400 mt-1">Happy Customers</p>
                    </div>
                    <div class="text-center p-4 sm:p-6 bg-cream-50 dark:bg-zinc-800 rounded-2xl">
                        <p class="text-3xl sm:text-4xl font-black text-green-600 dark:text-green-400">100%</p>
                        <p class="text-xs sm:text-sm text-zinc-600 dark:text-zinc-400 mt-1">Fresh Daily</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- CTA Section --}}
        <section class="py-12 sm:py-16 lg:py-24 bg-gradient-to-br from-teal-600 via-teal-700 to-teal-800">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <span class="text-4xl sm:text-5xl mb-4 sm:mb-6 block">🍲</span>
                <h2 class="text-2xl sm:text-3xl lg:text-5xl font-bold text-white mb-4 sm:mb-6">
                    Ready to Taste the Difference?
                </h2>
                <p class="text-base sm:text-xl text-teal-100 mb-6 sm:mb-8 max-w-2xl mx-auto">
                    Order now and experience authentic home-cooked Filipino meals delivered fresh to your door.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 sm:px-8 sm:py-4 text-base sm:text-lg font-semibold text-teal-700 bg-white hover:bg-cream-100 rounded-xl shadow-lg transition-all hover:scale-105">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            Order Now
                        </a>
                    @else
                        <button @click="$dispatch('open-register-modal')" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 sm:px-8 sm:py-4 text-base sm:text-lg font-semibold text-teal-700 bg-white hover:bg-cream-100 rounded-xl shadow-lg transition-all hover:scale-105 cursor-pointer">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            Start Ordering
                        </button>
                        <button @click="$dispatch('open-login-modal')" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 sm:px-8 sm:py-4 text-base sm:text-lg font-semibold text-white border-2 border-white/30 hover:bg-white/10 rounded-xl transition-all cursor-pointer">
                            Already have an account? Log in
                        </button>
                    @endauth
                </div>
            </div>
        </section>

        {{-- Footer --}}
        <x-public-footer />

        {{-- Auth Modals (guest only) --}}
        @guest
            <x-auth-login-modal />
            <x-auth-register-modal />
        @endguest

        {{-- Back to Top Button --}}
        <button
            x-data="{ show: false }"
            x-init="window.addEventListener('scroll', () => { show = window.scrollY > 500 })"
            x-show="show"
            x-cloak
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 translate-y-4"
            @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
            class="fixed bottom-6 right-6 sm:bottom-8 sm:right-8 z-50 w-12 h-12 sm:w-14 sm:h-14 flex items-center justify-center bg-teal-600 hover:bg-teal-700 text-white rounded-full shadow-2xl hover:shadow-teal-600/50 transition-all hover:scale-110"
            aria-label="Scroll to top"
        >
            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
            </svg>
        </button>
    </body>
</html>
