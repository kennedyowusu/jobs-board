@props([ 'employer','width' => 90, 'height' => 90])

<img src="{{ asset($employer->logo) }}" alt="" class="rounded-xl" width="{{ $width }}" height="{{ $height }}">
