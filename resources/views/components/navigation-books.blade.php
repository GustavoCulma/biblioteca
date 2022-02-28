  @props(['editorial'])

  <div class="grid grid-cols-4 p-4">
      <div>
          <p class="text-lg font-bold text-center text-gray-600 mb-3">Libros</p>
          <ul>
              @foreach ($editorial->books as $book)
                  <li>
                      <a href="{{ route('books.show', $book) }}"
                          class="text-gray-600 inline-block font-semibold py-1 px-4 hover:bg-orange-400 hover:text-gray-100">
                          {{ $book->title }}
                      </a>
                  </li>
              @endforeach
          </ul>
      </div>
      <div class=" text-gray-600 col-span-3">
          <p class="text-lg font-bold text-left text-gray-600 mb-3">Sede</p>
          {{ $editorial->campus }}
      </div>
  </div>
