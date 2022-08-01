@php
    $size = isset($size) ? $size : 5;
    $bg = isset($bg) ? $bg : '';
    $self = isset($self) ? $self : '';
    $color = isset($color) ? $color : 'text-black-primary';
    $bgPosition = isset($bgPosition) ? $bgPosition : 'bg-right';
    $colPosition = isset($reverse) && $reverse ? 'flex-col-reverse' : 'flex-col';
    $bgHeight = isset($resize) && $resize ? 'min-h-96 md:bg-contain' : (isset($image) ? 'h-60 md:h-96' : 'md:h-96');
@endphp
<div class="w-full flex {{ $colPosition }}">
    <div class="w-full bg-no-repeat bg-cover {{ $bgPosition }} {{ $bg }} {{ $color }} {{ $bgHeight }}" @if(isset($image)) style="background-image: url({{ $image }})" @endif>
        <div class="container hidden md:flex h-full justify-center flex-col gap-8 py-8">
            <div class="w-1/2 font-bold text-{{ $size }}xl {{ $self }}">{{ $title }}</div>
            @if(isset($title_alt))
                <div class="w-1/2 font-bold text-{{ $size - 2 }}xl {{ $self }}">{{ $title_alt }}</div>
            @endif
            @if(isset($subtitle))
                <div class="w-1/2 {{ $self }}">{{ $subtitle }}</div>
            @endif
            @if(isset($link) && isset($linkLabel))
                <div class="w-1/2 {{ $self }}">
                    <a href="{{ $link }}" class="btn">{{ $linkLabel }}</a>
                </div>
            @endif
        </div>
    </div>

    <div class="flex md:hidden {{ $bg }}">
        <div class="container justify-center py-8 flex flex-col gap-8 {{ isset($color) ? $color : 'text-black-primary' }}">
            <div class="font-bold text-{{ $size - 1 }}xl">{{ $title }}</div>
            @if(isset($title_alt))
                <div class="w-1/2 font-bold text-{{ $size - 2 }}xl {{ $self }}">{{ $title_alt }}</div>
            @endif
            @if(isset($subtitle))
                <div>{{ $subtitle }}</div>
            @endif
            @if(isset($link) && isset($linkLabel))
                <div>
                    <a href="{{ $link }}" class="btn">{{ $linkLabel }}</a>
                </div>
            @endif
        </div>
    </div>
</div>
