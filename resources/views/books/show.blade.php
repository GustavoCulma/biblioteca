<x-app-layout>
    <div class="2xl:container 2xl:mx-auto md:py-12 lg:px-20 md:px-6 py-9 px-4">
        <div id="viewerBox" class="lg:p-10 md:p-6 p-4 bg-white dark:bg-gray-900">
            <div class="mt-3 md:mt-4 lg:mt-0 flex flex-col lg:flex-row items-strech justify-center lg:space-x-8">
                <aside>

                    <figure>
                        <img class="h-48 w-full object-cover object-center" src="{{ Storage::url($book->image) }}"
                            alt="">
                    </figure>

                    <div class="py-4 px-6">
                        <h1 class="text-lg font-semibold text-rose-900">
                            <a href="{{ route('books.show', $book) }}">
                                {{ Str::limit($book->title, 10) }}
                            </a>
                        </h1>
                        <p class="font-bold text-gray-500">
                            {{ Str::limit($book->synopsis, 20) }}
                        </p>
                        <p class="font-bold text-emerald-700">Paginas: {{ $book->n_pages }}</p>
                    </div>

                </aside>
                <div class="lg:w-1/2 flex flex-col justify-center mt-7 md:mt-8 lg:mt-0 pb-8 lg:pb-0">
                    <h2 class="text-3xl lg:text-4xl font-semibold text-gray-800 dark:text-white">{{ $book->title }}
                    </h2>
                    <p class="text-base leading-normal text-gray-600 dark:text-white mt-2">{{ $book->synopsis }}</p>
                    <p class="text-3xl font-medium text-gray-600 dark:text-white mt-8 md:mt-10"></p>

                    <div class="mt-6">
                        <p class="font-semibold text-rose-900">
                            Autor
                        </p>
                        @foreach ($book->authors as $autor)
                            {{ $autor->name }} {{ $autor->surnames }}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
