@props([
    'href' => '#',
    'bg' => 'bg-blue-600',
    'hoverBg' => 'hover:bg-blue-500',
])

<a href="{{ $href }}"
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-block py-1 px-3 text-center rounded-md text-white text-sm ' . $bg . ' ' . $hoverBg]) }}>
    {{ $slot }}
</a>
