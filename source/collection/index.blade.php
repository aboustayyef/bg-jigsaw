@extends('_layouts.main')

@section('body')
<x-nav :page="$page" />
<section class="mb-4 h-[1px] bg-gray-300">
</section>
<x-partials.bg-section class="bg-white">
  {{$page->collection->home->sections->section_items[0]->name}} <br/>
  {{$page->collection->home->sections->section_items[0]->description}}
</x-partials.bg-section>
@endsection