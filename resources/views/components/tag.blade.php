@props(['tag', 'size' => 'base'])

@php

$classes = "bg-white/10 rounded-xl hover:bg-white/25 font-bold transition-colors duration-300";

if ($size === 'base') {
    $classes .= " px-4 py-2 text-sm";
}

if ($size === 'small') {
    $classes .= " px-3 py-1 text-2xs";
}

@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class=" {{ $classes }}">{{ $tag->name }}</a>
