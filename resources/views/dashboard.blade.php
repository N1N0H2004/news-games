
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <?php
    $latitude = getenv('OPEN_WEATHER_LATITUDE');
    $longitude = getenv('OPEN_WEATHER_LONGITUDE');
    $api_key = getenv('OPEN_WEATHER_MAP_KEY');

    $link = "https://api.openweathermap.org/data/2.5/weather?units=metric&lat=$latitude&lon=$longitude&appid=$api_key";

    $weather_data = json_decode(file_get_contents($link), true);

    //Kijkt of er wel data beschikbaar is
    //Main verwijst naar de hoofd-weergegevens
    if ($weather_data && isset($weather_data['main'])) {
        $name = $weather_data['name'];
        $temp = number_format($weather_data['main']['temp'], 1);
        $feels_like = number_format($weather_data['main']['feels_like'], 1);
        $temp_min = number_format($weather_data['main']['temp_min'], 1);
        $temp_max = number_format($weather_data['main']['temp_max'], 1);
        $weather= $weather_data['weather'][0]['main'];
        $datum = date("d-m-Y");
?>

    <div style='padding-top: 30px; display: flex; padding-left: 100px;'>
        <div style='background-color: #6B7280; border-radius: 0.75rem; width: 680px; height: 300px; border-color: #000000; border-width: 4px; display: flex;'>
            <!-- Linker deel met naam, temperatuur en canvas -->
            <div style='flex: 2; display: flex; flex-direction: column; justify-content: center; align-items: center; padding-left: 10px; padding-right: 6px;'>
                <strong style='font-size: 36px;'> <?php echo $name; ?> </strong>
                <div style='font-size: 48px; font-weight: 600;'> <?php echo $temp; ?> °C </div>
                <canvas id="weather" width="148" height="96" style='margin-top: 8px; margin-bottom: 8px;'></canvas>
            </div>


            <!-- Rechter deel met feels_like, temp_min en temp_max -->
            <div style='flex: 1; display: flex; flex-direction: column; justify-content: center; align-items: flex-start; '>
                <div style='font-size: 22px;'> Gevoelstemperatuur: <br><?php echo $feels_like; ?> °C </div>
                <div style='font-size: 22px;'> Min temperatuur: <br><?php echo $temp_min; ?> °C </div>
                <div style='font-size: 22px;'> Max temperatuur: <br><?php echo $temp_max; ?> °C </div>
            </div>
        </div>
    </div>


    <?php
    } else {
        echo "Kon geen weerdata ophalen.";
    }
    ?>

    <script src="{{asset('js/skycons.js')}}"></script>

    <script>
        var weather = '{{ $weather_data['weather'][0]['main'] }}';
        var icons = new Skycons({"color": "white"});
        switch (weather.toLowerCase()) {
            case 'clear':
                icons.add("weather", Skycons.CLEAR_DAY);
                break;
            case 'clouds':
                icons.add("weather", Skycons.CLOUDY);
                break;
            case 'rain':
                icons.add("weather", Skycons.RAIN);
                break;
            case 'snow':
                icons.add("weather", Skycons.SNOW);
                break;
            case 'wind':
                icons.add("weather", Skycons.WIND);
                break;
            case 'fog':
                icons.add("weather", Skycons.FOG);
                break;
            case 'sleet':
                icons.add("weather", Skycons.SLEET);
                break;
            case 'partly cloudy':
                icons.add("weather", Skycons.PARTLY_CLOUDY_DAY);
                break;
            default:
                icons.add("weather", Skycons.CLEAR_DAY);
        }
        icons.play();
    </script>

    {{------------------------------------------}}
    {{------------------------------------------}}
    {{------------------------------------------}}


    <div style='padding-top: 30px; display: flex; padding-left: 100px;'>
        <div style='background-color: #6B7280; border-radius: 0.75rem; width: 680px; height: 300px; border-color: #000000; border-width: 4px; display: flex;'>
            <div style='flex: 2; display: flex; flex-direction: column; justify-content: center; align-items: center; padding-left: 10px; padding-right: 6px;'>
                <strong style='font-size: 36px;'>VrijdagMiddagBorrel </strong>
                <div id="timer" style='font-size: 24px; font-weight: 600;'> </div>
                <canvas id="weather" width="148" height="96" style='margin-top: 8px; margin-bottom: 8px;'></canvas>
            </div>
        </div>
    </div>

    <script>
        // Functie om de timer bij te werken
        function updateTimer() {
            // Doel datum en tijd instellen (Vrijdagmiddag 16:30)
            var targetDate = new Date();
            targetDate.setDate(targetDate.getDate() + (5 - targetDate.getDay())); // Vrijdag
            targetDate.setHours(16, 30, 00, 00); //16:30

            // Huidige datum en tijd krijgen
            var currentDate = new Date();

            // Tijdverschil berekenen tussen doel en huidige tijd
            var difference = targetDate.getTime() - currentDate.getTime();

            // Als het verschil negatief is, de timer is afgelopen
            if (difference <= 0) {
                document.getElementById("timer").innerHTML = "VrijdagMiddagBorrel is aan de gang!";
                // Timer opnieuw starten na een half uur
                setTimeout(function() {
                    updateTimer(); // Timer opnieuw starten
                }, 30 * 60 * 1000); // 30 minuten in milliseconden
            } else {
                // Tijd in milliseconden omzetten naar dagen, uren, minuten en seconden
                var days = Math.floor(difference / (1000 * 60 * 60 * 24));
                difference %= (1000 * 60 * 60 * 24);
                var hours = Math.floor(difference / (1000 * 60 * 60));
                difference %= (1000 * 60 * 60);
                var minutes = Math.floor(difference / (1000 * 60));
                difference %= (1000 * 60);
                var seconds = Math.floor(difference / 1000);

                // Timerweergave bijwerken
                document.getElementById("timer").innerHTML = days + " dagen " + hours + " uur " + minutes + " minuten " + seconds + " seconden ";
            }
        }

        // Eerste keer de timer bijwerken
        updateTimer();

        // Timer bijwerken elke seconde
        setInterval(updateTimer, 1000);
    </script>

    <br><br><br><br><br><br><br><br>


    <?php
    $Array = array("Bench", "Sqaut", "Deadlift");


    $Object = new stdClass();
    $Object->naam = "Ninoh van Dijke";
    $Object->leeftijd = 19;
    $Object->adres = "Hondsdijk 10";

    var_dump($Array);
    echo "<br>";
    var_dump($Object);

    ?>

</x-app-layout>


