<x-app-layout>
    <x-slot name="header">
        <h2 class="font-sans font-bold text-xl">
            {{ __('Tags') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <a href="{{ route('tags.create') }}" class="w-auto h-10 bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Create
                                                                                                                                                                                                                                                                    tags</a>
            </div>

            <div class="grid grid-cols-2 gap-6">
                @forelse($tags as $tag)
                    <div class=" p-4 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                        <div class="justify-between items-center">
                            <strong class="my-4">Tag: </strong>{{ $tag->naam }}
                            <br><br>
                            <div class="w-52 flex">
                                <a href="{{ route('tags.edit', $tag->id)  }}" class="w-auto h-8 bg-white float-right text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Edit</a>
                                <br>
                                <?php $gekoppelde_artikelen = App\Models\Artikel::where('tag_id', $tag->id)->get();
                                    $gekoppelde_games = App\Models\Game::where('tag_id', $tag->id)->get(); ?>

                                @if ($gekoppelde_artikelen->count() > 0 || $gekoppelde_games->count() > 0)
                                    @include('tags.cannotDelete')
                                @else
                                    @include('tags.confirmDelete')
                                @endif


                            </div>

                            <div id="confirmationPopup-{{ $tag->id }}" class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 flex items-center justify-center" style="display: none;">
                            </div>
                        </div>
                        @empty
                        @endforelse
                    </div>
            </div>
        </div>
</x-app-layout>

@include('parsels.confirmation')

