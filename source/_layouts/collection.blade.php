@php
$page->title = "Blue Gallery Ghana | " . ucfirst($page->key) . " Collection";
@endphp
@extends('_layouts.main')

@section('body')
<x-nav :page="$page" />

<div class="bg-white w-full">
  <div class="px-4 xl:px-0 pt-8 pb-12 w-full max-w-6xl mx-auto">
  {{-- Pill tabs --}}
<div class="flex space-x-2">
  <a class="pill @if($page->key == 'home') active @endif" href="/collection/home">Home <span class="hidden md:inline-block">Furniture</span></a>
  <a class="pill @if($page->key == 'office') active @endif" href="/collection/office">Office <span class="hidden md:inline-block">Furniture</span></a>
  <a class="pill @if($page->key == 'accessories') active @endif" href="/collection/accessories">Accessories</a>
  </div>
  
  {{-- Hero  --}}
  <h2 class="my-10 text-4xl font-bold text-gray-800">Our {{ucfirst($page->key)}} Collection</h2>
  <div class="lg:flex bg-stone-50 shadow-lg">
    <img class="lg:w-1/2 mr-4 flex-none" src="{{$page->cover_photo}}">
    <div>
      <h3 class="text-4xl font-extralight my-6 px-4 py-2">{{$page->page_title}}</h3>
      <p class="text-2xl text-stone-400 leading-snug px-4 py-2 lg:pr-4">{{$page->page_description}}</p>
    </div>
  </div>
  
  @foreach($page->sections as $section)
  {{-- Section --}}
  <h4 class="mt-12 text-2xl text-gray-900 font-bold uppercase">{{$section->section_header}} </h4>
  <p class="text-gray-500">{{$section->section_description}}</p>
  {{-- Items --}}
  <div class="flex flex-wrap mt-8">
    @foreach($section->section_items as $item)
    <div class="mr-4 mb-4 flex-none">
      {{-- Thumb --}}
      <div class="w-64 lg:w-80 aspect-video flex items-center justify-around">
        <img class="w-full h-full object-contain" src="{{$section->section_thumbs_location}}{{$item->thumb}}" alt="">
      </div>
      {{-- Details --}}
      <article class="my-4 w-64 lg:w-80 text-center">
        <h5 class="font-bold text-lg uppercase text-gray-500">{{$item->name}}</h5>
        <p>{{$item->description}}</p>
      </article>
    </div>
    @endforeach
  </div>
  
  @endforeach
  @endsection
  </div>
</div>
