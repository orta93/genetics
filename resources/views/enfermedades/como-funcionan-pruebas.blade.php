@extends('layout')

@section('content')
    <div class="container text-5xl font-bold my-8">Cómo funcionan las pruebas genéticas</div>

    <div class="w-full bg-gray-100">
        <div class="container flex flex-col gap-4 py-12">
            <div class="font-bold text-2xl">¿Listo para dar el siguiente paso, pero no sabes por dónde empezar?</div>
            <div class="flex flex-col gap-2">
                <div class="text-xl">No hay necesidad de salir de la casa para una prueba: obtener su información genética comienza y se mantiene dentro de la comodidad y seguridad del hogar. Y, si tiene alguna pregunta en el camino, nuestros asesores genéticos certificados por la junta están más que felices de ayudarlo.</div>
            </div>
        </div>
    </div>

    @php
        $mouse_options = [
            [
                'title' => 'Paso 1: Solicitar una prueba',
                'content' => [
                    'Solicite su prueba en línea y lo conectaremos con un médico de telesalud que puede ordenar la prueba adecuada para usted.',
                    'Si lo prefiere, su médico puede ordenar su prueba.'
                ]
            ],
            [
                'title' => 'Paso 2: Haz tu prueba',
                'content' => [
                    'Recibirás un kit de recolección de saliva por correo.',
                    'Simplemente proporcione una muestra de saliva y envíela por correo al laboratorio de Invitae en San Francisco.',
                    'También ofrecemos muestras de hisopos de mejillas para niños y otras personas que lo necesitan.'
                ]
            ],
            [
                'title' => 'Paso 3: Revisa tus resultados',
                'content' => [
                    'Si comenzó su pedido en línea, recibirá un mensaje de texto y un correo electrónico cuando sus resultados estén listos.',
                    'Inicie sesión en el portal de Invitae para ver sus resultados, incluidos los siguientes pasos recomendados',
                    'Puede discutir los resultados con un asesor genético y compartirlos directamente con su equipo de atención médica para incorporarlos a su plan de tratamiento.',
                    'Si su médico ordenó la prueba, recibirán sus resultados y usted puede trabajar juntos para incorporarlos a su plan de tratamiento.'
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
            'Tienes mucho en mente, y lo último de lo que debes preocuparte es de otro gasto médico. Es por eso que hemos priorizado hacer que nuestras pruebas genéticas sean asequibles.',
            'Pruebas genéticas Invitae',
            'La mayoría de nuestras pruebas están cubiertas por el seguro. El costo promedio de bolsillo para una prueba Invitae es inferior a $ 100',
            'Si no usa su seguro, nuestro precio de autopago es de $ 250',
            'Visita virtual de atención médica',
            'Si solicita una prueba a través de nuestro sitio web, Invitae lo conectará con un proveedor de Genome Medical, quien realizará su pedido.',
            'El costo típico de bolsillo para los servicios de Genome Medical es de $ 50',
            'Si no está asegurado, el cargo de Genome Medical es de $125'
        ]
    ])

    <div class="bg-gray-100">
        @include('partials.image-container', [
            'title' => 'Su privacidad es importante para nosotros',
            'image' => '/images/12-jessica-1675_3x.webp',
            'reverse' => true,
            'items' => [
                'Nos tomamos en serio la privacidad; uno de nuestros principios básicos es que los pacientes poseen y controlan sus datos genéticos. Puede iniciar sesión en su cuenta de Invitae en cualquier momento para establecer sus preferencias y controlar cómo se utilizan sus datos.',
                '¿Quieres saber sobre las oportunidades de investigación relacionadas con tus resultados? Te tenemos. ¿Prefieres no hacerlo? Tú también puedes tener eso.'
            ]
        ])
    </div>
@endsection