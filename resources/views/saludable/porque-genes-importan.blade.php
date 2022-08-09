@extends('layout')

@section('content')
    <div class="container text-5xl font-bold my-8">¿Sano? Sigámos asi</div>

    <div class="w-full bg-gray-100">
        @include('partials.image-container', [
            'title' => 'Cuando se trata de su salud, una talla no se adapta a todos',
            'image' => '/images/08-jered-jessica-brooklyn-eli-kurt-katheryn-tim-jill-1277_3x.webp',
            'reverse' => true,
            'items' => [
                'El 77% de las personas dicen que probablemente se harían una prueba si les ayudara a desarrollar un plan de salud personalizado. No hay nada más personal que tus genes.'
            ]
        ])
    </div>

    @include('partials.image-container', [
        'title' => 'Invierta en su salud',
        'image' => '/images/13-akilah-2866_3x.webp',
        'items' => [
            'Desde el jugo verde hasta el equipo de entrenamiento en el hogar, ya está priorizando las cosas que respaldan su salud.',
            'Pero, ¿sabía que las pruebas genéticas pueden ayudarlo a aprovechar al máximo esas inversiones al ayudarlo a decidir dónde puede necesitar enfocar sus hábitos de salud?'
        ]
    ])

    @php
        $steps = [
            [
                'title' => 'Cambiar su estilo de vida, dieta o rutina de ejercicios.',
                'icon' => 'icons-80-px-outline-dsm-male-o-m-two-color.svg'
            ],
            [
                'title' => 'Ver a un especialista o agregar un nuevo proveedor de atención médica a su equipo de atención.',
                'icon' => 'icons-80-px-outline-dsm-medical-doctor-new-o-m-two-color.svg'
            ],
            [
                'title' => 'Comenzar o suspender ciertos tratamientos, medicamentos o suplementos.',
                'icon' => 'icons-80-px-outline-dsm-medicine-o-m-yellow.svg'
            ],
            [
                'title' => 'Aumentar los exámenes médicos para que pueda actuar temprano, cuando el tratamiento es más efectivo.',
                'icon' => 'Size_80px__2_.svg'
            ]
        ];
    @endphp

    {{--<div class="w-full bg-gray-100">
        <div class="container py-8">
            <div class="w-full text-center flex flex-col gap-4">
                <p class="font-bold text-3xl">Las pruebas genéticas pueden decirle si podría beneficiarse de:</p>
                <p class="text-xl">Comer bien, hacer ejercicio y hacerse chequeos de rutina (como una visita anual de bienestar de la mujer) son excelentes para la persona promedio. Pero, ¿y si no eres promedio? Sus genes pueden decirle si hay algo más que debe hacer para mejorar su salud o mantenerse saludable, incluyendo:</p>
            </div>

            @include('partials.steps', ['steps' => $steps])
        </div>
    </div>--}}

    <div class="w-full bg-blue-landing">
        <div class="container py-16 flex flex-col gap-8">
            <div class="text-center text-4xl font-bold text-white">¿Listo para comenzar?</div>
            <div class="flex justify-center gap-8">
                <a href="{{ route('saludable.acerca-de-pruebas') }}" class="btn">Ver pruebas</a>
                <a href="{{ route('saludable.como-funcionan-pruebas') }}" class="btn">Vea como funciona</a>
            </div>
        </div>
    </div>
@endsection