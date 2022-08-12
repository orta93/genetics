@php
$images = [
    ['img' => 'CARRUSEL_1.jpg'],
    ['img' => 'CARRUSEL_2.jpg'],
    ['img' => 'CARRUSEL_3.jpg'],
    ['img' => 'CARRUSEL_4.jpg']
];
@endphp
<div class="w-full" style="background: #e6e9f0;">
    <images-carousel :items='@json($images)'></images-carousel>
</div>
