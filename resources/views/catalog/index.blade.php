@extends('layout')

@section('content')
    @include('partials.landing', [
        'title' => 'Explora nuestro catálogo de pruebas',
        'color' => 'text-black',
        'resize' => true
    ])

    @php
    $sections = [
        [
            'title' => 'Oncología',
            'description' => 'Obtenga información genética que pueda informar las oportunidades de tratamiento y ensayos clínicos para sus pacientes. Solicite uno de nuestros paneles pre-curados o elija una selección personalizada de genes para una prueba personalizada.',
            'image' => '/images/Oncologia.jpg',
            'color' => '#fdfdfd',
            'bg' => 'bg-cover bg-right'
        ],
        [
            'title' => 'Salud reproductiva',
            'description' => 'Obtenga información genética para pacientes que están tratando de concebir, embarazadas o experimentando infertilidad o pérdida del embarazo.',
            'image' => '/images/Salud-reproductiva.jpg',
            'color' => '#5ebbc0',
            'bg' => 'bg-cover bg-center'
        ],
        [
            'title' => 'Enfermedades pediátricas y raras',
            'description' => 'Obtenga información genética completa para pacientes con enfermedades raras para informar el pronóstico, los tratamientos y los próximos pasos. Solicite pruebas individualmente o elija un paquete para obtener resultados más ágiles y completos. Considere un programa de pruebas patrocinado si está disponible.',
            'image' => '/images/Enfermedades-pediatricas-y-raras.jpg',
            'color' => '#d0c7b6',
            'bg' => 'bg-cover bg-center'
        ]
    ];
    @endphp

    <div class="container">
        <div class="flex flex-col lg:flex-row gap-6">
            @foreach($sections as $section)
                <div class="rounded flex flex-col w-full shadow-xl">
                    <div class="h-60 bg-no-repeat {{ $section['bg'] }}" style="background-color: {{ $section['color'] }};background-image: url({{ $section['image'] }})"></div>
                    <div class="p-4 flex flex-col gap-2">
                        <div class="font-bold">{{ $section['title'] }}</div>
                        <div>{{ $section['description'] }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container my-16">
        <div class="flex flex-col gap-4">
            <div class="font-bold text-3xl">Obtenga información que puede mejorar el diagnóstico, el pronóstico y la atención al paciente</div>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($categories as $category)
                    <a href="{{ route('catalogo.categoria', $category->slug) }}" class="rounded-xl border bg-white shadow-xl hover:shadow-2xl items-center py-2 md:py-5 w-full flex flex-row md:flex-col gap-2 cursor-pointer">
                        <div class=""><img src="/icons/{{ $category->icon }}"/></div>
                        <div class="font-bold px-8 text-xl text-center">{{ $category->name }}</div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection