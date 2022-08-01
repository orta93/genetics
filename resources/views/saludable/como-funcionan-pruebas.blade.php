@extends('layout')

@section('content')
    <div class="container text-5xl font-bold my-8">Cómo funcionan las pruebas genéticas</div>

    @php
        $mouse_options = [
            [
                'title' => 'Paso 1: Solicitar una prueba',
                'content' => [
                    'Solicite su prueba en línea',
                    'Responda algunas preguntas sobre su historial médico personal y familiar',
                    'Un médico independiente revisará su historial de salud y ordenará su prueba'
                ]
            ],
            [
                'title' => 'Paso 2: Haz tu prueba',
                'content' => [
                    'Recibirás un kit de recolección de saliva por correo',
                    'Simplemente proporcione una muestra de saliva y envíela por correo al laboratorio de Invitae en San Francisco'
                ]
            ],
            [
                'title' => 'Paso 3: Actua',
                'content' => [
                    'Recibe un mensaje de texto y un correo electrónico cuando tus resultados estén listos',
                    'Simplemente inicie sesión en el portal invitae para ver lo que sus genes tienen que decir sobre su salud',
                    'Haga un plan de acción con su médico'
                ]
            ]
        ];
    @endphp
    <div class="w-full bg-gray-100">
        <div class="container py-16">
            <p class="font-bold text-3xl text-center">¿Listo para dar el siguiente paso, pero no sabes por dónde empezar?</p>
            <mouser-container :items='@json($mouse_options)'></mouser-container>
        </div>
    </div>

    @include('partials.image-container', [
        'title' => '¿Dudas sobre el costo?',
        'image' => '/images/box-angle-polo.webp',
        'items' => [
            'Regularmente gastas dinero en cosas que apoyan tu salud.',
            'Un masaje: $80',
            'Un tratamiento facial: $125',
            'Un mes de jugo verde: $240',
            'Un mes de clases de fitness boutique: $250',
            'Esta inversión única proporciona información valiosa a la que puede recurrir para toda la vida. Las pruebas comienzan en $ 250. Y a diferencia de su jugo diario, puede usar su HSA / FSA.'
        ],
        'reverse' => true
    ])

    <div class="bg-gray-100">
        @include('partials.image-container', [
            'title' => 'Su privacidad es importante para nosotros',
            'image' => '/images/12-jessica-1675_3x.webp',
            'items' => [
                'Nos tomamos en serio la privacidad; uno de nuestros principios básicos es que los pacientes poseen y controlan sus datos genéticos. Puede iniciar sesión en su cuenta de Invitae en cualquier momento para establecer sus preferencias y controlar cómo se utilizan sus datos.',
                '¿Quieres saber sobre las oportunidades de investigación relacionadas con tus resultados? Te tenemos. ¿Prefieres no hacerlo? Tú también puedes tener eso.'
            ]
        ])
    </div>

    <div class="w-full bg-blue-landing">
        <div class="container py-16 flex flex-col gap-8">
            <div class="text-center text-4xl font-bold text-white">¿Listo para comenzar?</div>
            <div class="flex justify-center gap-8">
                <a href="{{ route('saludable.acerca-de-pruebas') }}" class="btn">Ver pruebas</a>
            </div>
        </div>
    </div>
@endsection