@props(['message' => '', 'status' => 'success'])

@if ($message)
    @php
        $statusClasses = [
            'success' => 'bg-green-100 border-green-500',
            'error' => 'bg-red-100 border-red-500',
            'warning' => 'bg-yellow-100 border-yellow-500',
            'info' => 'bg-blue-100 border-blue-500',
            'default' => 'bg-gray-100 border-gray-500',
        ];
    @endphp

    <div {{ $attributes->merge(['class' => 'border-l-4 border p-4 rounded ' . $statusClasses[$status]]) }}>
        {{ $message }}
    </div>
@endif
