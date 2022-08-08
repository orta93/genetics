@extends('layout')

@section('content')
    <div class="w-full bg-blue-200 py-8">
        <div class="container text-black font-bold text-5xl">{{ $category->name }}</div>
    </div>

    <div class="my-8 flex flex-col md:flex-row gap-4 container">
        <div class="w-full md:w-1/6 flex flex-col gap-2">
            <div class="text-gray-500 font-bold text-xs">Categorias</div>
            <div class="@if(is_null($current)) font-bold @endif"><a href="{{ route('catalogo.categoria', $category->slug) }}">Todas las pruebas</a></div>
            @foreach($subcategories as $subcategory)
                <div class="@if($current && $current->id == $subcategory->id)) font-bold @endif"><a href="{{ route('catalogo.categoria.sub', [$category->slug, $subcategory->slug]) }}">{{ $subcategory->name }}</a></div>
            @endforeach
        </div>

        <div class="w-full md:w-5/6 flex flex-col gap-4">
            @foreach($tests as $test)
                <div class="border bg-white rounded-xl p-6 flex flex-col gap-4">
                    <div class="flex flex-col">
                        <div class="flex flex-col md:flex-row gap-4 p-6">
                            <div class="bg-blue-100 p-2 rounded w-28 h-24">
                                <img src="/images/kit-box-image-panel-card.png" class="w-24 h-20"/>
                            </div>
                            <div class="w-full">
                                <div class="font-bold text-xl">{{ $test->name }}</div>
                                <div>Código de prueba: {{ $test->test_code }}</div>
                                <div class="short-description">{!! $test->description !!}</div>
                            </div>
                        </div>
                        <div class="p-6 flex justify-end">
                            <a href="{{ route('catalogo.test', $test->test_code) }}" class="px-4 py-2 border b-3 border-blue-200 rounded bg-white hover:bg-blue-100 font-bold">Ver detalles de la prueba</a>
                        </div>
                    </div>
                </div>
            @endforeach

            @if(!count($tests))
                <div class="text-center text-gray-400 mt-8">No hay pruebas que coincidan con la categoria</div>
            @endif
        </div>
    </div>
@endsection