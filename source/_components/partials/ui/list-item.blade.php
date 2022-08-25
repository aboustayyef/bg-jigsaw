  <div class="mb-10">
    <div class="grid py-8 sm:grid-cols-4">
      @if(isset($img))
      <div class="mb-4 sm:mb-0 mr-6 bg-gray-100 aspect-video rounded-md overflow-hidden shadow-md ">
          <a href="{{$url}}"><img src="{{$img}}"  class="w-full h-full object-cover"></a>
      </div>
      @else
      {{-- empty div --}}
      <div></div>
      @endif
      <div class="sm:col-span-3 lg:col-span-2">
        <div class="mb-3">
          <a href="{{$url}}" aria-label="Article" class="inline-block text-stone-600 transition-colors duration-200 hover:text-deep-purple-accent-700">
            <p class="text-3xl font-extrabold leading-none sm:text-4xl xl:text-4xl">
              {{$title}}
            </p>
          </a>
        </div>
        <p class="text-gray-700">
          {{$slot}}
        </p>
      </div>
    </div>