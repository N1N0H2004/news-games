<x-app-layout>

    <x-slot name="header">
        <h2 class="font-sans font-bold text-xl">
            {{ __('Games') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <a href="{{ route('games.create') }}" class="w-auto h-10 bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Create games</a>
            </div>

            <div class="grid grid-cols-2 gap-6">
                @forelse($games as $game)
                    <div class=" p-4 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                        <div class=" justify-between items-center">
                            <div class="flex items-start">
                                <img class="rounded-xl w-60" src={{ $game->foto }} alt="">
                                <div class="ml-4">
                                    <strong class="my-4">Game: </strong>{{ $game->naam }} <br>
                                    <strong class="my-4">Device: </strong>{{ $game->tag->naam }}
                                    <br><br>
                                    <div class="w-52 flex">
                                        <a href="{{ route('games.edit', $game->id)  }}" class="w-auto h-8 bg-white float-right text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Edit</a>
                                        <a href="{{ route('games.show', $game->id)  }}" class="w-auto h-8 ml-2 mr-2 bg-white float-right text-gray-800 font-bold rounded border-b-2 border-orange-500 hover:border-orange-600 hover:bg-orange-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Show</a>
                                            <?php $gekoppelde_artikelen = App\Models\Artikel::where('game_id', $game->id)->get(); ?>

                                        @if ($gekoppelde_artikelen->count() > 0)
                                            @include('games.cannotDelete')
                                        @else
                                            @include('games.confirmDelete')
                                        @endif
                                    </div>

                                        <div id="confirmationPopup-{{ $game->id }}" class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 flex items-center justify-center" style="display: none;"></div>
                                </div>
                            </div>
                        </div>
                        @empty
                        @endforelse
                    </div>
            </div>
    </div>

</x-app-layout>

@include('parsels.confirmation')
