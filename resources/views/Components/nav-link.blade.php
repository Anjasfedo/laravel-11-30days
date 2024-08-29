@props(['active' => false, 'type' => 'a'])

@php
    $lorem = $active ? 'lorem' : 'ipsum';
@endphp

@switch($type)
    @case('a')
        <a
            {{ $attributes->merge(['class' => ($active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white') . ' rounded-md px-3 py-2 text-sm font-medium', 'aria-current' => $active ? 'page' : 'false']) }}>{{ $slot }}
            {{ $lorem }} {{ $type }}</a>
    @break

    @case('button')
        <button
            {{ $attributes->merge(['class' => ($active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white') . ' rounded-md px-3 py-2 text-sm font-medium', 'aria-current' => $active ? 'page' : 'false']) }}>{{ $slot }}
            {{ $lorem }} {{ $type }}</button>
    @break

    @default
@endswitch
