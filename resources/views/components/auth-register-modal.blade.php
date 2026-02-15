<div
    x-data="{ open: false }"
    x-on:open-register-modal.window="open = true"
    x-on:open-login-modal.window="open = false"
    x-on:keydown.escape.window="open = false"
    x-cloak
>
    {{-- Backdrop --}}
    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-[60] bg-zinc-900/60 backdrop-blur-sm"
        @click="open = false"
    ></div>

    {{-- Modal --}}
    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:scale-95"
        class="fixed inset-0 z-[70] overflow-y-auto"
    >
        <div class="flex min-h-full items-end sm:items-center justify-center p-4">
            <div @click.stop class="relative w-full max-w-md bg-white dark:bg-zinc-900 rounded-2xl shadow-2xl ring-1 ring-zinc-200 dark:ring-zinc-700 overflow-hidden">
                {{-- Close Button --}}
                <button @click="open = false" class="absolute top-4 right-4 p-1.5 text-zinc-400 hover:text-zinc-600 dark:hover:text-zinc-300 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors z-10">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

                <div class="p-6 sm:p-8">
                    {{-- Header --}}
                    <div class="text-center mb-6">
                        <img src="{{ asset('images/nonoy-order-logo.jpg') }}" alt="Nonoy Lutong Bahay" class="w-16 h-16 mx-auto mb-3 rounded-xl">
                        <h2 class="text-xl sm:text-2xl font-bold text-zinc-900 dark:text-white">Create an Account</h2>
                        <p class="text-sm text-zinc-500 dark:text-zinc-400 mt-1">Join Nonoy Lutong Bahay and start ordering</p>
                    </div>

                    {{-- Validation Errors --}}
                    @if ($errors->any())
                        <div class="mb-4 p-3 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg">
                            <ul class="text-sm text-red-600 dark:text-red-400 space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Register Form --}}
                    <form method="POST" action="{{ route('register.store') }}" class="space-y-4">
                        @csrf

                        {{-- Name --}}
                        <div>
                            <label for="register-name" class="block text-sm font-medium text-zinc-700 dark:text-zinc-300 mb-1.5">Full name</label>
                            <input
                                id="register-name"
                                name="name"
                                type="text"
                                value="{{ old('name') }}"
                                required
                                autofocus
                                autocomplete="name"
                                placeholder="Juan Dela Cruz"
                                class="w-full px-3.5 py-2.5 bg-white dark:bg-zinc-800 border border-zinc-300 dark:border-zinc-600 rounded-lg text-zinc-900 dark:text-white placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-shadow text-sm"
                            >
                        </div>

                        {{-- Email --}}
                        <div>
                            <label for="register-email" class="block text-sm font-medium text-zinc-700 dark:text-zinc-300 mb-1.5">Email address</label>
                            <input
                                id="register-email"
                                name="email"
                                type="email"
                                value="{{ old('email') }}"
                                required
                                autocomplete="email"
                                placeholder="email@example.com"
                                class="w-full px-3.5 py-2.5 bg-white dark:bg-zinc-800 border border-zinc-300 dark:border-zinc-600 rounded-lg text-zinc-900 dark:text-white placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-shadow text-sm"
                            >
                        </div>

                        {{-- Password --}}
                        <div>
                            <label for="register-password" class="block text-sm font-medium text-zinc-700 dark:text-zinc-300 mb-1.5">Password</label>
                            <input
                                id="register-password"
                                name="password"
                                type="password"
                                required
                                autocomplete="new-password"
                                placeholder="Password"
                                class="w-full px-3.5 py-2.5 bg-white dark:bg-zinc-800 border border-zinc-300 dark:border-zinc-600 rounded-lg text-zinc-900 dark:text-white placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-shadow text-sm"
                            >
                        </div>

                        {{-- Confirm Password --}}
                        <div>
                            <label for="register-password-confirm" class="block text-sm font-medium text-zinc-700 dark:text-zinc-300 mb-1.5">Confirm password</label>
                            <input
                                id="register-password-confirm"
                                name="password_confirmation"
                                type="password"
                                required
                                autocomplete="new-password"
                                placeholder="Confirm password"
                                class="w-full px-3.5 py-2.5 bg-white dark:bg-zinc-800 border border-zinc-300 dark:border-zinc-600 rounded-lg text-zinc-900 dark:text-white placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-shadow text-sm"
                            >
                        </div>

                        {{-- Submit --}}
                        <button type="submit" class="w-full py-3 bg-teal-600 hover:bg-teal-700 text-white font-semibold rounded-lg shadow-sm transition-colors text-sm cursor-pointer">
                            Create account
                        </button>
                    </form>

                    {{-- Switch to Login --}}
                    <p class="mt-6 text-center text-sm text-zinc-500 dark:text-zinc-400">
                        Already have an account?
                        <button @click="open = false; $dispatch('open-login-modal')" class="text-teal-600 dark:text-teal-400 hover:underline font-medium cursor-pointer">
                            Log in
                        </button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
