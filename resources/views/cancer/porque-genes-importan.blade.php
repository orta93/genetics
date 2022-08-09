@extends('layout')

@section('content')
    <div class="container text-5xl font-bold my-8">Sus genes pueden ser una herramienta importante para controlar el cáncer</div>

    @php
        $mouse_options = [
            [
                'title' => 'Cáncer de mama',
                'content' => [
                    'La Sociedad Americana de Cirujanos de Mama recomienda que las pruebas genéticas estén disponibles para todas las pacientes con cáncer de mama.'
                ]
            ],
            [
                'title' => 'Cáncer de próstata',
                'content' => [
                    'Se recomienda a todos los hombres con cáncer de próstata metastásico que consideren las pruebas genéticas.',
                    'Hasta 1 de cada 6 hombres con cáncer de próstata tiene una mutación genética hereditaria.'
                ]
            ],
            [
                'title' => 'Cáncer de ovario/útero',
                'content' => [
                    'Las guías médicas recomendaron pruebas genéticas para todas las pacientes con cáncer de ovario, cáncer de trompa de Falopio y cáncer peritoneal primario.',
                    'Hasta 1 de cada 4 pacientes con cáncer de ovario tiene una mutación genética hereditaria.'
                ]
            ],
            [
                'title' => 'Cáncer de páncreas',
                'content' => [
                    'Las guías médicas recomiendan pruebas genéticas para pacientes con cáncer de páncreas.',
                    'Hasta 1 de cada 5 pacientes con cáncer de páncreas tiene una mutación genética hereditaria.'
                ]
            ]
        ];
    @endphp
    <div class="w-full bg-gray-100">
        <div class="container py-16">
            <p class="font-bold text-3xl text-center">Las pruebas genéticas pueden proporcionar una imagen más clara de qué hacer a continuación</p>
            <p class="text-center">Navegar por el cáncer no es una experiencia única para todos. Comprender si tiene una mutación genética puede ayudarlo a usted y a su médico a personalizar su tratamiento. Se recomiendan pruebas genéticas para:</p>
            <mouser-container :items='@json($mouse_options)'></mouser-container>
        </div>
    </div>

    @php
        $steps = [
            [
                'title' => 'Tratamiento',
                'icon' => 'icons-80-px-outline-dsm-medicine-o-m-yellow.svg',
                'description' => 'Los resultados pueden dirigir a su médico a terapias que pueden ser más propensas a funcionar para usted, incluidos tipos específicos de cirugías, quimioterapias o tratamientos dirigidos. En algunos casos, también pueden calificarlo para ensayos clínicos.'
            ],
            [
                'title' => 'Salud futura',
                'icon' => 'icons-80-px-outline-dsm-calendar-o-m-green.svg',
                'description' => 'Los resultados pueden sugerir qué tan probable es que desarrolle otro cáncer en el futuro, por lo que puede ser proactivo y considerar con su médico la cirugía para reducir el riesgo, los medicamentos que pueden prevenir el desarrollo del cáncer ("quimioprevención") o el aumento de las pruebas de detección en el futuro.'
            ],
            [
                'title' => 'Familiares',
                'icon' => 'icons-80-px-outline-dsm-family-2-o-m-yellow.svg',
                'description' => 'Descubrir que usted tiene una mutación genética significa que los miembros de su familia también pueden estar en riesgo. También pueden hacerse la prueba y, si también tienen el cambio genético, pueden hacerse exámenes de detección de cáncer más frecuentes para que puedan actuar temprano, cuando el tratamiento es más efectivo.'
            ]
        ];
    @endphp

    {{--<div class="w-full bg-gray-100">
        <div class="container py-8">
            <div class="w-full text-center flex flex-col gap-4">
                <p class="font-bold text-3xl">Los beneficios de las pruebas genéticas</p>
                <p class="text-xl">Conocer su composición genética puede ayudar a su médico a determinar los mejores pasos para usted.</p>
            </div>

            @include('partials.steps', ['steps' => $steps])
        </div>
    </div>--}}

    {{--<div class="w-full bg-blue-landing">
        <div class="container py-16 flex flex-col gap-8">
            <div class="text-center text-4xl font-bold text-white">¿Listo para comenzar?</div>
            <div class="flex justify-center gap-8">
                <a href="{{ route('cancer.como-funcionan-pruebas') }}" class="btn">Vea como funciona</a>
            </div>
        </div>
    </div>--}}
@endsection