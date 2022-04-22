@extends('_layouts.main')

@section('body')
    <x-nav />
    <x-hero />
    <x-why-blog :news="$news"/>
    <x-our-customers :page="$page" />
    <x-our-collection />
    <x-our-brands/>
    <x-projects/>
@endsection