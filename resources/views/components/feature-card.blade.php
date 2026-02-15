@props([
    'title',
    'description',
    'iconBg' => 'bg-teal-100 dark:bg-teal-900/30',
    'iconColor' => 'text-teal-600 dark:text-teal-400',
])

<div {{ $attributes->merge(['class' => 'group bg-white dark:bg-zinc-800 rounded-2xl p-6 shadow-sm hover:shadow-lg border border-zinc-100 dark:border-zinc-700 transition-all duration-300 hover:-translate-y-1']) }}>
    <div class="w-14 h-14 {{ $iconBg }} rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
        <div class="{{ $iconColor }}">
            {{ $slot }}
        </div>
    </div>
    <h3 class="text-lg font-bold text-zinc-900 dark:text-white mb-2">{{ $title }}</h3>
    <p class="text-zinc-600 dark:text-zinc-400 text-sm">{{ $description }}</p>
</div>
