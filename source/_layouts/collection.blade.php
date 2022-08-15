@extends('_layouts.main')

@section('body')
<x-nav />
<section class="mb-4 h-[1px] bg-gray-300"></section>
<x-partials.bg-section class="bg-white">
@php
$content = $page->collection[$page->key];
@endphp

{{-- Pill tabs --}}
<div class="flex space-x-2">
<a class="pill @if($page->key == 'home') active @endif" href="#">Home</a>
<a class="pill @if($page->key == 'office') active @endif" href="#">Office</a>
<a class="pill @if($page->key == 'accessories') active @endif" href="#">Accessories</a>
</div>


<h2 class="my-10 text-4xl font-bold text-gray-800">Our {{ucfirst($page->key)}} Collection</h2>
<div class="lg:flex bg-stone-50 shadow-lg">
  <img class="lg:w-1/2 mr-4 flex-none" src="{{$content->cover_photo}}">
  <div>
    <h3 class="text-4xl font-extralight my-6 px-4 py-2">{{$content->title}}</h3>
    <p class="text-2xl text-stone-400 leading-snug px-4 py-2 lg:pr-4">{{$content->description}}</p>
  </div>
</div>


@foreach($content->sections as $section)
<h4 class="mt-12 text-xl font-bold uppercase">{{$section->section_header}} </h4>
{{$section->section_description}} 
<div class="flex flex-wrap mt-8">
  @foreach($section->section_items as $item)
  <div class="mr-4 mb-4">
    <div class="w-48 h-48 bg-stone-100">
      {{-- image goes here --}}
    </div>
    <article class="my-4">
      <h5 class="font-bold">{{$item->name}}</h5>
      <p>{{$item->description}}</p>
    </article>
  </div>
  @endforeach
</div>

@endforeach
</x-partials.bg-section>
@endsection