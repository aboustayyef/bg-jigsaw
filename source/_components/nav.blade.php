<section id="navigation" class="bg-stone-100">

    <nav class="px-4 xl:px-0 w-full max-w-6xl pt-6 lg:pt-0 pb-4 lg:pb-0 mx-auto lg:flex justify-between"
        x-data="{ burger_open: false, collection_open: false}">
        <div class="flex justify-between items-center">

            {{--Logo --}}
            <picture>
                <a href="/"><img src="/assets/images/bg_logo.svg" class="w-64"></a>
            </picture>

            {{-- Burger Menu (open / close states) --}}
            <div class="cursor-pointer">
                <div x-show="!burger_open" x-on:click="burger_open= !burger_open">
                    <x-graphics.burger />
                </div>
                <div x-show="burger_open" x-on:click="burger_open= !burger_open">
                    <x-graphics.x classes="lg:hidden w-8 h-8" />
                </div>
            </div>
        </div>
        <ul class="relative mt-4 lg:mt-0 lg:flex" :class="burger_open ? 'block' : 'hidden'">
            <li><a href="/" class="nav-link {{$page->active('homepage')}}">Home</a></li>
            <a href="#" class="nav-link {{$page->active('home')}} {{$page->active('office')}} {{$page->active('accessories')}}" x-on:click="collection_open = !collection_open">
                <li class="group">
                    <div class="flex justify-between items-center overflow-auto">
                        Collection
                        <div class="cursor-pointer px-1" x-on:click.stop="collection_open = !collection_open">
                            <div x-show="!collection_open"> <x-graphics.chevron-down /></div>
                            <div x-show="collection_open"> <x-graphics.x classes="w-4 h-4" /></div>
                        </div>

                    </div>
                </li>
            </a>
            {{-- popup menu --}}
            <ul x-show="collection_open"
                class=" rounded-md overflow-hidden lg:absolute left-14 top-[72px] lg:w-40 lg:z-50 lg:border-t lg:border-stone-100 lg:shadow-lg group-hover:bg-inherit"
                @click.outside="collection_open = !collection_open">
                <a href="/collection/home">
                    <li class=" p-2 lg:px-4 py-3 hover:bg-stone-300 bg-stone-100 lg:bg-stone-200">Home Furniture</li>
                </a>
                <a href="/collection/office">
                    <li class="p-2 lg:px-4 py-3 hover:bg-stone-300 bg-stone-100 lg:bg-stone-200">Office Furniture</li>
                </a>
                <a href="/collection/accessories">
                    <li class="p-2 lg:px-4 py-3 hover:bg-stone-300 bg-stone-100 lg:bg-stone-200">Accessories</li>
                </a>
            </ul>
            <li><a href="/about" class="nav-link {{$page->active('about')}}">About</a></li>
            <li><a href="/brands" class="nav-link {{$page->active('brands')}}">Brands</a></li>
            <li><a href="/projects" class="nav-link {{$page->active('projects')}}">Projects</a></li>
            <li><a href="/contact" class="nav-link {{$page->active('contact')}}">Contact Us</a></li>
        </ul>
    </nav>
</section>