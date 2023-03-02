@props([
    'label' => '',
    'href' => null,
    'disabled' => false,
    'target' => '_self',
    'class' => '',
    'type' => 'button',
    'status' => 'secondary',
    'variants' => [
        'primary' => 'bg-blue-400 hover:bg-blue-500',
        'secondary' => 'bg-gray-600 hover:bg-gray-800',
        'danger' => 'bg-red-500 hover:bg-red-600',
        'warning' => 'bg-yellow-400 hover:bg-yellow-50',
        'info' => 'bg-blue-400 hover:bg-blue-500',
    ],
])

@php
    $baseClasses = 'inline-flex items-center gap-3 justify-center text-white text-center px-4 py-2 rounded-md min-w-[120px] transition-all hover:opacity-75';
    $classList = "{$class} {$variants[$status]} {$baseClasses}";
@endphp

@isset($href)
    <a
        href="{{ $href }}"
        target="{{ $target }}"
        {{ $attributes->merge(['class' => $classList ]) }}"
    >
        {{ $slot }}
    </a>
@else
    <button
        type="{{ $type }}"
        @if ($disabled) disabled @endif
        {{ $attributes->merge(['class' => $classList ]) }}"
    >
        {{ $slot }}
    </button>
@endisset
