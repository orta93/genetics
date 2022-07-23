<div class="flex flex-col md:flex-row gap-6 mt-12">
    @foreach($cards as $card)
        <a href="{{ $card['link'] }}" class="flex flex-col sm:flex-row md:flex-col gap-2 w-full border cursor-pointer bg-white rounded-md shadow-lg hover:shadow-2xl p-5">
            <div class="w-full sm:w-1/3 md:w-full text-center py-0 md:py-6">
                <img src="/icons/{{ $card['icon'] }}" class="mx-auto">
            </div>
            <div class="w-full sm:w-2/3 md:w-full text-center sm:text-left md:text-center">
                <p class="font-bold text-lg mb-2">{{ $card['title'] }}</p>
                <p class="font-light">{{ $card['description'] }}</p>
                @if(isset($link) && $link)
                    <p class="mt-8 text-blue-700 hover:text-blue-800">Aprender mas</p>
                @endif
            </div>
        </a>
    @endforeach
</div>