<section class="text-gray-600 body-font border-b border-gray-100">
    <div class="container px-5 pt-16 pb-8 justify-center flex flex-col items-center mx-auto">
        <div class="w-full md:w-2/3 flex flex-col items-center text-center">
            <h1 class="sm:text-4xl text-3xl font-medium title-font text-gray-900 mb-4">Raw Denim Heirloom Man Braid</h1>
            <p class="mb-8 leading-relaxed">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy.
                Gastropub indxgo juice poutine, ramps microdosing banh mi pug.</p>
            <form class="flex w-full justify-center items-end" action="{{ route('listings.index') }}" method="get">
                <div class="relative mr-4 w-full lg:w-1/2 text-left">
                    <input type="text" name="s" id="s" value="{{ request()->get('s') }}"
                        class="w-full outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <button
                    class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                    Search
                </button>
            </form>
        </div>
    </div>
</section>
