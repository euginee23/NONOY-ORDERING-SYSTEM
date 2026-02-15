@props([
    'step',
    'title',
    'description',
])

<div {{ $attributes->merge(['class' => 'relative text-center']) }}>
    {{-- Step Number --}}
    <div class="w-16 h-16 mx-auto bg-gradient-to-br from-teal-500 to-teal-600 rounded-2xl flex items-center justify-center text-white text-2xl font-bold shadow-lg shadow-teal-500/30 mb-4">
        {{ $step }}
    </div>

    {{-- Icon --}}
    <div class="w-20 h-20 mx-auto bg-cream-100 dark:bg-zinc-800 rounded-full flex items-center justify-center mb-4">
        {{ $slot }}
    </div>

    {{-- Content --}}
    <h3 class="text-lg font-bold text-zinc-900 dark:text-white mb-2">{{ $title }}</h3>
    <p class="text-zinc-600 dark:text-zinc-400 text-sm max-w-xs mx-auto">{{ $description }}</p>
</div>
