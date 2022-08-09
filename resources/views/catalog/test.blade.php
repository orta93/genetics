@extends('layout')

@section('content')
    <div class="container my-12 flex flex-col md:flex-row gap-4">
        <div class="w-full md:w-4/6 flex flex-col gap-4">
            <div class="flex flex-col md:flex-row gap-4">
                <div class="bg-blue-100 p-2 rounded w-40">
                    <img src="/images/kit-box-image-panel-card.png" class=""/>
                </div>
                <div class="w-full">
                    <div class="font-bold text-xl">{{ $test->name }}</div>
                    <div>Código de prueba: {{ $test->test_code }}</div>
                </div>
            </div>
            <div class="flex flex-col gap-2">
                <div class="font-bold">Descripción de la prueba</div>
                <div class="">{!! $test->description !!}</div>
                @if(count($test->disorders))
                    <div>
                        <button id="myBtn" class="px-4 py-2 border b-3 border-blue-200 rounded bg-white hover:bg-blue-100 font-bold">Ver todos los trastornos probados</button>

                        <div id="myModal" class="modal">
                            <div class="modal-content py-8 px-12">
                                <span class="close">&times;</span>
                                <div>
                                    <div class="font-bold text-2xl pb-4">Trastornos probados</div>
                                    <div class="h-80 overflow-y-auto">
                                        <ul class="list-disc">
                                        @foreach($test->disorders as $disorder)
                                            <li>{{ $disorder }}</li>
                                        @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="flex flex-col gap-2 border-t">
                <div class="font-bold text-xl my-4">Información de la Prueba</div>
                <div><span class="font-bold">Tiempo de respuesta:</span> {{ $test->turnaround }}</div>
                <div><span class="font-bold">Muestra preferida:</span> {{ $test->preferred_specimen }}</div>
                <div><span class="font-bold">Especímenes alternativos:</span> {{ $test->alternate_specimens }}</div>
            </div>
        </div>

        @if(count($genes) && count($genes[0]['items']))
            <div class="w-full h-fit md:w-2/6 flex flex-col gap-4 p-4 bg-gray-200 border">
                @foreach($genes as $gene)
                <div class="flex flex-col border border-blue-200 bg-white">
                    <div class="font-bold my-2 p-2 border-b">{{ $gene['name'] }}</div>
                    <gen-container :genes="{{ $gene['items'] }}"></gen-container>
                </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection