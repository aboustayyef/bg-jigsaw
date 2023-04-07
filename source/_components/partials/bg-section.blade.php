<section {{$attributes->merge(['class' =>'bg-gray-100 pt-2'])}}>
  @isset($style)
  <div class="@if($style == " dark") bg-gray-500 @else bg-white @endif ">
  @else
    <div class=" bg-white">
  @endisset
  <div class="px-4 xl:px-0 pt-2 lg:pt-8 pb-12 w-full max-w-6xl mx-auto">
    {{$slot}}
  </div>
  </div>
</section>