<div class="flex flex-col md:flex-row gap-6 mt-12">
    @foreach($steps as $step)
        <div class="flex flex-col sm:flex-row md:flex-col gap-2 w-full p-5">
            <div class="w-full sm:w-1/3 md:w-full text-center py-0 h-34 md:py-6">
                <img src="/icons/{{ $step['icon'] }}" class="h-24 mx-auto">
            </div>
            <div class="w-full sm:w-2/3 md:w-full text-center sm:text-left md:text-center">
                <p class="font-bold text-lg mb-2">{{ $step['title'] }}</p>
                @if(isset($step['subtitle']))
                    <p class="font-bold">{{ $step['subtitle'] }}</p>
                @endif

                @if(isset($step['list']))
                    <ul class="list-disc">
                        @foreach($step['list'] as $list_item)
                            <li>{{ $list_item }}</li>
                        @endforeach
                    </ul>
                @endif

                @if(isset($step['description']))
                    <p class="font-light">{{ $step['description'] }}</p>
                @endif
            </div>
        </div>
    @endforeach
</div>