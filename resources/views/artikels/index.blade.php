<x-app-layout>
    <x-slot name="header">
        <h2 class="font-sans font-bold text-xl">
            {{ __('Articles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <a href="{{ route('artikels.create') }}" class="w-auto h-10 bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Create artikel</a>
            </div>



            <div class="grid grid-cols-3 gap-6">
                @forelse($artikels as $artikel)
                    <div class=" p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                        <div class="justify-between items-center">
                            <div class="relative">
                                <img src="{{ $artikel->game->foto }}" alt="" class="rounded-xl w-96 h-96">
                                <strong class="bg-gray-500 bg-opacity-70 pt-0.5 text-white rounded-b-xl absolute bottom-0 left-0 right-0 top-80 text-center"> {{ $artikel->titel }} </strong>
                            </div>




                            <br><br>
                            <div class="flex w-52">
                                <a href="{{ route('artikels.edit', $artikel->id)  }}" class="w-auto h-8 bg-white float-right text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Edit</a>
                                <a href="{{ route('artikels.show', $artikel->id)  }}" class="w-auto h-8 ml-2 mr-2 bg-white float-right text-gray-800 font-bold rounded border-b-2 border-orange-500 hover:border-orange-600 hover:bg-orange-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Show</a>

                                <br>
                                {{-- DELETE BUTTON --}}
                                <button type="button" onclick="deleteOpenConfirmationPopup('{{ $artikel->id }}')" class="w-auto h-8 bg-white float-right text-gray-800 font-bold rounded border-b-2 border-red-500 hover:border-red-600 hover:bg-red-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Delete</button>
                            </div>



                            <div id="confirmationPopup-{{ $artikel->id }}" class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 flex items-center justify-center" style="display: none;">
                                <div class="bg-white p-8 rounded-md shadow-md">
                                    <div class="text-center p-5 flex-auto justify-center">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 flex items-center text-red-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                        <h2 class="text-xl font-bold py-4 ">Are you sure?</h2>
                                        <p class="text-sm text-gray-500 px-8">Do you really want to delete this article? This process cannot be undone</p>

                                        <div class="p-3  mt-2 text-center space-x-4 md:block">
                                            <button onclick="deleteCloseConfirmationPopup('{{ $artikel->id }}')" class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">Cancel</button>

                                            <form id="deleteForm-{{ $artikel->id }}" method="POST" action="{{ route('artikels.destroy', $artikel->id) }}" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="mb-2 md:mb-0 bg-red-500 border border-red-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-red-600">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- DELETE BUTTON --}}
                        </div>

                        <div id="confirmationPopup-{{ $artikel->id }}" class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 flex items-center justify-center" style="display: none;">
                            <!-- Confirmation Popup Content -->
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>


    <x-slot name="footer">
        <hr class="my-6 border-blueGray-300">
        <div class="flex flex-wrap items-center md:justify-between justify-center">
            <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                <div class="text-sm text-blueGray-500 font-semibold py-1 mb-5">
                    Copyright © Event-Holder by Ninoh van Dijke.
                </div>
            </div>
        </div>
    </x-slot>


</x-app-layout>


<script>
    function deleteOpenConfirmationPopup(deleteId) {
        // Show the confirmation popup
        document.getElementById('confirmationPopup-' + deleteId).style.display = 'flex';
    }

    function deleteCloseConfirmationPopup(deleteId) {
        // Hide the confirmation popup
        document.getElementById('confirmationPopup-' + deleteId).style.display = 'none';
    }
</script>
