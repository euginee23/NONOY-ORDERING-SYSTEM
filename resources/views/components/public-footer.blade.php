<footer id="contact" class="bg-zinc-900 dark:bg-zinc-950 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-12 lg:py-16">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
            <!-- Brand -->
            <div class="lg:col-span-1">
                <div class="flex items-center gap-3 mb-4">
                    <img src="{{ asset('images/nonoy-order-logo.jpg') }}" alt="Nonoy Lutong Bahay" class="h-16 w-auto rounded-lg bg-cream-100 p-1">
                </div>
                <p class="text-zinc-400 text-sm leading-relaxed mb-4">
                    Serving authentic home-cooked Filipino meals since 2004. Fresh ingredients, traditional recipes, and the warmth of lutong bahay.
                </p>
                <p class="text-teal-400 font-medium text-sm">
                    🍲 We Accept Catering Services
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="font-semibold text-white mb-4">Quick Links</h4>
                <ul class="space-y-3">
                    <li><a href="#menu" class="text-zinc-400 hover:text-teal-400 transition-colors text-sm">Our Menu</a></li>
                    <li><a href="#how-it-works" class="text-zinc-400 hover:text-teal-400 transition-colors text-sm">How to Order</a></li>
                    <li><a href="#about" class="text-zinc-400 hover:text-teal-400 transition-colors text-sm">About Us</a></li>
                    <li>
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-zinc-400 hover:text-teal-400 transition-colors text-sm">Dashboard</a>
                        @else
                            <button @click="$dispatch('open-login-modal')" class="text-zinc-400 hover:text-teal-400 transition-colors text-sm cursor-pointer">Login / Register</button>
                        @endauth
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="font-semibold text-white mb-4">Contact Us</h4>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start gap-2 text-zinc-400">
                        <svg class="w-5 h-5 text-teal-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>Barangay Direct, Pagadian City</span>
                    </li>
                    <li class="flex items-center gap-2 text-zinc-400">
                        <svg class="w-5 h-5 text-teal-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span>Contact via Facebook</span>
                    </li>
                    <li class="flex items-center gap-2 text-zinc-400">
                        <svg class="w-5 h-5 text-teal-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span>Message us to order</span>
                    </li>
                </ul>
            </div>

            <!-- Operating Hours -->
            <div>
                <h4 class="font-semibold text-white mb-4">Operating Hours</h4>
                <ul class="space-y-2 text-sm">
                    <li class="flex justify-between text-zinc-400">
                        <span>Monday - Saturday</span>
                        <span class="text-teal-400">6:00 AM - 8:00 PM</span>
                    </li>
                    <li class="flex justify-between text-zinc-400">
                        <span>Sunday</span>
                        <span class="text-teal-400">7:00 AM - 6:00 PM</span>
                    </li>
                </ul>
                <div class="mt-4 p-3 bg-teal-600/10 border border-teal-600/20 rounded-lg">
                    <p class="text-teal-400 text-xs font-medium">
                        ✨ Pre-orders accepted for pickup & events
                    </p>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="mt-12 pt-8 border-t border-zinc-800 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-zinc-500 text-sm">
                CodeHub.Site © {{ date('Y') }} Nonoy Lutong Bahay. All rights reserved.
            </p>
            <p class="text-zinc-500 text-sm">
                Nonoy Lutong Bahay Ordering System v1.0.0
            </p>
        </div>
    </div>
</footer>
