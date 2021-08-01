<x-app-layout>
    <section class="text-gray-600 body-font-overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="mb-12">
                <h2 class="h2 text-2xl font-medium text-gray-900 title-font">
                    {{ $listing->title }}
                </h2>
                <div class="md:flex-grow mr-8 mt-2 -ml-2 flex items-center justify-start">
                    @foreach ($listing->tags as $tag)
                        <span
                            class="inline-block ml-2 tracking-wide text-xs font-medium title-font px-1.5 py-0.5 border border-indigo-500 uppercase text-indigo-500 bg-white hover:bg-indigo-200">
                            {{ $tag->name }}
                        </span>
                    @endforeach
                </div>
            </div>
            <div class="-my-6">
              <div class="flex flex-wrap md:flex-nowrap">
                <div class="content w-full md:w-3/4 pr-4 leading-relaxed text-base">
                  {!! $listing->content !!}
                </div>
                <div class="w-full md:1/4 pl-4">
                  <img src="/storage/{{ $listing->logo }}" alt="{{ $listing->company }} logo" class="max-w-full mb-4">
                  <p class="leading-relaxed text-base">
                    <strong>Location: </strong>{{ $listing->location }}<br>
                    <strong>Company: </strong>{{ $listing->company }}
                  </p>
                  <a href="#" class="block uppercase text-center font-medium py-2 border title-font text-indigo-500 bg-white tracking-wide my-4 border-indigo-500 hover:bg-indigo-500 hover:text-white">Apply Now</a>
                </div>
              </div>
            </div>
        </div>
    </section>
</x-app-layout>
