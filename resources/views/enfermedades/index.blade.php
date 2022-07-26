@extends('layout')

@section('content')
    @include('partials.landing', [
        'title' => 'Su ADN puede ayudar a responder sus preguntas de salud',
        'image' => '/images/BANNER_ENF_GENETICAS_.jpg',
        'bgStyle' => 'background-color: #c87e7f;',
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
                'icon' => 'ENCONTRAR-DIAGNOSTICO.png'
            ],
            [
                'title' => 'Confirmar una sospecha de enfermedad',
                'icon' => 'CONFIRMAR.png'
            ],
            [
                'title' => 'Descubrir nuevas o mejores opciones de tratamiento (y evitar las innecesarias)',
                'icon' => 'MEJORAS.png'
            ],
            [
                'title' => 'Identificar a los miembros de la familia que también pueden estar en riesgo',
                'icon' => 'MIEMBROS-DE-FAMILIA.png'
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
        'image' => '/images/PRUEBA-GENETICA.jpg',
        'color' => 'text-white',
        'bgStyle' => 'background-color: #dca775;',
        'resize' => true
    ])

    @include('partials.steps_alt')
@endsection