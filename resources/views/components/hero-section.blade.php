<section class="relative overflow-hidden bg-gradient-to-br from-cream-100 via-cream-50 to-white dark:from-zinc-900 dark:via-zinc-900 dark:to-zinc-950">
    {{-- Decorative Background Elements --}}
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-teal-400/20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-amber-400/20 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-teal-500/10 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 lg:py-24">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            {{-- Left Content --}}
            <div class="text-center lg:text-left">
                {{-- Badge --}}
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-400 rounded-full text-sm font-medium mb-6">
                    <span class="text-lg">🍲</span>
                    <span>Lutong Bahay • Since 2004</span>
                </div>

                {{-- Headline --}}
                <h1 class="text-3xl sm:text-4xl lg:text-6xl font-black text-zinc-900 dark:text-white leading-tight">
                    Masarap na
                    <span class="relative">
                        <span class="relative z-10 text-teal-600 dark:text-teal-400">Lutong Bahay</span>
                        <span class="absolute bottom-2 left-0 w-full h-3 bg-amber-400/40 -z-0"></span>
                    </span>
                    , Delivered Fresh
                </h1>

                {{-- Subheadline --}}
                <p class="mt-4 sm:mt-6 text-base sm:text-lg text-zinc-600 dark:text-zinc-400 max-w-xl mx-auto lg:mx-0">
                    Experience authentic home-cooked Filipino meals made with love and the freshest ingredients.
                    Order online and enjoy the taste of home, anytime.
                </p>

                {{-- CTA Buttons --}}
                <div class="mt-8 flex flex-col sm:flex-row items-center gap-4 justify-center lg:justify-start">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 text-base sm:px-8 sm:py-4 sm:text-lg font-semibold text-white bg-teal-600 hover:bg-teal-700 rounded-xl shadow-lg shadow-teal-600/30 transition-all hover:scale-105">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            Order Now
                        </a>
                    @else
                        <button @click="$dispatch('open-register-modal')" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 text-base sm:px-8 sm:py-4 sm:text-lg font-semibold text-white bg-teal-600 hover:bg-teal-700 rounded-xl shadow-lg shadow-teal-600/30 transition-all hover:scale-105">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            Order Now
                        </button>
                    @endauth
                    <a href="#menu" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 text-base sm:px-8 sm:py-4 sm:text-lg font-semibold text-zinc-700 dark:text-zinc-300 bg-white dark:bg-zinc-800 hover:bg-zinc-50 dark:hover:bg-zinc-700 border-2 border-zinc-200 dark:border-zinc-700 rounded-xl transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                        View Menu
                    </a>
                </div>

                {{-- Trust Badges --}}
                <div class="mt-10 flex flex-wrap items-center gap-6 justify-center lg:justify-start text-sm text-zinc-500 dark:text-zinc-400">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-teal-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Fresh Ingredients</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-teal-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Home-cooked Quality</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-teal-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Fast Service</span>
                    </div>
                </div>
            </div>

            {{-- Right Visual --}}
            <div class="relative">
                {{-- Main Image Card --}}
                <div class="relative z-10 bg-white dark:bg-zinc-800 rounded-3xl shadow-2xl p-4 transform lg:rotate-2 hover:rotate-0 transition-transform duration-300">
                    <img src="{{ asset('images/nonoy-ordering-cover.jpg') }}" alt="Nonoy Lutong Bahay" class="w-full rounded-2xl">
                    <div class="absolute -bottom-4 -right-4 z-30 bg-amber-400 text-zinc-900 px-3 py-1.5 sm:px-4 sm:py-2 rounded-xl text-xs sm:text-sm font-bold shadow-lg">
                        21 Years of Service!
                    </div>
                </div>

                {{-- Floating Cards --}}
                <div class="hidden sm:block absolute -top-6 -left-6 z-20 bg-white dark:bg-zinc-800 rounded-xl shadow-xl p-4 animate-bounce" style="animation-duration: 3s;">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs text-zinc-500 dark:text-zinc-400">New Order</p>
                            <p class="text-sm font-semibold text-zinc-900 dark:text-white">Bulalo Special</p>
                        </div>
                    </div>
                </div>

                <div class="hidden sm:block absolute -bottom-6 -left-6 z-20 bg-white dark:bg-zinc-800 rounded-xl shadow-xl p-4 animate-bounce" style="animation-duration: 4s; animation-delay: 1s;">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-teal-100 dark:bg-teal-900/30 rounded-full flex items-center justify-center">
                            <span class="text-lg">⭐</span>
                        </div>
                        <div>
                            <p class="text-xs text-zinc-500 dark:text-zinc-400">Customer Review</p>
                            <p class="text-sm font-semibold text-zinc-900 dark:text-white">"Sobrang sarap!"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
