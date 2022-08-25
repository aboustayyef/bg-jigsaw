<x-partials.bg-section>
  <x-partials.heading heading="Our Customers" sub="Some of Ghana’s most admired companies trust our products" />
  {{-- List of logo --}}
  <div class="flex flex-wrap">
    @foreach ($page->customer_logos as $logo)
    <img class="h-8 lg:h-12 w-auto mr-4 mt-4 opacity-50 mix-blend-multiply" src="/assets/images/customerslogos/{{$logo}}" />
    @endforeach
  </div>
</x-partials.bg-section>