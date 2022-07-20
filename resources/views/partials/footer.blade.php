<div class="w-full bg-blue-primary text-white">
    <div class="container py-16">
        <div class="flex flex-col md:flex-row gap-16">
            <div class="w-full md:w-1/2 flex flex-col gap-4">
                <div class="logo"><img src="{{ asset('images/logo-vector.png') }}" class="h-20"/></div>
                <div class="w-full md:w-2/3 text-sm">
                    La misión de Mavelsa Genetics es traer información genética integral a la medicina convencional para mejorar la atención médica de miles de millones de personas.
                </div>
                <div class="hidden md:flex">
                    @include('partials.networks')
                </div>
            </div>
            <div class="w-full md:w-1/2 grid grid-cols-2 sm:grid-cols-3 gap-4">
                <div class="flex flex-col gap-2">
                    <div class="font-bold">Compañia</div>
                    <a href="#" class="text-white hover:underline hover:text-red-primary">Acerca de</a>
                    <a href="#" class="text-white hover:underline hover:text-red-primary">Carreras</a>
                    <a href="#" class="text-white hover:underline hover:text-red-primary">Noticias</a>
                    <a href="#" class="text-white hover:underline hover:text-red-primary">Inversores</a>
                    <a href="#" class="text-white hover:underline hover:text-red-primary">Contacto</a>
                </div>
                <div class="flex flex-col gap-2">
                    <div class="font-bold">Productos</div>
                    <a href="#" class="text-white hover:underline hover:text-red-primary">Oncología</a>
                    <a href="#" class="text-white hover:underline hover:text-red-primary">Salud Reproductiva</a>
                    <a href="#" class="text-white hover:underline hover:text-red-primary">Pediatría</a>
                    <a href="#" class="text-white hover:underline hover:text-red-primary">Cardiología</a>
                    <a href="#" class="text-white hover:underline hover:text-red-primary">Patología</a>
                </div>
                <div class="flex flex-col gap-2">
                    <div class="font-bold">Colabora con nosotros</div>
                    <a href="#" class="text-white hover:underline hover:text-red-primary">Biofarmaciaad</a>
                    <a href="#" class="text-white hover:underline hover:text-red-primary">Abogacía</a>
                    <a href="#" class="text-white hover:underline hover:text-red-primary">Empleados</a>
                    <a href="#" class="text-white hover:underline hover:text-red-primary">Colaboraciones</a>
                    <a href="#" class="text-white hover:underline hover:text-red-primary">Sistemas de Salud</a>
                </div>
            </div>
        </div>

        <div class="flex w-full md:hidden my-8">
            @include('partials.networks')
        </div>

        <div class="w-full text-sm my-8">
            © {{ date('Y') }} {{ env('APP_NAME') }}. Reservados todos los derechos. A menos que se especifique lo contrario, todos los nombres de productos, nombres de servicios y logotipos que aparecen en este sitio web son marcas comerciales propiedad de {{ env('APP_NAME') }}, sus subsidiarias o sus afiliados, o sus licencias les pertenecen. No se puede utilizar ninguna marca comercial, nombre comercial o imagen comercial de {{ env('APP_NAME') }} en este sitio web sin la autorización previa por escrito de {{ env('APP_NAME') }}, excepto para identificar los productos o servicios de {{ env('APP_NAME') }}.
        </div>
    </div>
</div>