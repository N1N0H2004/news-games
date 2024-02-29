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
                    <div class=" p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                        <div class="justify-between items-center">
                            <div class="relative">
                                <img src="{{ $artikel->game->foto }}" alt="" class="rounded-xl w-96 h-96">
                                {{--<img src="{{ $artikel->photo->foto }}" alt="" class="rounded-xl w-96 h-96">--}}
                                <strong class="bg-gray-500 bg-opacity-70 pt-0.5 text-white rounded-b-xl absolute bottom-0 left-0 right-0 top-80 text-center"> {{ $artikel->titel }} </strong>
                            </div>
<br>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
