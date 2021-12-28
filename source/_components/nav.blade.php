<section id="navigation" class="shadow-md">

  <nav class="px-4 container pt-6 pb-4 lg:pb-6 mx-auto lg:flex justify-between max-w-7xl" x-data="{ open: false}">
      <div class="flex justify-between items-center">

           {{--Logo  --}}
          <picture>
              <a href="/"><img src="/assets/images/bg_logo.svg" class="w-64"></a>
          </picture>

          {{-- Burger Menu (open / close states) --}}
          <div class="cursor-pointer">
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
      </div>

      <ul class="mt-4 lg:mt-0 lg:flex lg:space-x-4" :class="open ? 'block' : 'hidden'">
          <li class=><a href="#" class="nav-link">Collection</a></li>
          <li class=><a href="#" class="nav-link">Brands</a></li>
          <li class=><a href="#" class="nav-link">Projects</a></li>
          <li class=><a href="#" class="nav-link">About</a></li>
          <li class=><a href="#" class="nav-link">Contact Us</a></li>
      </ul>
  </nav>
</section>