<x-app-layout>
    <x-slot name="header">
        <h2 class="font-sans font-bold text-xl">
            {{ __('Categorieën') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <a href="{{ route('categories.create') }}" class="w-auto h-10 bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Create
                                                                                                                                                                                                                                                                          categories</a>
            </div>

            <div class="grid grid-cols-2 gap-6">
                @forelse($categories as $categorie)
                    <div class=" p-4 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                        <div class=" justify-between items-center">
                            <strong class="my-4">Category: </strong>{{ $categorie->naam }}
                            <br><br>
                            <div class="w-52 flex">
                                <a href="{{ route('categories.edit', $categorie->id)  }}" class="w-auto h-8 bg-white float-right text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Edit</a>

{{--                                @include('categories.confirmDelete')--}}
                                @include('categories.cannotDelete')

                            </div>

                            <div id="confirmationPopup-{{ $categorie->id }}" class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 flex items-center justify-center" style="display: none;">
                                <!-- Confirmation Popup Content -->
                            </div>
                        </div>
                        @empty
                        @endforelse
                    </div>
            </div>
        </div>
</x-app-layout>

@include('parsels.confirmation')

