@props([
    'sidebar' => false,
])

@if($sidebar)
    <flux:sidebar.brand name="Nonoy Lutong Bahay" {{ $attributes }}>
        <x-slot name="logo" class="flex aspect-square size-8 items-center justify-center rounded-md overflow-hidden">
            <img src="{{ asset('images/nonoy-order-logo.jpg') }}" alt="Nonoy Lutong Bahay" class="size-8 object-cover">
        </x-slot>
    </flux:sidebar.brand>
@else
    <flux:brand name="Nonoy Lutong Bahay" {{ $attributes }}>
        <x-slot name="logo" class="flex aspect-square size-8 items-center justify-center rounded-md overflow-hidden">
            <img src="{{ asset('images/nonoy-order-logo.jpg') }}" alt="Nonoy Lutong Bahay" class="size-8 object-cover">
        </x-slot>
    </flux:brand>
@endif
