<div class="flex flex-col md:flex-row gap-6 mt-12">
    @foreach($cards as $card)
        <a href="{{ isset($card['link']) ? $card['link'] : '#' }}" class="flex flex-col sm:flex-row md:flex-col gap-2 w-full border cursor-pointer bg-white rounded-md shadow-lg hover:shadow-2xl">
            <div class="w-full sm:w-1/3 md:w-full text-center {{ isset($card['bgColor']) ? $card['bgColor'] : '' }} py-5 md:py-12">
                <img src="/icons/{{ $card['icon'] }}" class="mx-auto w-24 h-24">
            </div>
            <div class="w-full sm:w-2/3 md:w-full text-center sm:text-left md:text-center px-5 pb-5">
                <p class="font-bold text-lg mb-2">{{ $card['title'] }}</p>
                <p class="font-light">{{ $card['description'] }}</p>
                @if(isset($link) && $link)
                    <p class="mt-8 text-blue-700 hover:text-blue-800">Aprender mas</p>
                @endif
            </div>
        </a>
    @endforeach
</div>