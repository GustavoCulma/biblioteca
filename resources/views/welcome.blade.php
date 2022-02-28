<x-app-layout>
    <div class="container py-8">

        @foreach ($editorials as $editorial)
            <section class="mb-6">
                <div class="flex items-center mb-2">
                    <h1 class="text-lg uppercase font-semibold text-gray-700">
                        {{ $editorial->name }}
                    </h1>
                    <a href="{{ route('editorials.show', $editorial) }}"
                        class="text-orange-500 hover:text-orange-400 hover:underline ml-2 font-semibold">Ver
                        más</a>
                </div>
                @livewire('book-editorial', ['editorial' => $editorial])
            </section>
        @endforeach
    </div>


    @push('script')
        <script>
            livewire.on('glider', function(id) {
                new Glider(document.querySelector('.glider-' + id), {
                    slidesToScroll: 1,
                    slidesToShow: 1,
                    draggable: true,
                    dots: '.glider-' + id + '~ .dots',
                    arrows: {
                        prev: '.glider-' + id + '~ .glider-prev',
                        next: '.glider-' + id + '~ .glider-next'
                    },
                    responsive: [{
                            breakpoint: 640,
                            settings: {
                                slidesToShow: 2.5,
                                slidesToScroll: 2,
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 3.5,
                                slidesToScroll: 3,
                            }
                        },
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 4.5,
                                slidesToScroll: 4,
                            }
                        },
                        {
                            breakpoint: 1280,
                            settings: {
                                slidesToShow: 5.5,
                                slidesToScroll: 5,
                            }
                        },
                    ]



                });
            });
        </script>
    @endpush
</x-app-layout>
