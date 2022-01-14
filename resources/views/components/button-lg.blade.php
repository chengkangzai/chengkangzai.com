@props([
    'href' => '#',
    'bg' => 'bg-blue-600',
    'hoverBg' => 'hover:bg-blue-500',
])

<a href="{{$href}}" {{ $attributes->merge(['type' => 'submit', 'class' => 'text-white font-bold py-2 px-4 rounded-md inline-block text-center '.$bg.' '.$hoverBg]) }}>
    {{ $slot }}
</a>
