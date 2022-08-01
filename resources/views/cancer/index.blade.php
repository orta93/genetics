@extends('layout')

@section('content')
    @include('partials.landing', [
        'title' => 'Una poderosa herramienta para el cáncer',
        'image' => '/images/21_Alvin_4327.webp',
        'bg' => 'bg-brown-third',
        'color' => 'text-white',
        'resize' => true,
        'reverse' => true
    ])

    <div class="w-full bg-gray-100">
        <div class="container flex flex-col gap-4 py-12">
            <div class="font-bold text-2xl">Un diagnóstico de cáncer es estresante y abrumador. Estamos aquí para ayudarte.</div>
            <div class="flex flex-col gap-2">
                <div class="text-xl">Comprender sus genes puede ayudarlo a guiarlo a usted y a su médico a los tratamientos más efectivos, acercándolo un paso más a vencer el cáncer y luego mantenerse saludable a largo plazo.</div>
            </div>
        </div>
    </div>

    @include('partials.image-container', [
        'title' => 'Pruebas genéticas y cáncer',
        'image' => '/images/bitmap_3x.webp',
        'reverse' => true,
        'self' => 'self-end',
        'items' => [
            'La mitad de todos los hombres y un tercio de todas las mujeres en los Estados Unidos desarrollarán cáncer durante sus vidas.',
            'En muchos casos, la genética de una persona la ha hecho más susceptible al cáncer y, como resultado, puede responder de manera diferente a las terapias, beneficiarse de un tratamiento más agresivo o tomar medidas para evitar volver a contraer cáncer en el futuro.'
        ]
    ])

    @include('partials.landing', [
        'title' => '1 de cada 8 pacientes',
        'title_alt' => 'con cáncer tiene una mutación genética transmitida a través de su familia',
        'subtitle' => 'Un tercio de los pacientes con mutaciones de alto riesgo podrían beneficiarse de un tratamiento diferente y más personalizado del cáncer después de las pruebas genéticas.',
        'image' => '/images/03-jered-tim-0227_3x.webp',
        'bg' => 'bg-blue-landing',
        'bgPosition' => 'bg-right-top',
        'color' => 'text-white',
        'link' => route('cancer.porque-genes-importan'),
        'linkLabel' => '¿Por qué debería hacerme la prueba?',
        'resize' => true,
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
                <a href="{{ route('cancer.como-funcionan-pruebas') }}" class="btn">Cuéntame mas</a>
            </div>
        </div>
    </div>

    @include('partials.image-container', [
        'title' => 'Encuentre la prueba adecuada',
        'image' => '/images/box-angle-polo.webp',
        'items' => [
            'Invitae ofrece una serie de pruebas centradas en tipos específicos de cáncer. Cada uno viene con los siguientes pasos claros, para que usted y su médico puedan tomar decisiones personalizadas para sus genes.'
        ],
        'button' => route('cancer.acerca-de-pruebas'),
        'buttonLabel' => 'Ver mis opciones'
    ])

    <div class="w-full bg-gray-100">
        <div class="container py-12">
            <div class="w-full text-center md:text-left flex flex-col gap-4">
                <p class="font-bold text-3xl">Una opción adicional: Gestión personalizada de medicamentos</p>
                <p class="font-light">Casi todo el mundo tiene una variación genética que los hace incapaces de procesar ciertos medicamentos de la manera en que están destinados. Las pruebas farmacogenómicas pueden ayudar a su médico a identificar el medicamento y la dosis adecuados para su cuerpo único.</p>

                <p>
                    <a href="{{ route('cancer.gestion-personalizada-medicacion') }}" class="btn">Aprenda más</a>
                </p>
            </div>
        </div>
    </div>
@endsection