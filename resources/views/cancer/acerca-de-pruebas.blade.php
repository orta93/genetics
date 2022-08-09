@extends('layout')

@section('content')
    <div class="container my-8 flex flex-col gap-6">
        <div class="text-5xl font-bold">Trazar su ruta personalizada comienza aquí</div>
        <div class="">
            <p>¿Listo para desarrollar un plan de tratamiento informado por sus genes? El primer paso es trabajar con su proveedor de atención médica para elegir la prueba adecuada para usted.</p>
        </div>
    </div>

    <div class="w-full bg-gray-100">
        @include('partials.image-container', [
            'title' => 'Invitae ofrece pruebas para muchos tipos de cáncer, incluyendo:',
            'image' => '/images/box-inside.webp',
            'list_items' => [
                'Seno',
                'Ovario, útero y endometrio',
                'Piel',
                'Próstata',
                'Pancreático',
                'Gástrico',
                'Células renales',
                'Tiroides',
                'Pediátrico'
            ]
        ])
    </div>

    @php
        $steps = [
            [
                'title' => 'Pruebas exhaustivas',
                'icon' => 'icon-computer-select-test.svg',
                'description' => 'Invitae ofrece más de 50 pruebas exhaustivas, cada una de las cuales incluye genes relevantes para un tipo específico de cáncer.',
            ],
            [
                'title' => 'Borrar los siguientes pasos',
                'icon' => 'icons-80-px-outline-dsm-checkmark-o-m-yellow.svg',
                'description' => 'Los resultados de Invitae vienen con los siguientes pasos claros, para que usted y su médico puedan tomar medidas basadas en su genética.',
            ],
            [
                'title' => 'Acceso a expertos en genética',
                'icon' => 'icons-80-px-outline-dsm-gc-o-m-green-2-color.svg',
                'description' => 'Los expertos están disponibles por teléfono para responder preguntas. Una vez que tenga resultados, también puede programar una sesión completa de asesoramiento genético sin cargo adicional.',
            ]
        ];
    @endphp

    {{--<div class="container py-8">
        <div class="w-full text-center flex flex-col gap-4">
            <p class="font-bold text-3xl">¿Qué está incluido?</p>
            <p>Cuando solicitas una prueba genética invitae, obtienes:</p>
        </div>

        @include('partials.steps', ['steps' => $steps])
    </div>--}}
@endsection