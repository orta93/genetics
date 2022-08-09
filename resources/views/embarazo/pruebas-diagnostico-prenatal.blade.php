@extends('layout')

@section('content')
    @include('partials.landing', [
        'title' => 'Prepárese con pruebas de diagnóstico prenatal',
    ])

    <div class="w-full bg-gray-100">
        <div class="container flex flex-col gap-4 py-12">
            <div class="font-bold text-2xl">Obtenga respuestas sobre su embarazo</div>
            <div class="flex flex-col gap-2">
                <div>Si una prueba anterior muestra una preocupación, averigüe si su bebé en desarrollo tiene una afección causada por cambios en sus cromosomas, antes de dar a luz. A diferencia de una prueba de detección que evalúa el nivel de riesgo, las pruebas de diagnóstico prenatal ofrecen respuestas definitivas.</div>
            </div>
        </div>
    </div>

    @php
        $steps = [
            [
                'title' => '¿Qué son las condiciones cromosómicas?',
                'icon' => 'Size_80px__4_.svg',
                'description' => 'Los cromosomas contienen instrucciones para que el cuerpo lo ayude a desarrollarse y crecer. Si hay un cambio en la cantidad, el tamaño o la estructura de los cromosomas de su bebé, puede afectar el crecimiento, el desarrollo o la capacidad de funcionamiento de los sistemas del cuerpo de su bebé.',
            ],
            [
                'title' => '¿Cómo se desarrollan?',
                'icon' => 'icons-120-px-outline-dsm-question0mar-o-m-green.svg',
                'description' => 'Los cambios cromosómicos suelen ser espontáneos y ocurren cuando se forman los óvulos o los espermatozoides durante la concepción. A veces, sin embargo, los cambios cromosómicos se heredan de uno o ambos padres.',
            ]
        ];
    @endphp

    {{--<div class="container py-8">
        @include('partials.steps', ['steps' => $steps])
    </div>--}}

    @include('partials.landing', [
        'title' => 'El Colegio Estadounidense de Obstetras y Ginecólogos (ACOG, por sus siglas en inglés) recomienda que a todas las mujeres, independientemente de su edad, se les ofrezcan exámenes de detección y/o pruebas de diagnóstico para detectar afecciones cromosómicas durante el embarazo.',
        'image' => '/images/37_May_9582_5x.webp',
        'bg' => 'bg-blue-landing',
        'size' => 3,
        'bgPosition' => 'bg-left-top',
        'self' => 'self-end',
        'color' => 'text-white',
        'resize' => true,
    ])

    @php
        $steps_title = [
            [
                'title' => 'Análisis FISH rápido',
                'icon' => 'icons-80-px-outline-dsm-fish-o-m-green.svg',
                'description' => 'La hibridación in situ con fluorescencia (también conocida como FISH) es una prueba que ofrece una respuesta rápida sobre cuántas copias de varios cromosomas específicos tiene su bebé, incluidos los cromosomas 13, 18, 21, X e Y. Esta prueba generalmente es seguida por una prueba más completa, como cariotipo o análisis de micromatrices.',
            ],
            [
                'title' => 'Análisis de micromatrices',
                'icon' => 'icons-80-px-outline-dsm-chromosome-o-m-green.svg',
                'description' => 'El análisis de micromatrices cuenta la cantidad de cromosomas que están presentes y si hay piezas adicionales o faltantes. Esta prueba también puede detectar pequeños cambios (llamados microdeleciones y microduplicaciones).',
            ],
            [
                'title' => 'Análisis de cariotipo',
                'icon' => 'Size_80px__11_.svg',
                'description' => 'Esta prueba analiza la estructura cromosómica general de su bebé para ver si hay alguna anomalía, como cromosomas adicionales o faltantes. Puede detectar grandes cambios cromosómicos, pero no microdeleciones ni microduplicaciones.',
            ]
        ];
    @endphp

    {{--<div class="w-full bg-gray-100">
        <div class="container py-12">
            <div class="w-full text-center flex flex-col gap-4">
                <p class="font-bold text-3xl">Una opción para cada embarazo</p>
                <p class="text-xl">{{ env('APP_NAME') }} ofrece varios tipos de pruebas de diagnóstico prenatal. Su médico puede recomendarle una o varias de estas opciones según su situación personal.</p>
            </div>
            @include('partials.steps', ['steps' => $steps_title])
        </div>
    </div>--}}

    @include('partials.image-container', [
        'title' => '¿Cómo funciona la prueba?',
        'image' => '/images/box-angle-polo.png',
        'items' => [
            'Su proveedor de atención médica recolectará una pequeña muestra de las células de su bebé en desarrollo para analizar sus cromosomas. Las muestras se pueden recolectar de una de dos maneras:',
            'La muestra de vellosidades coriónicas (CVS, por sus siglas en inglés) es un procedimiento del primer trimestre que recolecta células de la placenta mediante un tubo de plástico delgado que se inserta a través del cuello uterino o una aguja delgada que se inserta en el abdomen (se usa un ultrasonido para guiar la aguja de manera segura).',
            'La amniocentesis es un procedimiento del segundo trimestre que recolecta una pequeña muestra de líquido amniótico usando una aguja delgada que se inserta en su abdomen (se usa un ultrasonido para guiar la aguja de manera segura).',
            'Después de que '.env('APP_NAME').' analice su muestra, su proveedor de atención médica recibirá un informe que detalla la composición cromosómica de su bebé. Discuta los resultados con su proveedor para comprender las implicaciones.'
        ]
    ])

    <div class="w-full bg-gray-200">
        <div class="container flex flex-col gap-4 py-12">
            <div class="font-bold text-2xl">¿Cuáles son los resultados potenciales?</div>
            <div class="flex flex-col gap-2">
                <div>Para muchas personas, las pruebas de detección revelan que el riesgo de que su bebé tenga una afección cromosómica es bajo. Debido a que los niños y las niñas tienen un ADN diferente, la prueba también puede indicarle el sexo de su bebé, pero se lo diremos solo si desea saberlo.</div>
                <div>Si sus resultados indican un riesgo elevado de una afección cromosómica, su proveedor de atención médica realizará un seguimiento con pruebas de diagnóstico prenatal para confirmarlo. Si esa prueba de diagnóstico también da positivo, es posible que tenga opciones, incluido el tratamiento temprano y/o las opciones de parto para mejorar la salud del bebé. La prueba con {{ env('APP_NAME') }} incluye una sesión integral posterior a la prueba con un asesor genético, que puede responder cualquier pregunta que tenga sobre sus resultados y los próximos pasos.</div>
            </div>
        </div>
    </div>

    @include('partials.image-container', [
        'title' => 'No tienes que resolverlo solo',
        'image' => '/images/16-ricarda-talia-lupe-3089-1_3x.webp',
        'items' => [
            'Los expertos en genética de '.env('APP_NAME').' están disponibles para guiarlo a través del proceso de prueba, ayudarlo a comprender sus resultados y planificar el camino a seguir.'
        ]
    ])
@endsection