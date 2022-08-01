@extends('layout')

@section('content')
    @include('partials.landing', [
        'title' => 'Su ADN puede ayudar a responder sus preguntas de salud',
        'image' => '/images/27_Jasmine_Tiffany_Jaylee_6687.webp',
        'bg' => 'bg-brown-secondary',
        'color' => 'text-white',
        'resize' => true
    ])

    <div class="w-full bg-gray-100">
        <div class="container flex flex-col gap-4 py-12">
            <div class="font-bold text-2xl">Encontrar respuestas a usted o a los mayores problemas de salud de su ser querido puede ser una web complicada. Pero la mayoría de las veces, comprender lo que hay en sus genes puede marcar la diferencia.</div>
            <div class="flex flex-col gap-2">
                <div class="text-xl">Ya sea que eso signifique finalmente tener un diagnóstico o concentrarse en el plan de tratamiento correcto, queremos ayudarlo a llegar allí.</div>
            </div>
        </div>
    </div>

    @php
        $steps = [
            [
                'title' => 'Encuentre un diagnóstico médico para síntomas inexplicables',
                'icon' => 'Size_80px__3_.svg'
            ],
            [
                'title' => 'Confirmar una sospecha de enfermedad',
                'icon' => 'icons-80-px-outline-dsm-checkmark-o-m-yellow.svg'
            ],
            [
                'title' => 'Descubrir nuevas o mejores opciones de tratamiento (y evitar las innecesarias)',
                'icon' => 'icons-80-px-outline-dsm-test-options-o-m-green.svg'
            ],
            [
                'title' => 'Identificar a los miembros de la familia que también pueden estar en riesgo',
                'icon' => 'icons-80-px-outline-dsm-family-2-o-m-yellow.svg'
            ]
        ];
    @endphp

    <div class="w-full bg-gray-100">
        <div class="container py-8">
            <div class="w-full text-center flex flex-col gap-4">
                <p class="font-bold text-3xl">Una poderosa herramienta para mejorar la salud</p>
                <p>En muchos casos, conocer sus genes puede ayudar a:</p>
            </div>

            @include('partials.steps', ['steps' => $steps])

            <div class="flex justify-center">
                <a href="{{ route('enfermedades.porque-genes-importan') }}" class="btn">Cuéntame mas</a>
            </div>
        </div>
    </div>

    @include('partials.landing', [
        'title' => 'Más de una docena de sociedades médicas importantes recomiendan las pruebas genéticas como una forma de diagnosticar una afección de salud o encontrar el tratamiento adecuado.',
        'image' => '/images/bitmap_3x_alt.webp',
        'bg' => 'bg-blue-landing',
        'self' => 'self-end',
        'reverse' => true,
        'bgPosition' => 'bg-left-top',
        'color' => 'text-white',
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

    <div class="w-full bg-gray-100">
        <div class="container py-8">
            <div class="w-full text-center flex flex-col gap-4">
                <p class="font-bold text-3xl">¿Cómo funcionan las pruebas?</p>
                <p>Sabemos que está recibiendo muchas pruebas en este momento. Nuestras pruebas genéticas se pueden iniciar desde la comodidad de su hogar con una simple muestra de saliva.</p>
            </div>

            @include('partials.steps', ['steps' => $steps])

            <div class="flex justify-center">
                <a href="{{ route('enfermedades.como-funcionan-pruebas') }}" class="btn">Cuéntame mas</a>
            </div>
        </div>
    </div>
@endsection