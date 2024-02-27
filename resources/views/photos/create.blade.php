<x-app-layout>
    <x-slot name="header">
        <h2 class="font-sans font-bold text-xl">
            {{ __('Create Games') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">

                <form action="{{ route('games.store') }}" method="post">
                    @csrf

                    <strong>Name: <x-text-input type="text" name="naam" field="naam" placeholder="Name..." class="w-full border-black" autocomplete="off" :value="$photo->naam"></x-text-input> </strong>
                    @error('naam')
                    <p class="text-red-500 -mt-6">{{ $message }}</p>
                    @enderror
<br><br>
                    <strong>Picture: <x-text-input type="file" name="foto" field="foto" class="w-full" style="background-color: white; color: black;" required ></x-text-input> </strong>
<br><br>

                    <button type="submit" class="w-auto bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Add games</button>
                    <a href="{{ route('photos.index', $photo->id)  }}" class="w-auto bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-blue-500 hover:border-blue-600 hover:bg-blue-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Back</a>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
