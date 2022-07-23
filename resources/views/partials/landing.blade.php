<div class="w-full flex @if(isset($reverse) && $reverse) flex-col-reverse @else flex-col @endif">
    <div class="w-full {{ isset($bgPosition) ? $bgPosition : 'bg-right' }} {{ isset($bg) ? $bg : '' }} {{ isset($color) ? $color : 'text-black-primary' }} bg-no-repeat bg-cover @if(isset($resize) && $resize) min-h-96 md:bg-contain @else h-60 md:h-96 @endif" style="background-image: url({{ $image }})">
        <div class="container hidden md:flex h-full justify-center flex-col gap-8 py-8">
            <div class="w-1/2 font-bold text-5xl">{{ $title }}</div>
            @if(isset($subtitle))
                <div class="w-1/2">{{ $subtitle }}</div>
            @endif
            @if(isset($link) && isset($linkLabel))
                <div>
                    <a href="{{ $link }}" class="btn">{{ $linkLabel }}</a>
                </div>
            @endif
        </div>
    </div>

    <div class="flex md:hidden {{ isset($bg) ? $bg : '' }}">
        <div class="container justify-center py-8 flex flex-col gap-8 {{ isset($color) ? $color : 'text-black-primary' }}">
            <div class="font-bold text-4xl">{{ $title }}</div>
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
