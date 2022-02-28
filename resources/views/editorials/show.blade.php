<x-app-layout>

    <div class="container py-8">
        <figure class="mb-4">
            <img class="h-48 w-full object-cover object-center" src="{{ Storage::url($editorial->image) }}" alt="">
        </figure>


        @livewire('editorial-filter', ['editorial' => $editorial])

    </div>
</x-app-layout>
