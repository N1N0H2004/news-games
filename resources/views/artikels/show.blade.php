<x-app-layout>
    <x-slot name="header">
        <h2 class="font-sans font-bold text-xl">
            {{ __('Game')  }} {{ $artikel->titel }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


                <div class="text bg-gray-300 max-w-4xl">
{{--                    <img src={{ $artikel->game->foto }} alt="" class=" rounded-xl w-auto h-auto">--}}

                    <strong><h1> {{ $artikel->titel }} </h1></strong>
                    <p>Geplaatst op {{ $artikel->created_at->format('d-F-Y H:i') }} </p>
                    <p><strong class="mr-6">By .............. </strong> Geplaatst op {{ $artikel->created_at->format('d-F-Y H:i') }} </p>
                    <br><br>
                    <p> {{ $artikel->inhoud }} </p>


                    <br><br><br><br><br>



                    <div x-data="{ open: false }">

                        <div x-show="open" x-cloak class="mb-5">
                            <p><strong>Device: </strong> {{ $artikel->tag->naam }} </p>
                            <p><strong>Categorie: </strong> {{ $artikel->categorie->naam }} </p>
                            <p><strong>Game naam: </strong> {{ $artikel->game->naam }} </p>
                        </div>

                        <a href="{{ route('artikels.index', $artikel->id)  }}" class="w-auto bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-blue-500 hover:border-blue-600 hover:bg-blue-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Back</a>

                        <button @click="open = !open" type="button" class="w-auto bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                            <span x-show="!open">More specs</span>
                            <span x-show="open">Less specs</span>
                            <svg x-show="open" class="-mr-1 ml-2 h-5 w-5 transform rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                            <svg x-show="!open" class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>

                    </div>


           </div>
        </div>
    </div>
</x-app-layout>
