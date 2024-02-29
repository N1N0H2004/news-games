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
            'foto' => '/images/fortnite_logo.jpg',
            'tag_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
                ],

            ['naam' => 'Call Of Duty - Modern Warfare',
            'beschrijving' => 'Call of Duty: Modern Warfare is een first-person shooter ontwikkeld door Infinity Ward. Het spel wordt uitgegeven door Activision en is op 25 oktober 2019 uitgekomen voor PlayStation 4, Windows en Xbox One.[1] Het is het zestiende spel uit de Call of Duty-serie en fungeert tevens als een "soft reboot" van de Modern Warfare-reeks.[2] Het spel bevat een singleplayer- en multiplayermodus.[3] Het spel ondersteunt voor het eerst in de serie cross-platform multiplayer, wat ervoor zorgt dat spelers van zowel de pc- als de consoleversies met elkaar op dezelfde servers kunnen spelen. Hierbij kan gefilterd worden op besturingsapparaat, zodat spelers met een gamepad niet tegen spelers met een muis en toetsenbord hoeven te spelen.',
            'foto' => '/images/cod_logo.jpg',
            'tag_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
            ],

            ['naam' => 'Minecraft',
            'beschrijving' => 'Minecraft is een zogenaamde sandbox-game, waarbij de speler vrij rond kan lopen door een virtuele wereld, zonder een vooraf vastgesteld doel. Het belangrijkste kenmerk van het spel is het reizen door en ontdekken van grotten en kerkers en het bouwen van gebouwen en voorzieningen. De speler kan grondstoffen delven, deze tot andere voorwerpen verwerken en vechten tegen monsters (mobs).',
            'foto' => '/images/minecraft_logo.jpg',
            'tag_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            ],

            ['naam' => 'Monopoly',
            'beschrijving' => 'Het spel monopoly (Engels voor monopolie) is een van de bestverkochte bordspellen ter wereld. Het is in 26 talen verkrijgbaar. Sinds 1935, het jaar dat het spel door Parker Brothers op de markt gebracht werd, zijn ruim 200 miljoen exemplaren verkocht. Ook verschijnen regelmatig bijzondere edities.',
            'foto' => '/images/monopoly_logo.jpg',
            'tag_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            ],

            ['naam' => 'Roblox',
                'beschrijving' => "Roblox (/ˈroʊblɒks/) is an online game platform and game creation system developed by Roblox Corporation that allows users to program games and play games created by other users. Created by David Baszucki and Erik Cassel in 2004 and released in 2006, the platform hosts user-created games of multiple genres coded in the programming language Lua. For most of Roblox's history, it was relatively small, both as a platform and as a company. Roblox began to grow rapidly in the second half of the 2010s, and this growth has been accelerated by the COVID-19 pandemic.",
                'foto' => '/images/roblox_logo_v2.jpg',
                'tag_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('games')->insert($games);
    }
}
