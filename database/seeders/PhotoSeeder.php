<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $photos = [
            ['naam' => 'Fortnite-logo',
                'foto' => '/photos/fortnite_logo.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],

            ['naam' => 'Call Of Duty - Modern Warfare-logo',
                'foto' => '/photos/cod_logo.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            ['naam' => 'Minecraft-logo',
                'foto' => '/photos/minecraft_logo.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            ['naam' => 'Monopoly-logo',
                'foto' => '/photos/monopoly_logo.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('photos')->insert($photos);
    }
}
