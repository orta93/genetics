@extends('layout')

@section('content')
    <div class="container my-8 flex flex-col gap-6">
        <div class="text-5xl font-bold">Saber más comienza aquí</div>
        <div class="">
            <p>Con una prueba {{ env('APP_NAME') }}, obtienes una imagen más completa de tu salud, de adentro hacia afuera.</p>
            <p>Ese es un paso para tomar decisiones más saludables. Pero no lo sabrá hasta que lo pruebe.</p>
        </div>
    </div>

    @php
        $options = [
            [
                'title' => env('APP_NAME').' Detección de Cáncer',
                'icon' => 'BOX_KIT_BG.PNG',
                'bgColor' => 'bg-green-300',
                'description' => 'Analiza 61 genes asociados con cánceres comunes, incluidos el cáncer de mama, ovario y próstata.'
            ],
            [
                'title' => env('APP_NAME').' Cardio Screening',
                'icon' => 'BOX_KIT_BG.PNG',
                'bgColor' => 'bg-pink-900',
                'description' => 'Analiza más de 75 genes asociados con formas genéticas de enfermedad cardíaca, incluido el agrandamiento del corazón, el ritmo cardíaco anormal y el colesterol alto.'
            ],
            [
                'title' => 'Examen de salud genética de '.env('APP_NAME'),
                'icon' => 'BOX_KIT_BG.PNG',
                'bgColor' => 'bg-indigo-500',
                'description' => 'Analiza hasta 147 genes, incluidos todos los genes en las pruebas de detección de cáncer y cardio, así como algunas afecciones hereditarias procesables.'
            ],
            [
                'title' => 'Panel de Farmacogenómica de '.env('APP_NAME'),
                'icon' => 'BOX_KIT_BG.PNG',
                'bgColor' => 'bg-green-800',
                'description' => 'Pruebe 38 genes para evaluar cómo sus genes afectan su respuesta a los medicamentos.'
            ]
        ];
    @endphp

    <div class="container py-12">
        <div class="w-full text-center flex flex-col gap-4">
            <p class="font-bold text-3xl">Encuentre la prueba adecuada para usted</p>
        </div>

        @include('partials.cards', ['cards' => $options])
    </div>

    @php
        $steps = [
            [
                'title' => 'Hasta 147 genes',
                'icon' => 'icons-80-px-outline-dsm-chromosome-o-m-green.svg',
                'description' => 'Otras compañías de genética prueban menos de 10 genes. Las pruebas más completas de '.env('APP_NAME').' significan que es más probable que obtenga respuestas.',
            ],
            [
                'title' => 'Borrar los siguientes pasos',
                'icon' => 'icons-80-px-outline-dsm-checkmark-o-m-yellow.svg',
                'description' => 'Las pruebas de '.env('APP_NAME').' se centran en afecciones que pueden prevenirse o tratarse si se descubren a tiempo, para que pueda tomar medidas en función de sus resultados.',
            ],
            [
                'title' => 'Acceso directo a expertos en genética',
                'icon' => 'icons-80-px-outline-dsm-gc-o-m-green.svg',
                'description' => 'Los expertos están disponibles por teléfono para responder preguntas. Una vez que tenga resultados, programe una sesión completa de asesoramiento genético.',
            ]
        ];
    @endphp

    <div class="w-full bg-gray-100">
        <div class="container py-8">
            <div class="w-full text-center flex flex-col gap-4">
                <p class="font-bold text-3xl">¿Qué está incluido?</p>
                <p class="text-xl">Cuando solicitas esta prueba genética {{ env('APP_NAME') }}, obtienes:</p>
            </div>

            @include('partials.steps', ['steps' => $steps])
        </div>
    </div>

    <div class="container py-12 flex flex-col gap-8">
        <div class="font-bold text-xl">¿Cuáles son los resultados potenciales de un examen de salud cardiovascular, oncológico o genético?</div>
        <div class="flex flex-col md:flex-row gap-x-16 gap-y-4">
            <div>
                <span class="font-bold">Positivo:</span> Un resultado positivo de la prueba generalmente significa que su genética le da un riesgo más alto que el promedio de desarrollar una afección específica. Recuerde, esto no garantiza que obtendrá la condición. Significa que ahora puede trabajar con su médico para abordar proactivamente la afección o detectarla temprano, cuando podría ser más tratable.
            </div>
            <div>
                <span class="font-bold">Negativo:</span> Un resultado negativo generalmente significa que no identificamos ningún cambio en sus genes que pudiera aumentar su riesgo de desarrollar una determinada enfermedad o trastorno. Esto significa que debe continuar con las recomendaciones de su médico, como comer bien, hacer ejercicio e ir a todas sus citas.
            </div>
        </div>
    </div>

    <div class="container py-12 flex flex-col md:flex-row gap-x-16 gap-y-4">
        <div class="w-full flex flex-col gap-2">
            <div class="font-bold text-xl">¿Cuáles son algunos de los posibles resultados de una prueba de farmacogenómica?</div>
            <div>Su cuerpo utiliza enzimas para metabolizar los medicamentos. Dependiendo de su genética, algunas de sus enzimas pueden procesar ciertos medicamentos más rápido o más lento que la persona promedio, lo que hace que responda a un medicamento de manera diferente a lo esperado. Esto podría ser en forma de una reacción adversa y / o una reducción de la eficacia del medicamento. Por ejemplo, usted puede ser un metabolizador normal para una enzima metabolizadora de fármacos, pero un metabolizador rápido para otra.</div>
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