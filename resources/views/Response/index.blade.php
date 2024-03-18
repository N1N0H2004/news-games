<x-app-layout>
    <x-slot name="header">
        <h2 class="font-sans font-bold text-xl">
            {{--            {{ __('Api response') }}--}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">


                <?php
                $link = "https://127.0.0.1:8000/apis";

                $curl = curl_init();

                // URL instellen
                curl_setopt($curl, CURLOPT_URL, $link);

                // Timeout instellen op 5 seconden
                curl_setopt($curl, CURLOPT_TIMEOUT, 5);

                // Returntransfer op TRUE instellen om de output op te vangen
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

                // Uitvoeren van de cURL-verzoek
                $response = curl_exec($curl);

                // Controleren op fouten bij het uitvoeren van het verzoek
                if ($response === false) {
                    echo "Fout bij het uitvoeren van het verzoek: " . curl_error($curl);
                } else {
                    // JSON-decoderen van de respons
                    $game_data = json_decode($response, true);

                    // Controleren op fouten bij het decoderen van de JSON
                    if ($game_data === null || !isset($game_data['games'])) {
                        echo "Fout bij het decoderen van de JSON-reactie of geen games gevonden.";
                    } else {
                        // Loop door de games en toon alleen de naam
                        foreach ($game_data['games'] as $game) {
                            $naam = $game['naam'];
                            echo "<div><strong style='font-size: 36px;'>$naam</strong></div>";
                        }
                    }
                }

                // Sluiten van de cURL-handle
                curl_close($curl);
                ?>


            </div>
        </div>
    </div>

</x-app-layout>
