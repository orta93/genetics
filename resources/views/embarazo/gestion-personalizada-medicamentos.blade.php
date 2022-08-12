@extends('layout')

@section('content')
    @include('partials.landing', [
        'title' => 'Gestión personalizada de la medicación',
    ])

    <div class="container flex flex-col gap-4 py-12">
        <div class="font-bold text-2xl">Cuando se trata de medicamentos, una talla no sirve para todos</div>
        <div class="flex flex-col gap-2">
            <div class="">¿Alguna vez le han recetado un medicamento que tuvo efectos secundarios imprevistos o simplemente ningún beneficio en absoluto? Si es así, no estás solo. Las pruebas genéticas de medicamentos personalizadas, también conocidas como pruebas farmacogenómicas (PGx), pueden ayudar a su médico a determinar qué medicamentos y dosis son adecuados para usted.</div>
        </div>
    </div>

    @include('partials.image-container', [
        'title' => 'Aproximadamente el 99% de las personas tienen variaciones genéticas que pueden hacer que no puedan procesar ciertos medicamentos de la manera prevista.',
        'title_size' => 'text-3xl',
        'image' => '/images/99_.png'
    ])

    <div class="w-full bg-gray-100">
        @include('partials.image-container', [
            'title' => 'Ahora hay una manera de verificar, antes de tomar una sola dosis',
            'items' => ['Las pruebas farmacogenómicas analizan sus genes para comprender cómo su cuerpo metaboliza muchos medicamentos comúnmente recetados. Sus resultados genéticos únicos pueden ayudar a un médico a seleccionar un medicamento y una dosis que sean seguros y efectivos para usted.'],
            'image' => '/images/Personalized_prescribing_Final.svg',
            'reverse' => true
        ])
    </div>

    @include('partials.image-container', [
        'title' => 'Aproveche al máximo sus medicamentos y ayude a reducir los efectos secundarios',
        'items' => ['Su proveedor de pedidos recibirá un informe completo que contiene los resultados de su laboratorio genético junto con un informe de prescripción personalizado que verifica sus medicamentos actuales en busca de posibles interacciones fármaco-fármaco, fármaco-gen o fármaco-fármaco-gen.'],
        'image' => '/images/APROVECHE.png'
    ])

    @include('partials.steps_alt')

    <div class="container py-12 flex flex-col md:flex-row gap-x-16 gap-y-4">
        <div class="w-full flex flex-col gap-2">
            <div class="font-bold text-xl">¿Cuáles son algunos resultados posibles de una prueba de farmacogenómica?</div>
            <div>Su cuerpo utiliza enzimas para metabolizar los medicamentos. Dependiendo de su genética, algunas de sus enzimas pueden procesar ciertos medicamentos más rápido o más lento que la persona promedio, lo que hace que responda a un medicamento de manera diferente a lo esperado. Esto podría ser en forma de una reacción adversa y/o una reducción de la eficacia del fármaco. Por ejemplo, usted puede ser un metabolizador normal de una enzima metabolizadora de fármacos, pero un metabolizador rápido de otra.</div>
            <div class="font-bold">Algunos resultados posibles</div>
            <div>
                <p><span class="font-bold">Intermedio o pobre:​</span> ​los metabolizadores intermedios y lentos tienen una actividad enzimática disminuida. Dependiendo del gen, puede experimentar una respuesta exagerada a ciertos medicamentos afectados por la enzima.</p>

                <p><span class="font-bold">Normal:</span> Los metabolizadores normales tienen una actividad enzimática normal. Dependiendo del gen, esto significa que es poco probable que sus genes interfieran con el metabolismo típico de los medicamentos.</p>

                <p><span class="font-bold">Rápido o ultrarrápido:</span> los metabolizadores rápidos y ultrarrápidos tienen una mayor actividad enzimática. Según el gen, es posible que experimente respuestas exageradas a ciertos medicamentos afectados por la enzima.</p>

                <p class="font-bold">Su médico o farmacéutico puede decirle cuál de sus medicamentos actuales o potenciales podría verse afectado por cada estado.</p>
            </div>
        </div>
        <div class="w-full flex flex-col gap-2">
            <div class="font-bold text-xl">Siguientes pasos</div>
            <div>
                <p>Comparta sus resultados con su médico o farmacéutico.</p>
                <p>Pueden usar esta información en:</p>

                <ul class="list-disc">
                    <li>elegir un medicamento que tenga más probabilidades de funcionar</li>
                    <li>evitar los medicamentos que pueden causar efectos secundarios</li>
                    <li>ajustar la dosis de un fármaco</li>
                    <li>determinar si se necesita un control más estricto del efecto del fármaco</li>
                </ul>
            </div>
        </div>
    </div>
@endsection