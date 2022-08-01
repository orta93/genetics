@extends('layout')

@section('content')
    @include('partials.landing', [
        'title' => 'Desde la planificación hasta el embarazo y la paternidad, la genética puede ayudar',
        'image' => '/images/journey-pregnancy.webp',
        'bg' => 'bg-brown-primary',
        'resize' => true,
        'reverse' => true
    ])

    <div class="container flex flex-col gap-4 py-12">
        <div class="font-bold text-2xl">Cuando estás planeando una familia, quieres que todo salga bien.</div>
        <div class="flex flex-col gap-2">
            <div class="font-bold text-xl">Comprender qué hay en sus genes puede ayudarlo a tomar decisiones más informadas para un embarazo saludable.</div>
            <div>Si bien la mayoría de los bebés nacen sanos, con cada embarazo existe una pequeña posibilidad de tener un bebé con una condición de salud. Las pruebas genéticas de {{ env('APP_NAME') }} eliminan la incertidumbre.</div>
        </div>
    </div>

    @php
        $options = [
            [
                'title' => 'Cribado de portadores',
                'icon' => 'icons-120-px-outline-dsm-family-2-o-m-green.svg',
                'description' => 'Determina su riesgo de transmitir una afección genética a su hijo, incluso si usted mismo no tiene la afección.',
                'link' => route('cribado-de-portadores')
            ],
            [
                'title' => 'Pruebas genéticas preimplantacionales',
                'icon' => 'icons-120-px-outline-dsm-sample-collection-repro-o-m-yellow.svg',
                'description' => 'Puede mejorar sus posibilidades de un embarazo saludable al identificar los embriones más adecuados2 durante la fertilización in vitro (FIV).',
                'link' => route('prueba-preimplantacion-fiv')
            ],
            [
                'title' => 'Gestión personalizada de medicamentos',
                'icon' => 'Size_80px.svg',
                'description' => 'Ayuda a su médico a identificar los medicamentos y las dosis seguros y efectivos para su cuerpo único, incluidos los medicamentos para el control del dolor, la salud mental y muchas otras afecciones.',
                'link' => route('gestion-personalizada-medicamentos')
            ]
        ];
    @endphp

    <div class="w-full bg-gray-100">
        <div class="container py-12">
            <div class="w-full text-center flex flex-col gap-4">
                <p class="font-bold text-3xl">¿Pensando en tener un bebé?</p>
                <p class="font-light">Ahora es un buen momento para las pruebas genéticas. Le brinda más opciones para la concepción y puede ayudarla a planificar un embarazo saludable.</p>
            </div>

            @include('partials.cards', ['cards' => $options, 'link' => true])
        </div>
    </div>

    @php
        $tests = [
            [
                'title' => 'Cribado de portadores',
                'icon' => 'icons-120-px-outline-dsm-family-2-o-m-green.svg',
                'description' => 'Determina su riesgo de transmitir una afección genética a su hijo, incluso si usted mismo no tiene la afección.',
                'link' => route('cribado-de-portadores')
            ],
            [
                'title' => 'Cribado prenatal no invasivo',
                'icon' => 'icons-120-px-outline-dsm-prenatal-o-m-yellow.svg',
                'description' => 'Predice el sexo de su bebé y descubre su riesgo de ciertos trastornos genéticos, tan pronto como a las 10 semanas.',
                'link' => route('cribado-prenatal-no-invasivo')
            ],
            [
                'title' => 'Pruebas de diagnóstico prenatal',
                'icon' => 'icons-120-px-outline-dsm-pregnancy-o-m-two-color.svg',
                'description' => 'Le da respuestas definitivas sobre una condición sospechosa para que pueda estar preparado para lo que está por venir.',
                'link' => route('pruebas-diagnostico-prenatal')
            ]
        ];
    @endphp

    <div class="container py-12">
        <div class="w-full text-center flex flex-col gap-4">
            <p class="font-bold text-3xl">¿Ya está embarazada?</p>
            <p class="font-light">Las pruebas genéticas pueden brindarle las respuestas que tanto necesita. Esté preparado conociendo los riesgos hereditarios para la salud de su bebé, antes del nacimiento.</p>
        </div>

        @include('partials.cards', ['cards' => $tests, 'link' => true])
    </div>

    @include('partials.landing', [
        'title' => 'Las pruebas genéticas no solo están disponibles, sino que cuentan con el apoyo de expertos.',
        'subtitle' => 'Según el Colegio Estadounidense de Obstetras y Ginecólogos, a todas las mujeres que están embarazadas o que están pensando en quedarse embarazadas se les debe ofrecer una prueba genética.',
        'image' => '/images/22_Samantha_4608-2.webp',
        'bg' => 'bg-blue-landing',
        'bgPosition' => 'bg-right-top',
        'color' => 'text-white',
        'resize' => true,
        'reverse' => true
    ])
@endsection