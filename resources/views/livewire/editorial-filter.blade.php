<div>
    <div class="bg-white rounded-lg shadow-lg mb-6">
        <div class="px-6 py-2 flex justify-between items-center">
            <h1 class="font-semibold text-gray-700 uppercase">Editorial</h1>
            <div class="grid-cols-2 border border-gray-200 divide-x divide-gray-200 text-gray-500">
                <i class="fas fa-border-all p-3 cursor-pointer {{ $view == 'grid' ? 'text-cyan-500' : '' }}"
                    wire:click="$set('view', 'grid')"></i>
                <i class="fas fa-th-list p-3 cursor-pointer {{ $view == 'list' ? 'text-cyan-500' : '' }}"
                    wire:click="$set('view', 'list')"></i>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">

        <aside>
            <div>
                <h1 class="font-semibold text-rose-900 uppercase">{{ $editorial->name }}</h1>

                <p class="mt-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident quisquam ab
                    labore consequatur,
                    doloremque id repellat, aut magni, corrupti perferendis reprehenderit. Fuga vitae odio, consequuntur
                    et
                    aperiam nemo magni recusandae.
                </p>

                <h2 class="font-semibold text-emerald-700 mt-6"> Ubicacion: {{ $editorial->campus }}</h2>
            </div>
        </aside>


        <div class="md:col-span-2 lg:col-span-4">
            <h3 class="font-semibold text-rose-900 uppercase"> Libros</h3>

            @if ($view == 'grid')
                <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($books as $book)
                        <li class="bg-white rounded-lg shadow">
                            <article>
                                <figure>
                                    <img class="h-48 w-full object-cover object-center"
                                        src="{{ Storage::url($book->image) }}" alt="">
                                </figure>

                                <div class="py-4 px-6">
                                    <h1 class="text-lg font-semibold text-rose-900">
                                        Titulo:
                                        <a href="{{ route('books.show', $book) }}">
                                            {{ Str::limit($book->title, 5) }}
                                        </a>
                                    </h1>
                                    <p class="font-bold text-gray-500">
                                        Sinopsis
                                        {{ Str::limit($book->synopsis, 10) }}
                                    </p>
                                    <p class="font-bold text-emerald-700">Paginas: {{ $book->n_pages }}</p>
                                </div>
                            </article>
                        </li>
                    @endforeach
                </ul>
            @else
                <ul>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Upss!</strong>
                        <span class="block sm:inline">Estamos trabjando en esta parte de la pagina.</span>
                    </div>
                </ul>
            @endif

            <div class="mt-6">
                {{ $books->links() }}
            </div>


        </div>



    </div>
</div>
