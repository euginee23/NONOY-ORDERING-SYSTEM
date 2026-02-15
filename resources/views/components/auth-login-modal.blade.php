<div
    x-data="{ open: false }"
    x-on:open-login-modal.window="open = true"
    x-on:open-register-modal.window="open = false"
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
                        <h2 class="text-xl sm:text-2xl font-bold text-zinc-900 dark:text-white">Welcome Back!</h2>
                        <p class="text-sm text-zinc-500 dark:text-zinc-400 mt-1">Log in to your Nonoy Lutong Bahay account</p>
                    </div>

                    {{-- Session Status --}}
                    @if (session('status'))
                        <div class="mb-4 p-3 bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-lg text-sm text-green-700 dark:text-green-400 text-center">
                            {{ session('status') }}
                        </div>
                    @endif

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

                    {{-- Login Form --}}
                    <form method="POST" action="{{ route('login.store') }}" class="space-y-4">
                        @csrf

                        {{-- Email --}}
                        <div>
                            <label for="login-email" class="block text-sm font-medium text-zinc-700 dark:text-zinc-300 mb-1.5">Email address</label>
                            <input
                                id="login-email"
                                name="email"
                                type="email"
                                value="{{ old('email') }}"
                                required
                                autofocus
                                autocomplete="email"
                                placeholder="email@example.com"
                                class="w-full px-3.5 py-2.5 bg-white dark:bg-zinc-800 border border-zinc-300 dark:border-zinc-600 rounded-lg text-zinc-900 dark:text-white placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-shadow text-sm"
                            >
                        </div>

                        {{-- Password --}}
                        <div>
                            <div class="flex items-center justify-between mb-1.5">
                                <label for="login-password" class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">Password</label>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-xs text-teal-600 dark:text-teal-400 hover:underline">Forgot password?</a>
                                @endif
                            </div>
                            <input
                                id="login-password"
                                name="password"
                                type="password"
                                required
                                autocomplete="current-password"
                                placeholder="Password"
                                class="w-full px-3.5 py-2.5 bg-white dark:bg-zinc-800 border border-zinc-300 dark:border-zinc-600 rounded-lg text-zinc-900 dark:text-white placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-shadow text-sm"
                            >
                        </div>

                        {{-- Remember Me --}}
                        <div class="flex items-center gap-2">
                            <input
                                id="login-remember"
                                name="remember"
                                type="checkbox"
                                {{ old('remember') ? 'checked' : '' }}
                                class="w-4 h-4 rounded border-zinc-300 dark:border-zinc-600 text-teal-600 focus:ring-teal-500 bg-white dark:bg-zinc-800"
                            >
                            <label for="login-remember" class="text-sm text-zinc-600 dark:text-zinc-400">Remember me</label>
                        </div>

                        {{-- Submit --}}
                        <button type="submit" class="w-full py-3 bg-teal-600 hover:bg-teal-700 text-white font-semibold rounded-lg shadow-sm transition-colors text-sm cursor-pointer">
                            Log in
                        </button>
                    </form>

                    {{-- Switch to Register --}}
                    @if (Route::has('register'))
                        <p class="mt-6 text-center text-sm text-zinc-500 dark:text-zinc-400">
                            Don't have an account?
                            <button @click="open = false; $dispatch('open-register-modal')" class="text-teal-600 dark:text-teal-400 hover:underline font-medium cursor-pointer">
                                Sign up
                            </button>
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
