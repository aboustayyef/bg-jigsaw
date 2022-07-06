---
extends: _layouts.main
title: News | Blue Gallery
---

@section('body')
<section>
  <div class="container mx-auto px-4">
    <hr class="mt-4">
  <h2 class="my-12 text-gray-800 font-bold text-5xl">BG News</h2>
  <ul>
    @foreach($news as $story)
    <li class="flex mb-8">
        {{-- <img class="rounded-md w-24 h-24 mr-8 object-cover" src="/img/news/thumbs/{{$story->thumbnail}}"> --}}
      <div class="w-auto">
        <a href="{{$story->getPath()}}">
          <h3 class="hover:text-primary font-bold text-lg">{{$story->title}}</h3>
        </a>
        <p class="prose"> {{$story->excerpt}}</p>
      </div>
    </li>
    @endforeach
  </ul>
  </div>
</section>
@endsection