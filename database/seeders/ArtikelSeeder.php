<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $artikels = [
            [
                'titel' => 'Fortnite',
                'inhoud' => 'Dit is de inhoud over een artikel over Fortnite',
                'tag_id' => 1,
                'categorie_id' => 1,
                'game_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'titel' => 'Call Of Duty - Modern Warfare',
                'inhoud' => 'Dit is de inhoud over een artikel over Call of Duty',
                'tag_id' => 2,
                'categorie_id' => 2,
                'game_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'titel' => 'Minecraft',
                'inhoud' => 'Dit is de inhoud over een artikel over Minecraft',
                'tag_id' => 3,
                'categorie_id' => 3,
                'game_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        DB::table('artikels')->insert($artikels);
    }
}
