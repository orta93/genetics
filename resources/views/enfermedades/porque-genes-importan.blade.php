@extends('layout')

@section('content')
    <div class="container text-5xl font-bold my-8">Las pruebas genéticas pueden proporcionar una imagen más clara de qué hacer a continuación</div>

    @php
        $steps = [
            [
                'title' => 'Enfermedad cardíaca',
                'icon' => 'icons-120-px-outline-dsm-cardiomyopathy-o-m-green.svg',
                'list' => [
                    'Colesterol alto',
                    'Insuficiencia cardíaca',
                    'Arritmia (latidos cardíacos irregulares)',
                    'Miocardiopatía',
                    'Condiciones aórticas',
                    'Cardiopatía congénita',
                    'Y más'
                ]
            ],
            [
                'title' => 'Problemas neurológicos',
                'icon' => 'icons-120-px-outline-dsm-brain-o-m-yellow.svg',
                'list' => [
                    'Trastornos del desarrollo',
                    'Trastornos del movimiento, como la enfermedad de Parkinson',
                    'Trastornos neuromusculares',
                    'Enfermedades neurodegenerativas',
                    'Epilepsia',
                    'Enfermedad de Charcot-Marie-Tooth',
                    'Y más'
                ]
            ],
            [
                'title' => 'Enfermedades raras',
                'icon' => 'icons-120-px-outline-dsm-chromosome-o-m-green.svg',
                'list' => [
                    'Enfermedades autoinmunes',
                    'Enfermedades del tejido conectivo',
                    'Enfermedades endocrinas',
                    'Enfermedades del sistema inmunológico',
                    'Enfermedades renales',
                    'Fibrosis quística',
                    'Y más'
                ]
            ],
            [
                'title' => 'Afecciones pediátricas',
                'icon' => 'icons-120-px-outline-dsm-pediatrics-o-m-yellow.svg',
                'list' => [
                    'Epilepsia',
                    'Retraso en el desarrollo',
                    'Crecimiento excesivo',
                    'Trastornos respiratorios tempranos',
                    'Defectos cardíacos estructurales',
                    'Defectos congénitos múltiples',
                    'Cánceres de inicio en la infancia',
                    'Y más'
                ]
            ]
        ];
    @endphp

    <div class="w-full bg-gray-100">
        <div class="container py-8">
            <div class="w-full text-center flex flex-col gap-4">
                <p class="font-bold text-3xl">Invitae ofrece pruebas para una variedad de problemas de salud</p>
                <p class="text-xl">Cada uno viene con los siguientes pasos claros, para que usted y su médico puedan tomar decisiones personalizadas para su cuerpo.</p>
            </div>

            @include('partials.steps', ['steps' => $steps])
        </div>
    </div>

    @include('partials.image-container', [
        'title' => 'Las pruebas genéticas pueden proporcionar información de salud esencial y pueden mejorar los resultados al:',
        'image' => '/images/27_Jasmine_Tiffany_Jaylee_6575_withblob_3x.webp',
        'reverse' => true,
        'items' => [
            'Encontrar un diagnóstico médico para síntomas inexplicables. Cuanto antes tenga un diagnóstico confirmado, antes podrá tomar el control',
            'Descubrir mejores opciones de tratamiento (y evitar las innecesarias). Conozca qué medicamentos y procedimientos pueden ser más efectivos, sin ensayo y error',
            'Reducir o eliminar la necesidad de pruebas más invasivas. Las pruebas genéticas son simples y, a menudo, se pueden hacer en una muestra de saliva',
            'Identificar a los miembros de la familia que también pueden estar en riesgo. Las pruebas a los miembros de la familia pueden desbloquear pasos preventivos que los ayudan a mantenerse saludables'
        ]
    ])

    @php
        $stories = [
            [
                'quote' => 'Naya es una niña tan feliz. Ahora podemos aceptar dónde estamos y no preocuparnos por cuándo se pondrá al día. Ahora podemos avanzar.',
                'author' => 'Naya - Viviendo con SynGAP',
                'img' => 'Naya-Edouard_Sick_Journey_carousel_slide-1_option1.webp'
            ],
            [
                'quote' => 'Incluso si crees que conoces tu diagnóstico, porque caminas como tu padre y tu tío John, puede haber un valor real en que ese diagnóstico se confirme a través de pruebas.',
                'author' => 'Betania',
                'img' => 'Bethany_Sick_Journey_carousel_slide-2.webp'
            ]
        ];
    @endphp
    <div class="w-full bg-gray-100">
        <div class="container py-16 flex flex-col gap-4">
            <p class="font-bold text-3xl text-center">Encontraron respuestas a través de pruebas genéticas. Tú también podrías.</p>
        </div>
        <div>
            <vue-carousel :items='@json($stories)'/>
        </div>
    </div>

    @php
        $steps = [
            [
                'title' => 'Pruebas exhaustivas',
                'icon' => 'icon-computer-select-test.svg',
                'description' => 'Invitae ofrece más de 50 pruebas exhaustivas, cada una de las cuales incluye genes relevantes para un tipo específico de cáncer.',
            ],
            [
                'title' => 'Borrar los siguientes pasos',
                'icon' => 'icons-80-px-outline-dsm-checkmark-o-m-yellow.svg',
                'description' => 'Los resultados de Invitae vienen con los siguientes pasos claros, para que usted y su médico puedan tomar medidas basadas en su genética.',
            ],
            [
                'title' => 'Acceso a expertos en genética',
                'icon' => 'icons-80-px-outline-dsm-gc-o-m-green-2-color.svg',
                'description' => 'Los expertos están disponibles por teléfono para responder preguntas. Una vez que tenga resultados, también puede programar una sesión completa de asesoramiento genético sin cargo adicional.',
            ]
        ];
    @endphp

    <div class="container py-8">
        <div class="w-full text-center flex flex-col gap-4">
            <p class="font-bold text-3xl">¿Qué está incluido?</p>
            <p>Cuando solicitas una prueba genética invitae, obtienes:</p>
        </div>

        @include('partials.steps', ['steps' => $steps])
    </div>
@endsection