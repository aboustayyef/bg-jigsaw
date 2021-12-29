@php
    $all_slides = ["laptops-and-couch.jpg", "reference_silver_088.jpg", "miro-2.jpg", "morrison_00.jpg", "milieu_chefbuero.jpg", "interstuhl_ambient_yellow.jpg", "vista_74_75.jpg", "sanders_Letto_001.jpg", "reference_airpad_01.jpg"];
    $slides_to_show = array_rand($all_slides, 4);
@endphp

<section>
  <div class="container w-full max-w-7xl mx-auto bg-gray-100 relative" >

    {{-- slides --}}
    <div class="main-carousel w-full" data-flickity='{ "fade":true, "autoPlay":true, "contain": true, "bgLazyLoad": true, "imagesLoaded": true, "pageDots": false }'>
      <div class="carousel-cell w-full aspect-video bg-cover" data-flickity-bg-lazyload="/assets/images/slides/lennox_soft_2016_002.jpg" ></div>
      @foreach($slides_to_show as $slide)
      <div class="carousel-cell w-full aspect-video bg-cover" data-flickity-bg-lazyload="{{'/assets/images/slides/'. $all_slides[$slide]}}" ></div>
      @endforeach
    </div>

    {{-- Call to action --}}
    <div class="absolute top-8 left-8">
      <h2 class="mb-4 text-2xl font-bold z-10">Call to Action on Top of slideshow</h2>
      <a class= "linear-block bg-green-800 px-4 py-2 hover:bg-green-900 text-white rounded" href="#">Take Action</a>
    </div>
  
  </div>
</section>