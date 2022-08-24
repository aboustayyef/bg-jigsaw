---
title: Contact Us - Blue Gallery Ghana
extends: _layouts.simple
key: contact
header: Contact Us
subheader: Visit our Tema showroom for a closer look at our furniture collection
---
@section('body')
<h2 class="py-4 mt-4 border-t text-xl font-bold text-stone-500 uppercase ">Business Hours : <span class="text-accent">MON-FRI</span> : 9:00 - 17:00 , SAT
   10:00 - 15:00 SUNDAY CLOSED</h2>
<div class="border border-stone-200 inline-block shadow-lg my-8">
   <img class="" src="/assets/images/bluegallery-showroom-tema.jpg" alt="Blue Gallery Showroom in Tema">
   <p class=" p-4 bg-accent text-2xl text-white font-light">Aflao Road, near pedestrian and train bridges</p>
   <div class="p-4">
      <div class="flex items-center space-x-6">
         {{-- Call Us --}}
         <a class="button flex hover:bg-stone-100 p-2 border border-stone-200 rounded-md" href="tel:+233264672320">
            <x-graphics.phone class="mr-2 text-accent" />
            <p>Call Now</p>
         </a>
         {{-- Whatsapp --}}
         <a href="https://wa.me/233264672320" class="flex items-center">
            <x-graphics.whatsapp class="mr-2 text-accent" />
            <p>Whatsapp</p>
         </a>
         {{-- Map --}}
         <a class="button flex items-center"
            href="https://www.google.com.gh/maps/place/Blue+Gallery+Home+%26+Office+Furniture/@5.688309,-0.0131917,17z/data=!3m1!4b1!4m2!3m1!1s0xfdf80629b203513:0xc882e55521da4358">
            <x-graphics.map class="mr-2 text-accent" />
            <span>Map</span>
         </a>
      </div>
   </div>
</div>
<p>Other Ways to get in touch</p>
<div class="mt-4 flex space-x-2">
   <a href="mailto:bluegalleryghana@gmail.com" class="flex items-center justify-around h-16 w-16 rounded-full bg-white border-[16px] border-black hover:border-accent">
      <x-graphics.message class="" />
   </a>
   <a href="https://www.instagram.com/bluegallery_ghana/" class="flex items-center justify-around h-16 w-16 rounded-full bg-white border-[16px] border-black hover:border-accent">
      <x-graphics.instagram class="" />
   </a>
   <a href="https://twitter.com/blue_gallery" class="flex items-center justify-around h-16 w-16 rounded-full bg-white border-[16px] border-black hover:border-accent">
      <x-graphics.twitter class="" />
   </a>
   <a href="https://web.facebook.com/blue.gallery.ghana" class="flex items-center justify-around h-16 w-16 rounded-full bg-white border-[16px] border-black hover:border-accent">
      <x-graphics.facebook class="" />
   </a>
   
</div>
      @endsection