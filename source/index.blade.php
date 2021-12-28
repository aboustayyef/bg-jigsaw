@extends('_layouts.main')

@section('body')
<section id="navigation" class="shadow-md">
    <nav class="px-4 container py-6 mx-auto lg:flex justify-between max-w-7xl" x-data="{ open: false}">
        <div class="flex justify-between items-center">
            <picture class="">
                <a href="/"><img src="/assets/images/bg_logo.svg" class="w-64"></a>
            </picture>
            <div x-show="!open">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 lg:hidden" x-on:click="open= !open" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div>
            <div x-show="open">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 lg:hidden" fill="none" x-on:click="open= !open" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>
        </div>
        <ul class="mt-4 lg:mt-0 lg:flex space-y-1 lg:space-y-0 lg:space-x-4" :class="open ? 'block' : 'hidden'">
            <li class=><a href="#" class="text-gray-500 block px-2 py-1 lg:py-4 hover:bg-slate-300 bg-slate-200 lg:bg-white lg:hover:bg-slate-100">Collection</a></li>
            <li class=><a href="#" class="text-gray-500 block px-2 py-1 lg:py-4 hover:bg-slate-300 bg-slate-200 lg:bg-white lg:hover:bg-slate-100">Brands</a></li>
            <li class=><a href="#" class="text-gray-500 block px-2 py-1 lg:py-4 hover:bg-slate-300 bg-slate-200 lg:bg-white lg:hover:bg-slate-100">Projects</a></li>
            <li class=><a href="#" class="text-gray-500 block px-2 py-1 lg:py-4 hover:bg-slate-300 bg-slate-200 lg:bg-white lg:hover:bg-slate-100">About</a></li>
            <li class=><a href="#" class="text-gray-500 block px-2 py-1 lg:py-4 hover:bg-slate-300 bg-slate-200 lg:bg-white lg:hover:bg-slate-100">Contact Us</a></li>
        </ul>
    </nav>
</section>
@endsection
