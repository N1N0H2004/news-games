<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['naam' => 'Xbox',
            'created_at' => now(),
            'updated_at' => now()
            ],

            ['naam' => 'Play Station5',
            'created_at' => now(),
            'updated_at' => now()
            ],

            ['naam' => 'Nintendo Switch',
            'created_at' => now(),
            'updated_at' => now()
            ],
        ];
        DB::table('tags')->insert($tags);
    }
}
