<x-app-layout>
    <x-slot name="header">
        <h2 class="font-sans font-bold text-xl">
            {{ __('Categorieën') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <a href="{{ route('categories.create') }}" class="w-auto h-10 bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Create categorieën</a>
            </div>

            <div class="grid gap-6">
                @forelse($categories as $categorie)
                    <div class=" p-4 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                        <div class=" justify-between items-center">
                            <strong class="my-4">Naam: </strong>{{ $categorie->naam }}
<br><br>
                            <div class="w-52 flex">
                                <a href="{{ route('categories.edit', $categorie->id)  }}" class="w-auto h-8 bg-white float-right text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Edit</a>


                                {{-- DELETE BUTTON --}}
                                <button type="button" onclick="deleteOpenConfirmationPopup('{{ $categorie->id }}')" class="w-auto h-8 ml-2 bg-white float-right text-gray-800 font-bold rounded border-b-2 border-red-500 hover:border-red-600 hover:bg-red-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Delete</button>
                            </div>
                            <div id="confirmationPopup-{{ $categorie->id }}" class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 flex items-center justify-center" style="display: none;">
                                <div class="bg-white p-8 rounded-md shadow-md">
                                    <div class="text-center p-5 flex-auto justify-center">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 flex items-center text-red-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                        <h2 class="text-xl font-bold py-4 ">Are you sure?</h2>
                                        <p class="text-sm text-gray-500 px-8">Do you really want to delete this categorie? This process cannot be undone</p>

                                        <div class="p-3  mt-2 text-center space-x-4 md:block">
                                            <button onclick="deleteCloseConfirmationPopup('{{ $categorie->id }}')" class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">Cancel</button>

                                            <form id="deleteForm-{{ $categorie->id }}" method="POST" action="{{ route('categories.destroy', $categorie->id) }}" class="inline">
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
