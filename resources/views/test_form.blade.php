<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-white text-black-primary">
    <div id="app" class="container">
        <form method="post" class="flex flex-col gap-4">
            @csrf
            <div class="flex flex-col gap-2">
                <div class="font-bold">Nombre</div>
                <input name="name" class="border w-full p-4"/>
            </div>
            <div class="flex flex-col gap-2">
                <div class="font-bold">Código</div>
                <input name="test_code" class="border w-full p-4"/>
            </div>
            <div class="flex flex-col gap-2">
                <div class="font-bold">Tiempo de respuesta</div>
                <input name="turnaround" class="border w-full p-4" value="10-21 días calendario (14 días en promedio)"/>
            </div>
            <div class="flex flex-col gap-2">
                <div class="font-bold">Muestra preferida</div>
                <input name="preferred_specimen" class="border w-full p-4" value="3 ml de sangre total en un tubo de EDTA de copa púrpura (K2EDTA o K3EDTA)"/>
            </div>
            <div class="flex flex-col gap-2">
                <div class="font-bold">Especímenes alternativos</div>
                <input name="alternate_specimens" class="border w-full p-4" value="Saliva, hisopo bucal, gDNA y biopsia por punción cutánea (fibroblastos)"/>
            </div>
            <div class="flex flex-col gap-2">
                <div class="font-bold">Categoria</div>
                <select name="category_id" class="border w-full p-4">
                    <option value="">Selecciona</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->slug }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col gap-2">
                <div class="font-bold">Descripcion</div>
                <textarea name="description" class="border w-full p-4"></textarea>
            </div>
            <div class="flex flex-col gap-2">
                <div class="font-bold">Trastornos</div>
                <textarea name="disorders_str" class="border w-full p-4"></textarea>
            </div>
            <div class="flex flex-col gap-2">
                <div class="font-bold">Panel Primario</div>
                <textarea name="first_panel" class="border w-full p-4" placeholder="Genes del primer panel"></textarea>
            </div>
            <div class="flex flex-col gap-2">
                <div class="font-bold">Segundo Panel</div>
                <input name="second_panel_name" placeholder="Nombre del segundo panel" class="border w-full p-4"/>
                <textarea name="second_panel" class="border w-full p-4" placeholder="Genes del segundo panel"></textarea>
            </div>
            <div class="flex flex-col gap-2">
                <div class="font-bold">Tercer Panel</div>
                <input name="third_panel_name" class="border w-full p-4" placeholder="Nombre del tercer panel"/>
                <textarea name="third_panel" class="border w-full p-4" placeholder="Genes del tercer panel"></textarea>
            </div>
            <div>
                <input type="submit" value="Guardar" class="p-4 text-xl cursor-pointer"/>
            </div>
        </form>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
