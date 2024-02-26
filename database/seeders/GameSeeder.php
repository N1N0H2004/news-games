<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = [
            ['naam' => 'Fortnite',
            'beschrijving' => 'Fortnite is een online computerspel ontwikkeld door Epic Games dat is uitgebracht in 2017. Het is beschikbaar in drie verschillende gamemodes die dezelfde algemene gameplay en engine delen: Fortnite: Save the World, een coöperatieve shooter-survivalgame voor maximaal vier spelers om zombie-achtige wezens te bestrijden en objecten te verdedigen met versterkingen die ze kunnen bouwen; Fortnite Battle Royale, een gratis Battle Royale-game waarin maximaal 100 spelers vechten om de laatste persoon te zijn die overeind blijft; en Fortnite Creative, waar spelers volledige vrijheid krijgen om werelden en strijdarenas te creëren.',
            'foto' => 'public/images/fortnite_logo.jpg',
            'tag_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
                ],

            ['naam' => 'Call Of Duty - Modern Warfare',
            'beschrijving' => 'Call of Duty: Modern Warfare is een first-person shooter ontwikkeld door Infinity Ward. Het spel wordt uitgegeven door Activision en is op 25 oktober 2019 uitgekomen voor PlayStation 4, Windows en Xbox One.[1] Het is het zestiende spel uit de Call of Duty-serie en fungeert tevens als een "soft reboot" van de Modern Warfare-reeks.[2] Het spel bevat een singleplayer- en multiplayermodus.[3] Het spel ondersteunt voor het eerst in de serie cross-platform multiplayer, wat ervoor zorgt dat spelers van zowel de pc- als de consoleversies met elkaar op dezelfde servers kunnen spelen. Hierbij kan gefilterd worden op besturingsapparaat, zodat spelers met een gamepad niet tegen spelers met een muis en toetsenbord hoeven te spelen.',
            'foto' => 'public/images/modernwarfare_logo.jpg',
            'tag_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
            ],

            ['naam' => 'Minecraft',
            'beschrijving' => 'Minecraft is een zogenaamde sandbox-game, waarbij de speler vrij rond kan lopen door een virtuele wereld, zonder een vooraf vastgesteld doel. Het belangrijkste kenmerk van het spel is het reizen door en ontdekken van grotten en kerkers en het bouwen van gebouwen en voorzieningen. De speler kan grondstoffen delven, deze tot andere voorwerpen verwerken en vechten tegen monsters (mobs).',
            'foto' => 'public/images/minecraft_logo.jpg',
            'tag_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            ]
        ];
        DB::table('games')->insert($games);
    }
}
