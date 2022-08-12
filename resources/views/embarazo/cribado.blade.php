@extends('layout')

@section('content')
    @include('partials.landing', [
        'title' => '¿Estás pensando en tener un bebé? La detección de portadores es para usted',
    ])

    <div class="container flex flex-col gap-4 py-12">
        <div class="font-bold text-2xl">Mantener a tu bebé sano está en tus genes</div>
        <div class="flex flex-col gap-2">
            <div class="text-xl">En las relaciones, es genial tener cosas en común. Pero cuando se trata de tus genes, a veces las diferencias son algo bueno.</div>
            <div class="text-xl">La mayoría de nosotros somos “portadores” de cambios ocultos en el ADN que no afectan nuestra propia salud. Pero si usted y su pareja son ambos portadores de la misma condición, su futuro hijo podría estar en riesgo.</div>
        </div>
    </div>

    @include('partials.image-container', [
        'title' => 'Pruebas exhaustivas, simplificadas',
        'image' => '/images/box-inside.png',
        'items' => [
            'La prueba de detección integral de portadores de '.env('APP_NAME').' analiza su ADN en busca de más de 280 afecciones genéticas, incluida la fibrosis quística, la enfermedad de Tay-Sachs, el síndrome X frágil y la atrofia muscular espinal.',
            'Esta es la misma prueba que su obstetra y ginecólogo puede ofrecerle en su cita de 8 semanas, pero no hay motivo para esperar. Cuanto antes sepas tus resultados, mejor.'
        ]
    ])

    @include('partials.landing', [
        'title' => 'La mayoría de los bebés que nacen con una condición genética rara nacen de padres sin antecedentes familiares de esa condición.',
        'image' => '/images/BANNER_LAMAYORIA_.jpg',
        'bgStyle' => 'background-color: #e5e6e8;',
        'bgPosition' => 'bg-left-bottom',
        'color' => 'text-blue-primary',
        'self' => 'self-end',
        'resize' => true,
        'reverse' => true
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
            <p class="font-bold text-3xl">¿Cómo funciona la prueba?</p>
            <p class="text-xl">Ya sea que esté comenzando a pensar en tener un bebé, intentándolo activamente o ya esté embarazada, ahora es un buen momento para hacerse una prueba de detección de portadores. Es una manera simple e indolora de estar preparado.</p>
        </div>

        @include('partials.steps', ['steps' => $steps])
    </div>--}}

    @include('partials.landing', [
        'title' => 'La principal organización de obstetricia y ginecología, el Colegio Estadounidense de Obstetras y Ginecólogos, recomienda que se ofrezca la detección de portadores a todas las mujeres embarazadas o que planeen quedar embarazadas..',
        'image' => '/images/BANNER_LAPRINCIPAL.jpg',
        'bgStyle' => 'background-color: #d9dade;',
        'bgPosition' => 'bg-left-bottom',
        'color' => 'text-black-primary',
        'self' => 'self-end',
        'size' => 3,
        'resize' => true,
    ])

    @include('partials.image-container', [
        'title' => '¿Qué pasa si soy un portador?',
        'image' => '/images/PORTADOR_.png',
        'items' => [
            'Si sus resultados indican que es portadora de una afección, el próximo paso suele ser evaluar a su pareja, ya que para la mayoría de las afecciones, ambos deben ser portadores para que su bebé esté en riesgo.',
            'Si tanto usted como su pareja son portadores, los asesores genéticos de '.env('APP_NAME').' pueden ayudarlo a comprender el riesgo exacto para su bebé, así como sus opciones, que incluyen:'
        ],
        'list_items' => [
            'Pruebas diagnósticas durante el embarazo para estar mejor preparada',
            'Opciones alternativas de concepción'
        ]
    ])

    @include('partials.image-container', [
        'title' => '¿Dudas sobre el costo?',
        'image' => '/images/box-angle-polo.png',
        'items' => [
            'La detección de portadores está cubierta por muchos planes de seguro y la mayoría de las personas pagan $100 USD e su bolsillo. Si su plan no lo cubre (o si no tiene seguro), '.env('APP_NAME').' ofrece un precio de pago por cuenta propia de $250 USD para usted (y $100 para su pareja si también necesitan pruebas). Siempre puede usar su HSA/FSA.'
        ],
        'reverse' => true
    ])
@endsection