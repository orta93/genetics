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
                'icon' => 'ESTILO-DE-VIDA.png'
            ],
            [
                'title' => 'Acción temprana para prevenir la aparición de la enfermedad',
                'icon' => 'ATENCION-A-TIEMPO.png'
            ],
            [
                'title' => 'Exámenes más frecuentes o más tempranos para una afección o enfermedad en particular',
                'icon' => 'EXAMENES.png'
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

    @include('partials.steps_alt')

    <div class="w-full bg-gray-100">
        @include('partials.image-container', [
            'title' => 'Encuentre la prueba adecuada',
            'image' => '/images/box-angle-viola.png',
            'items' => [
                env('APP_NAME').' ofrece 4 pruebas que pueden decirle si tiene un mayor riesgo de desarrollar cáncer, enfermedades cardíacas y otras afecciones crónicas, así como la forma en que los genes afectan su respuesta a los medicamentos.'
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