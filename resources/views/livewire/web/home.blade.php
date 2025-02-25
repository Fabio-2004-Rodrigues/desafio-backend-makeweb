@livewireStyles

@if ($films->count() > 0)
    <div>
        <div class="px-4 py-8 mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 lg:gap-8">
            @foreach ($films as $film)
                <a href="{{ route('see', ['id' => $film->id]) }}"
                    class="relative w-full aspect-video bg-cover bg-center bg-no-repeat"
                    style="background-image: url('{{ asset('storage/' . $film->cover) }}')">
                    <div
                        class="absolute flex items-end p-4 top-0 left-0 w-full h-full bg-gradient-to-t from-black to-black/20">
                        <div>
                            <h1 class="text-2xl font-bold">
                                {{ $film->title }}
                            </h1>
                            <h2 class="font-medium">
                                {{ $film->director }}
                            </h2>
                        </div>
                    </div>
                </a>
            @endforeach
            <div class="px-4 py-8 mx-auto">
                {{ $films->links() }}
            </div>
        </div>
    </div>
@else
    <div class="px-4 py-8 mx-auto">
        <h1 class="text-2xl font-bold text-center">
            Sem filmes disponíveis, clique em "Cadastrar" para adicionar um novo filme.
        </h1>
    </div>
@endif

@livewireScripts
