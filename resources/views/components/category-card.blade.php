@props([
    'title',
    'description',
    'icon' => '🍽️',
    'gradient' => 'from-teal-500 to-teal-600',
])

<div {{ $attributes->merge(['class' => 'group relative overflow-hidden rounded-2xl bg-gradient-to-br ' . $gradient . ' p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 cursor-pointer']) }}>
    {{-- Background Pattern --}}
    <div class="absolute inset-0 opacity-10">
        <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <circle cx="80" cy="20" r="40" fill="white"/>
            <circle cx="20" cy="80" r="30" fill="white"/>
        </svg>
    </div>

    <div class="relative z-10">
        <span class="text-4xl mb-4 block">{{ $icon }}</span>
        <h3 class="text-xl font-bold mb-2">{{ $title }}</h3>
        <p class="text-white/80 text-sm">{{ $description }}</p>

        <div class="mt-4 flex items-center gap-2 text-sm font-medium group-hover:gap-3 transition-all">
            <span>View Dishes</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
        </div>
    </div>
</div>
