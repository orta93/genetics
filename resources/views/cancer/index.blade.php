@extends('layout')

@section('content')
    @include('partials.landing', [
        'title' => 'Una poderosa herramienta para el cáncer',
        'image' => '/images/BANNER_CANCER_.jpg',
        'bgStyle' => 'background-color:#d4e5df;',
        'color' => 'text-black',
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
        'image' => '/images/PRUEBAS_GENETICAS.png',
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
        'image' => '/images/BANNER_1-DE-CADA-8_.jpg',
        'bgPosition' => 'bg-right-bottom',
        'color' => 'text-white',
        'bgStyle' => 'background-color: #02a8dc;',
        'link' => route('cancer.porque-genes-importan'),
        'linkLabel' => '¿Por qué debería hacerme la prueba?',
        'resize' => true,
    ])

    @include('partials.steps_alt')

    @include('partials.image-container', [
        'title' => 'Encuentre la prueba adecuada',
        'image' => '/images/box-angle-polo.png',
        'items' => [
            env('APP_NAME').' ofrece una serie de pruebas centradas en tipos específicos de cáncer. Cada uno viene con los siguientes pasos claros, para que usted y su médico puedan tomar decisiones personalizadas para sus genes.'
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