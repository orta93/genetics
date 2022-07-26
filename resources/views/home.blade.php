@extends('layout')

@section('content')
    @include('partials.landing', [
        'title' => 'Tu salud comienza en tus genes.',
        'subtitle' => 'Prevé y detecta oportunamente cualquier sospecha de enfermedades hereditarias y vulnerabilidades de tu salud a través de las pruebas genéticas',
        'image' => '/images/BANNER_PRINCIPAL_.jpg',
        'link' => route('catalogo'),
        'color' => 'text-black md:text-white',
        'linkLabel' => 'Catálogo de Pruebas'
    ])


    @php
        $plans = [
            [
                'title' => 'Embarazo',
                'icon' => 'EMBARAZO.png',
                'description' => 'Obtenga información útil para guiar decisiones de salud importantes antes y durante el embarazo.',
                'link' => route('embarazo')
            ],
            [
                'title' => 'Wellness',
                'icon' => 'WELLNESS.png',
                'description' => 'Mejora tu rendimiento físico y mental, descubriendo el tipo de alimentación más adecuada para tu organismo',
                'link' => route('saludable')
            ],
            [
                'title' => 'Cáncer',
                'icon' => 'CANCER.png',
                'description' => 'Comprenda sus genes para que usted y su médico puedan encontrar los tratamientos más efectivos.',
                'link' => route('cancer')
            ],
            [
                'title' => 'Enfermedades Genéticas',
                'icon' => 'Size_80px__5_.svg',
                'description' => 'Encuentre un diagnóstico o comprenda si una afección es hereditaria para que pueda concentrarse en el tratamiento adecuado.',
                'link' => route('enfermedades')
            ]
        ];
    @endphp

    <div class="hidden sm:flex flex-col container py-12">
        <div class="w-full text-center flex flex-col gap-4">
            <p class="font-bold text-3xl">Construya su plan para una mejor salud.</p>
            <p class="font-light">¿Tiene una pregunta de salud? Tenemos una prueba para ti.</p>
        </div>

        @include('partials.cards', ['cards' => $plans])
    </div>
    <div class="block sm:hidden">
        <vue-carousel type="cards" :items='@json($plans)'/>
    </div>

    @php $patients = 150; @endphp
    <div class="w-full py-16 bg-blue-primary text-white">
        <div class="container text-center flex flex-col gap-4 font-bold">
            <p class="uppercase text-xl">Más de</p>
            <counter :value="{{ $patients }}" class="font-bold text-5xl"></counter>
            <p class="text-xl">paneles genéticos que facilitan información a especialistas para el diagnóstico y tratamiento oportuno de enfermedades</p>
        </div>
    </div>

    @php
        $mouse_options = [
            [
                'title' => 'Los especialistas aprueban',
                'content' => [env('APP_NAME').' cuenta con una amplia red de médicos especialistas que estarán a tu disposición para seguimiento posterior de tu detección genética.'],
            ],
            [
                'title' => 'Precios asequibles',
                'content' => ['Contamos con los mejores precios del mercado y planes de financiamiento, desde 3 a 36 meses.'],
            ],
            /*[
                'title' => 'Más que una prueba',
                'content' => ['Los resultados genéticos a menudo son solo el comienzo. El portal educativo interactivo de '.env('APP_NAME').' y los atentos asesores genéticos pueden ayudarlo a comprender sus resultados y qué hacer a continuación.'],
            ],*/
            [
                'title' => 'Usted tiene el control',
                'content' => ['En '.env('APP_NAME').' aseguramos la privacidad de tu información,Damos cumplimiento a la ley Federal de protección de datos personales.'],
            ]
        ];
    @endphp
    <div class="w-full bg-gray-100">
        <div class="container py-16">
            <p class="font-bold text-3xl">¿Por qué {{ env('APP_NAME') }}?</p>
            <mouser-container :items='@json($mouse_options)'></mouser-container>
        </div>
    </div>

    @include('partials.steps_alt')

    <div class="w-full bg-blue-primary text-white">
        <div class="container py-16 flex flex-col gap-4">
            <p class="font-bold text-3xl">Toma acción en base a tu ADN</p>
            <p>Los resultados de {{ env('APP_NAME') }} incluyen claros pasos a seguir, para que sepa cómo mejorar su salud. También hacemos que sea fácil de compartir con su médico, para que puedan trabajar juntos para desarrollar un plan personalizado para las necesidades de su cuerpo.</p>
        </div>
    </div>

    @php
        $stories = [
            [
                'quote' => '¿Cómo digo que no a una oportunidad de reducir todas estas posibilidades de tener cáncer y seguir estando allí para mis hijos y mi familia?',
                'author' => 'Sarah',
                'img' => 'TESTIMONIALES_1.jpg'
            ],
            [
                'quote' => 'Casi 5 años después de perder a mi bebé por nacer, tuve la oportunidad de obtener finalmente respuestas... sobre por qué mi cuerpo no podía soportar este milagro, algo para responder a la pregunta constante de si había hecho algo para causar mi aborto espontáneo.',
                'author' => 'Stefanie Castro',
                'img' => 'TESTIMONIALES_2.jpg'
            ],
            [
                'quote' => '[Las pruebas genéticas] cambiaron su categoría de riesgo y su plan de tratamiento.',
                'author' => 'Meredith, madre de Alexis',
                'img' => 'TESTIMONIALES_3.jpg'
            ]
        ];
    @endphp
    <div class="w-full">
        <div class="container py-16 flex flex-col gap-4">
            <p class="font-bold text-3xl text-center">Ahora ellos saben: historias reales</p>
        </div>
        <div>
            <vue-carousel :items='@json($stories)'/>
        </div>
    </div>

    {{--@php
        $questions = [
            [
                'question' => '¿Qué son las pruebas genéticas de grado médico?',
                'answer' => 'Las pruebas genéticas implican observar sus genes, que son las instrucciones codificadas en su ADN. Sus genes son fundamentales para su salud y bienestar. Las pruebas genéticas de grado médico de '.env('APP_NAME').' analizan sus genes para encontrar cambios que puedan conducir a enfermedades.'
            ],
            [
                'question' => '¿En qué se diferencia la prueba genética de '.env('APP_NAME').' de otras pruebas genéticas de las que he oído hablar?',
                'answer' => 'Las pruebas integrales de '.env('APP_NAME').' son las mismas pruebas ordenadas por los médicos. Cuando realiza la prueba con nosotros, puede tomar decisiones de salud con confianza en función de sus resultados. Las pruebas de '.env('APP_NAME').' también incluyen la opción de hablar con un experto en genética que puede ayudarlo a comprender qué significan sus resultados para usted.'
            ],
            [
                'question' => '¿Qué opciones de pago están disponibles?',
                'answer' => 'El seguro a menudo cubre las pruebas genéticas relacionadas con la formación de una familia; '.env('APP_NAME').' está en la red para más de 300 millones de personas en los EE. UU., con un costo de desembolso típico entre $0 y $100. '.env('APP_NAME').' también ofrece precios asequibles de autopago y acepta pagos HSA/FSA.'
            ],
        ];
    @endphp
    <div class="w-full bg-gray-100 py-12">
        <div class="w-3/4 md:w-1/2 mx-auto">
            <div class="font-bold text-3xl py-4 text-center border-b border-black">¿Tiene alguna pregunta?</div>
            <faq :items='@json($questions)'></faq>
            <div class="py-4"><a class="underline" href="#">Ver todas las preguntas frecuentes</a></div>
        </div>
    </div>--}}
@endsection