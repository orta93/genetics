@php
    $items = isset($items) ? $items : [];
    $title_size = isset($title_size) ? $title_size : 'text-2xl';
    $list_items = isset($list_items) ? $list_items : [];
    $colPosition = isset($reverse) && $reverse ? 'md:flex-row-reverse' : 'md:flex-row';
@endphp
<div class="container py-12 flex flex-col-reverse {{ $colPosition }} gap-4 md:gap-8 items-center">
    <div class="w-full flex flex-col gap-2 text-center md:text-left">
        <div class="font-bold {{ $title_size }}">{{ $title }}</div>
        @if(count($items) || count($list_items))
        <div class="flex flex-col gap-2">
            @foreach($items as $item)
                <p>{{ $item }}</p>
            @endforeach
            @if(count($list_items))
                <ul class="list-disc">
                    @foreach($list_items as $list_item)
                        <li>{{ $list_item }}</li>
                    @endforeach
                </ul>
            @endif
            @if(isset($button) && isset($buttonLabel))
                <p>
                    <a href="{{ $button }}" class="btn">{{ $buttonLabel }}</a>
                </p>
            @endif
        </div>
        @endif
    </div>
    <div class="w-full">
        <img src="{{ $image }}" class="w-3/4 md:1/2 mx-auto"/>
    </div>
</div>
