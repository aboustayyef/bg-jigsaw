<div class="flex flex-col items-start">
  <div>
    <h3 class="text-xl py-4 font-bold uppercase text-accent">{{$title}}</h3>
       <figure class="w-full">
      <img src="{{$img}}" class="w-full">
      <figcaption class="mt-4 pb-8">
        {{$slot}}
      </figcaption>
    </figure>
  </div>
  <a href="#" class="mt-auto">
    <div class="inline-block px-4 py-2 border border-gray-300 rounded-md hover:border-accent hover:text-white hover:bg-accent">
      Show Me More
    </div>
  </a>
</div>