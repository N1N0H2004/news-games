<x-app-layout>
    <x-slot name="header">
        <h2 class="font-sans font-bold text-xl">
            {{ __('Game')  }} {{ $game->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">

                <div class="flex items-start">
                    <img class="rounded-xl w-60" src="{{ $game->foto }}" alt="">
                    <div class="ml-4">
                        <p><strong>Game name: </strong>{{ $game->naam }}</p>
                        <p><strong>Description: </strong>{{ $game->beschrijving }}</p>
                        <p><strong>Device: </strong>{{ $game->tag->naam }}</p>
                        <br>
                        <a href="{{ route('games.index', $game->id) }}" class="w-auto bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-blue-500 hover:border-blue-600 hover:bg-blue-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Back</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
