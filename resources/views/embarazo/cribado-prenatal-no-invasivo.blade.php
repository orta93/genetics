@extends('layout')

@section('content')
    @include('partials.landing', [
        'title' => 'Obtenga información valiosa con exámenes prenatales no invasivos',
    ])

    <div class="container flex flex-col gap-4 py-12">
        <div class="font-bold text-2xl">Parte de su plan para un embarazo saludable</div>
        <div class="flex flex-col gap-2">
            <div class="">Desde vitaminas prenatales hasta yoga prenatal, está haciendo todo lo posible para asegurarse de que su bebé esté saludable. El examen prenatal no invasivo (NIPS, por sus siglas en inglés) es otra parte importante de un embarazo saludable; además, puede predecir el sexo de su bebé a las 10 semanas.</div>
        </div>
    </div>

    @include('partials.image-container', [
        'title' => 'Una parte importante de la atención del embarazo.',
        'items' => [
            'La evaluación prenatal no invasiva se realiza mediante una simple extracción de sangre y controles para ver la posibilidad de que su bebé se vea afectado por ciertas condiciones cromosómicas, incluido el síndrome de Down.',
            'Estas condiciones se deben a material genético adicional o faltante llamado cromosomas, lo que puede conducir a una condición médica. Las pruebas también pueden predecir el sexo de su bebé (si desea saberlo).'
        ],
        'image' => '/images/13-akilah-2860_3x.webp',
        'reverse' => true
    ])

    @include('partials.landing', [
        'title' => 'La principal organización de obstetricia y ginecología, el Colegio Estadounidense de Obstetras y Ginecólogos, recomienda ofrecer pruebas de detección de aneuploidías, que incluyen pruebas de detección prenatales no invasivas, a todas las mujeres, independientemente de la edad materna.',
        'image' => '/images/16-ricarda-talia-lupe-3089-1_3x.webp',
        'bg' => 'bg-blue-landing',
        'size' => 3,
        'bgPosition' => 'bg-right-top',
        'color' => 'text-white',
        'resize' => true,
    ])

    @include('partials.image-container', [
        'title' => '¿Cómo funciona?',
        'items' => [
            'NIPS es una prueba de detección ordenada por su proveedor de atención médica y no requiere nada más que una extracción de sangre regular. Esta prueba no tiene un mayor riesgo de aborto espontáneo y los resultados generalmente están disponibles de 5 a 7 días después de que su muestra llega al laboratorio de '.env('APP_NAME').' en San Francisco.',
            '¿Embarazada de gemelos? '.env('APP_NAME').' NIPS se puede realizar tanto en embarazos de feto único como de gemelos*, así como en personas que concibieron mediante FIV, una donante de óvulos o aquellas que utilizan una portadora gestacional.'
        ],
        'image' => '/images/26-chantelle-6313-1_3x.webp',
        'reverse' => true
    ])

    <div class="w-full bg-gray-100">
        <div class="container flex flex-col gap-4 py-12">
            <div class="font-bold text-2xl">Considere la detección conjunta de CPNI y portadores</div>
            <div class="flex flex-col gap-4">
                <div>No puede eliminar la incertidumbre en el embarazo, pero con NIPS y detección de portadores puede acercarse. Marque la diferencia en su viaje de embarazo con pruebas genéticas.</div>
                <div><a href="{{ route('cribado-de-portadores') }}" class="btn">Ver mas</a></div>
            </div>
        </div>
    </div>

    <div class="w-full bg-gray-200">
        <div class="container flex flex-col gap-4 py-12">
            <div class="font-bold text-2xl">¿Cuáles son los resultados potenciales?</div>
            <div class="flex flex-col gap-2">
                <div>Para muchas personas, las pruebas de detección revelan que el riesgo de que su bebé tenga una afección cromosómica es bajo. Debido a que los niños y las niñas tienen un ADN diferente, la prueba también puede indicarle el sexo de su bebé, pero se lo diremos solo si desea saberlo.</div>
                <div>Si sus resultados indican un riesgo elevado de una afección cromosómica, su proveedor de atención médica realizará un seguimiento con pruebas de diagnóstico prenatal para confirmarlo. Si esa prueba de diagnóstico también da positivo, es posible que tenga opciones, incluido el tratamiento temprano y/o las opciones de parto para mejorar la salud del bebé.</div>
                <div>La prueba con {{ env('APP_NAME') }} incluye una sesión integral posterior a la prueba con un asesor genético, que puede responder cualquier pregunta que tenga sobre sus resultados y los próximos pasos.</div>
            </div>
        </div>
    </div>

    @include('partials.image-container', [
        'title' => '¿Dudas sobre el costo?',
        'image' => '/images/box-angle-polo.webp',
        'items' => [
            'La información genética es importante para cada embarazo. Es por eso que hicimos nuestras pruebas NIPS más asequibles que muchas otras compañías. Si su plan de seguro no lo cubre (o no tiene seguro), '.env('APP_NAME').' ofrece un precio reducido de pago por cuenta propia. También puede usar su HSA/FSA.'
        ],
        'reverse' => true
    ])
@endsection