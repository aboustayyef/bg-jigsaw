@extends('_layouts.main')

@section('body')
<x-nav />
<section class="mb-4 h-[1px] bg-gray-300"></section>


<x-partials.bg-section class="bg-white">
    <h2 class="text-5xl font-bold text-accent">Brands</h2>
    <p class="max-w-prose text-gray-500 text-lg my-2">Blue Gallery imports from some of the finest furniture brands in Italy, Germany and other European countries</p>
    <x-partials.ui.list-item title="Interstuhl" img="/assets/images/brands_interstuhl.jpg">
        Interstuhl is an independent, owner-run family company in Germany.
    </x-partials.ui.list-item>
    <x-partials.ui.list-item title="Ditre Italia" img="/assets/images/brands_ditre.jpg">
        Ditre Italia - Production of sofas, beds, armchairs and sofas. Over 80 sofa models, in 6 product lines identified to satisfy all tastes and adapt to the different characteristics of furnishing spaces.
    </x-partials.ui.list-item>
    <x-partials.ui.list-item title="Newform" img="/assets/images/brands_newform.jpg">
        ARAN World is the Italian kitchen export leader, and one of the best Italian companies for design, production and distribution of kitchens, office furniture and wardrobes.
    </x-partials.ui.list-item>
    <x-partials.ui.list-item title="Kosta Boda" img="/assets/images/brands_kostaboda.jpg">
        With a focus on modern lifestyle products and inspiring art, Kosta Boda creates glass that makes a difference
    </x-partials.ui.list-item>
</x-partials.bg-section>
@endsection