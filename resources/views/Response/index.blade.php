<x-app-layout>
    <x-slot name="header">
        <h2 class="font-sans font-bold text-xl">
            {{-- {{ __('Api response') }} --}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form onsubmit="return checkDownload()">
{{--                    https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf--}}
                    <label for="url">Voer de URL van het PDF-bestand in:</label><br>
                    <input type="text" id="url" name="url"><br><br>
                    <button type="submit">Check Downloadbaarheid</button>
                </form>
                <script>
                    function checkDownload() {
                        var urlInput = document.getElementById("url").value;
                        var url = "http://127.0.0.1:8000/functions.php?url=" + urlInput;
                        fetch(url)
                            .then(response => response.json())
                            .then(data => {
                                if (data.downloadable) {
                                    alert("Ja, deze is downloadbaar.");
                                } else {
                                    alert("Nee, is niet downloadbaar.");
                                }
                            })
                            .catch(error => {
                                console.error('Er is een fout opgetreden:', error);
                            });
                        return false; // Voorkom standaard gedrag van formulierindiening
                    }
                </script>
            </div>
        </div>
    </div>
</x-app-layout>
