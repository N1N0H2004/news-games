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
                    <p><strong>By ..............</strong>  </p>
                    <br><br>
                    <p> {{ $artikel->inhoud }} </p>




                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                    <p><strong>Device: </strong> {{ $artikel->tag->naam }} </p>
                    <p><strong>Categorie: </strong> {{ $artikel->categorie->naam }} </p>
                    <p><strong>Game naam: </strong> {{ $artikel->game->naam }} </p>



                    <br>
                    <a href="{{ route('artikels.index', $artikel->id)  }}" class="w-auto bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-blue-500 hover:border-blue-600 hover:bg-blue-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Back</a>

                </div>
        </div>
    </div>
</x-app-layout>
