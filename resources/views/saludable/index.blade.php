@extends('layout')

@section('content')
    @include('partials.landing', [
        'title' => 'Estar sano significa estar informado',
        'image' => '/images/BANNER_WELLNESS_.jpg',
        'bg' => 'bg-white',
        'color' => 'text-black',
        'resize' => true,
        'reverse' => true
    ])

    @include('partials.image-container', [
        'title' => 'Agregue a su kit de herramientas de salud',
        'image' => '/images/box-angle-polo.png',
        'reverse' => true,
        'items' => [
            'Al igual que usar protector solar o controlar su presión arterial en el médico, las pruebas genéticas son otra herramienta importante para ayudar a controlar su salud y estilo de vida.',
            'Sus genes pueden darle pistas sobre su riesgo de desarrollar una enfermedad y, si resulta que tiene un mayor riesgo de una afección, hay pasos que puede tomar para ayudarlo a mantenerse saludable.'
        ]
    ])

    @php
        $steps = [
            [
                'title' => 'Cambios en el estilo de vida',
                'icon' => 'icons-80-px-outline-dsm-male-o-m-two-color.svg'
            ],
            [
                'title' => 'Acción temprana para prevenir la aparición de la enfermedad',
                'icon' => 'icons-80-px-outline-dsm-timer-o-m-green.svg'
            ],
            [
                'title' => 'Exámenes más frecuentes o más tempranos para una afección o enfermedad en particular',
                'icon' => 'Size_80px__2_.svg'
            ]
        ];
    @endphp

    <div class="w-full bg-gray-100">
        <div class="container py-8">
            <div class="w-full text-center flex flex-col gap-4">
                <p class="font-bold text-3xl">¿Cómo ayudan las pruebas?</p>
                <p class="text-xl">Comer bien, hacer ejercicio y hacerse chequeos de rutina (como una visita anual de bienestar de la mujer) son excelentes para la persona promedio. Pero, ¿y si no eres promedio? Sus genes pueden decirle si hay algo más que debe hacer para mejorar su salud o mantenerse saludable, incluyendo:</p>
            </div>

            @include('partials.steps', ['steps' => $steps])
        </div>
    </div>

    @include('partials.landing', [
        'title' => '1 de cada 6',
        'subtitle' => 'Los adultos sanos tienen un mayor riesgo de una afección de salud grave debido a su genética, y probablemente no lo sepan.',
        'image' => '/images/BANNER_1-DE-CADA-6_.jpg',
        'bg' => 'bg-white',
        'bgPosition' => 'bg-right-bottom',
        'bgStyle' => 'background-color: #e6e9f0;',
        'color' => 'text-black',
        'link' => route('saludable.porque-genes-importan'),
        'linkLabel' => '¿Por qué debería hacerme la prueba?',
        'resize' => true
    ])

    @php
        $steps = [
            [
                'title' => 'Paso 1',
                'icon' => 'Size_80px__3_.svg',
                'description' => 'Solicite una prueba en línea. Un médico independiente revisará y aprobará su pedido.',
            ],
            [
                'title' => 'Paso 2',
                'icon' => 'Size_80px__14_.svg',
                'description' => 'Proporcione una muestra de saliva desde la comodidad de su hogar y envíela a nuestro laboratorio.',
            ],
            [
                'title' => 'Paso 3',
                'icon' => 'icons-80-px-outline-dsm-gc-o-m-green-2-color.svg',
                'description' => 'Obtenga sus resultados en línea y compártalos con su médico. Si lo desea, hable con un asesor genético sin costo adicional.',
            ]
        ];
    @endphp

    {{--<div class="container py-8">
        <div class="w-full text-center flex flex-col gap-4">
            <p class="font-bold text-3xl">¿Cómo funcionan las pruebas?</p>
        </div>

        @include('partials.steps', ['steps' => $steps])

        <div class="flex justify-center">
            <a href="{{ route('saludable.como-funcionan-pruebas') }}" class="btn">Cuéntame mas</a>
        </div>
    </div>--}}

    <div class="w-full bg-gray-100">
        @include('partials.image-container', [
            'title' => 'Encuentre la prueba adecuada',
            'image' => '/images/box-angle-viola.png',
            'items' => [
                'Invitae ofrece 4 pruebas que pueden decirle si tiene un mayor riesgo de desarrollar cáncer, enfermedades cardíacas y otras afecciones crónicas, así como la forma en que los genes afectan su respuesta a los medicamentos.'
            ],
            'button' => route('saludable.acerca-de-pruebas'),
            'buttonLabel' => 'Ver mis opciones'
        ])
    </div>

    <div class="w-full bg-blue-landing">
        <div class="container py-16 flex flex-col gap-8">
            <div class="text-center text-4xl font-bold text-white">¿Listo para comenzar?</div>
            <div class="flex justify-center gap-8">
                <a href="{{ route('saludable.acerca-de-pruebas') }}" class="btn">Ver pruebas</a>
            </div>
        </div>
    </div>
@endsection