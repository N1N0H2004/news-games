<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News articles') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div class="grid grid-cols-3 gap-6">
                @forelse($artikels as $artikel)
                    <div class="">
                        <div class="justify-between items-center h-96">
                            <a href="{{ route('artikelShow', $artikel->id)  }}" class="relative inline-block overflow-hidden">
                                <img src="{{ $artikel->game->foto }}" alt="" class=" w-96 h-96 rounded-xl transition-transform duration-300 transform hover:scale-105">
                                <strong class="bg-gray-500 bg-opacity-60 pt-0.5 pl-1 pr-1 rounded-b-xl absolute bottom-0 left-0 right-0 top-80 hover:underline text-center text-white text-xl"> {{ $artikel->titel }} </strong>
                            </a>
                        </div>

                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>

