@extends('layout')

@section('content')
    @include('partials.landing', [
        'title' => 'Encuentre el camino hacia el embarazo, con pruebas genéticas preimplantacionales',
    ])

    <div class="w-full bg-gray-100">
        <div class="container flex flex-col gap-4 py-12">
            <div class="font-bold text-2xl">Cuando se somete a la FIV, desea planificar el éxito</div>
            <div class="flex flex-col gap-2">
                <div class="text-xl">Es por eso que tantas familias hacen de las pruebas genéticas previas a la implantación (PGT, por sus siglas en inglés) una parte estándar de sus planes de tratamiento de FIV.</div>
                <div class="text-xl">Las pruebas genéticas previas a la implantación ayudan a identificar los embriones que son más adecuados para la transferencia durante la FIV, brindándole la mejor oportunidad de implantación y un embarazo exitoso.</div>
            </div>
        </div>
    </div>

    @include('partials.landing', [
        'title' => 'Un paso más cerca de un embarazo saludable',
        'items' => [
            'La mayoría de los abortos espontáneos, especialmente los que ocurren en el primer trimestre, se deben a anomalías cromosómicas. Esta prueba funciona mediante la identificación de embriones con cromosomas adicionales o faltantes o fragmentos de cromosomas.',
            'Al analizar los embriones antes de la transferencia de FIV, es posible que tenga:'
        ],
        'list_items' => [
            'Una mayor probabilidad de un embarazo de FIV exitoso y saludable',
            'Un riesgo reducido de aborto espontáneo',
            'La capacidad de identificar el sexo de su bebé (solo si desea saberlo)',
        ],
        'image' => '/images/UN-PASO-MAS.jpg',
        'bgStyle' => 'background-color: #eef2f5;',
        'bgPosition' => 'bg-left-bottom',
        'color' => 'text-blue-primary',
        'self' => 'self-end',
        'resize' => true,
        'reverse' => true
    ])

    <div class="w-full bg-gray-100">
        <div class="container py-12 flex flex-col gap-8 text-center">
            <div class="font-bold text-2xl">Salud embrionaria y edad materna</div>
            <div class="flex flex-col gap-2">
                <div>A medida que envejecemos, existe una mayor probabilidad de que nuestros embriones se vean afectados por cambios cromosómicos.</div>
                <div>Las pruebas pueden ayudarlo a identificar embriones sanos.</div>
                <div>Adaptado de datos internos de más de 90,000 embriones, 2018.</div>
            </div>
        </div>
    </div>

    @php
        $steps = [
            [
                'title' => 'Paso 1',
                'subtitle' => 'Recoleccion de muestra',
                'icon' => 'icons-80-px-outline-dsm-sample-collection-repro-o-m-green.svg',
                'description' => 'Su equipo de fertilidad recolecta cuidadosamente solo unas pocas células de sus embriones y las envía a nuestro laboratorio para su análisis.',
            ],
            [
                'title' => 'Paso 2',
                'subtitle' => 'Análisis de muestras',
                'icon' => 'icons-80-px-outline-dsm-microscope-o-m-two-color.svg',
                'description' => 'Nuestros científicos analizan si cada embrión tiene alguna anomalía cromosómica que pueda causar un aborto espontáneo o una condición de salud.',
            ],
            [
                'title' => 'Paso 3',
                'subtitle' => 'Resultados',
                'icon' => 'icons-80-px-outline-dsm-computer-analytics-o-m-two-color.svg',
                'description' => 'Según sus resultados, su equipo de fertilidad selecciona embriones para transferir, lo que aumenta sus posibilidades de un embarazo exitoso.',
            ]
        ];
    @endphp

    {{--<div class="container py-8">
        <div class="w-full text-center flex flex-col gap-4">
            <p class="font-bold text-3xl">¿Cómo funciona la prueba?</p>
        </div>

        @include('partials.steps', ['steps' => $steps])
    </div>--}}
@endsection