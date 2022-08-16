@if(env('WHATSAPP_NUMBER'))
<div style="position: fixed; bottom: 20px; right: 20px; cursor: pointer; z-index: 99999999;">
    <a class="hidden md:flex" href="https://web.whatsapp.com/send?phone={{ env('WHATSAPP_NUMBER') }}&text=" target="_blank">
        <div>
            <div style="display:flex;justify-content: center;align-items: center;background-color:#e4e4e4;color:#222222;padding:0 12px;border-radius:25px;font-size:13px;line-height:32px;">
                <span style="margin:0 8px 0 -12px;;order:0;">
                    <img src="/images/whatsapp.svg"/>
                </span>
                <span>WhatsApp</span>
            </div>
        </div>
    </a>
    <a class="flex md:hidden" href="https://wa.me/{{ env('WHATSAPP_NUMBER') }}" target="_blank">
        <div>
            <div style="display:flex;justify-content: center;align-items: center;background-color:#e4e4e4;color:#222222;padding:0 12px;border-radius:25px;font-size:13px;line-height:32px;">
                <span style="margin:0 8px 0 -12px;;order:0;">
                    <img src="/images/whatsapp.svg"/>
                </span>
                <span>WhatsApp</span>
            </div>
        </div>
    </a>
</div>
@endif

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
                    {{--<div class="flex gap-2">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                            </svg>
                        </div>
                        <div><a href="tel:8124744933">812 474 4933</a></div>
                    </div>--}}
                    <div class="flex gap-2">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                        </div>
                        <div><a href="mailto:recepcion@mavelsagenetics.com">recepcion@mavelsagenetics.com</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex w-full my-8">
            @include('partials.networks')
        </div>

        <div class="w-full text-sm my-8">
            © {{ date('Y') }} {{ env('APP_NAME') }}. Reservados todos los derechos.
        </div>
    </div>
</div>