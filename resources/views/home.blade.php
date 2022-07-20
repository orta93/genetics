@extends('layout')

@section('content')
    <div class="w-full h-60 md:h-96 bg-right bg-cover" style="background-image: url('/images/hero-large.webp')">
        <div class="container hidden md:flex h-full justify-center flex-col gap-8 text-black-primary py-8">
            <div class="w-1/2 font-bold text-4xl">Tu salud comienza en tus genes.</div>
            <div class="w-1/2">{{ env('APP_NAME') }} facilita el acceso a su información genética única, para que pueda tomar el control de su salud.</div>
            <div>
                <a href="#" class="btn">Saber mas</a>
            </div>
        </div>
    </div>
    <div class="flex md:hidden justify-center py-8 container flex flex-col gap-8">
        <div class="font-bold text-4xl">Tu salud comienza en tus genes.</div>
        <div>{{ env('APP_NAME') }} facilita el acceso a su información genética única, para que pueda tomar el control de su salud.</div>
        <div>
            <a href="#" class="btn">Saber mas</a>
        </div>
    </div>

    @php
        $plans = [
            [
                'title' => 'Embarazo',
                'icon' => 'icon-pregnancy-duotone.svg',
                'description' => 'Obtenga información útil para guiar decisiones de salud importantes antes y durante el embarazo.',
                'link' => '#'
            ],
            [
                'title' => 'Mantenerse saludable',
                'icon' => 'Size_80px__17_.svg',
                'description' => 'Obtenga lo que necesita para desarrollar un plan de salud personalizado para enfermedades cardíacas, cáncer y más.',
                'link' => '#'
            ],
            [
                'title' => 'Cancer',
                'icon' => 'icon-financial-assistance-duotone.svg',
                'description' => 'Comprenda sus genes para que usted y su médico puedan encontrar los tratamientos más efectivos.',
                'link' => '#'
            ],
            [
                'title' => 'Enfermedades Genéticas',
                'icon' => 'Size_80px__5_.svg',
                'description' => 'Encuentre un diagnóstico o comprenda si una afección es hereditaria para que pueda concentrarse en el tratamiento adecuado.',
                'link' => '#'
            ]
        ];
    @endphp

    <div class="container py-8">
        <div class="w-full text-center flex flex-col gap-4">
            <p class="font-bold text-3xl">Construya su plan para una mejor salud.</p>
            <p class="font-light">¿Tiene una pregunta de salud? Tenemos una prueba para ti.</p>
        </div>

        <div class="flex flex-col md:flex-row gap-6 mt-12">
            @foreach($plans as $plan)
                <a href="{{ $plan['link'] }}" class="flex flex-col sm:flex-row md:flex-col gap-2 w-full border cursor-pointer rounded-md shadow-lg hover:shadow-2xl p-5">
                    <div class="w-full sm:w-1/3 md:w-full text-center py-0 md:py-6">
                        <img src="/icons/{{ $plan['icon'] }}" class="mx-auto">
                    </div>
                    <div class="w-full sm:w-2/3 md:w-full text-center sm:text-left md:text-center">
                        <p class="font-bold text-lg mb-2">{{ $plan['title'] }}</p>
                        <p class="font-light">{{ $plan['description'] }}</p>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="w-full text-center my-12 font-bold text-xl">
            ¿Eres un proveedor de atención médica? Visite nuestro sitio de <a href="#" class="text-blue-primary font-bold">proveedores</a> para obtener más información.
        </div>
    </div>
@endsection