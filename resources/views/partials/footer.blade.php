<div class="w-full bg-blue-primary text-white">
    <div class="container py-16">
        <div class="flex flex-col gap-16">
            <div class="w-full md:w-1/2 flex flex-col gap-4">
                <div class="logo"><img src="{{ asset('images/logo-vector.png') }}" class="h-20"/></div>
                <div class="w-full md:w-2/3 text-sm">
                    Para más información o dudas acerca de nuestros servicios, nos ponemos a su disposición de Lunes a Domingo de 8:00 a 16:00 horas en los siguientes medios de contacto.
                </div>
            </div>
            <div class="w-full md:w-1/2 flex flex-col md:flex-row gap-12">
                <div class="flex flex-col">
                    <div class="font-bold">NUEVO LEÓN</div>
                    <div class="flex gap-2">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                            </svg>
                        </div>
                        <div><a href="tel:8124744933">812 474 4933</a></div>
                    </div>
                    <div class="flex gap-2">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                        </div>
                        <div><a href="mailto:contacto@mavelsa.com">contacto@mavelsa.com</a></div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="font-bold">QUINTANA ROO</div>
                    <div class="flex gap-2">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                            </svg>
                        </div>
                        <div><a href="tel:9984784558">998 478 4558</a></div>
                    </div>
                    <div class="flex gap-2">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                        </div>
                        <div><a href="mailto:contacto@mavelsa.com">contacto@mavelsa.com</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex w-full md:hidden my-8">
            @include('partials.networks')
        </div>

        <div class="w-full text-sm my-8">
            © {{ date('Y') }} {{ env('APP_NAME') }}. Reservados todos los derechos.
        </div>
    </div>
</div>