@php
$images = [
    ['img' => 'CARRUSEL_1.jpg'],
    ['img' => 'CARRUSEL_2.jpg'],
    ['img' => 'CARRUSEL_3.jpg'],
    ['img' => 'CARRUSEL_4.jpg']
];
@endphp
<div class="w-full">
    <images-carousel :items='@json($images)'></images-carousel>
</div>
