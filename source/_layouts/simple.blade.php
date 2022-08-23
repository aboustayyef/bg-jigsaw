<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body class="text-gray-900 font-sans antialiased">
        <x-nav :page="$page" />
        <section class="mb-4 h-[1px] bg-gray-300"></section>
        <x-partials.bg-section class="bg-white">
            <h2 class="inline-block text-4xl font-bold my-4 text-white bg-stone-700 px-4 py-1 -m-5">{{$page->header}}</h2>
            <p class="max-w-4xl text-stone-400 text-3xl font-light my-2">{{$page->subheader}}</p>
        @yield('body')
        </x-partials.bg-section>
    </body>
</html>
