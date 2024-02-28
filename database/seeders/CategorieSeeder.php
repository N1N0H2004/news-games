<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['naam' => '---',
            'created_at' => now(),
            'updated_at' => now()
            ],

            ['naam' => 'Review',
            'created_at' => now(),
            'updated_at' => now()
            ],

            ['naam' => 'Interview',
            'created_at' => now(),
            'updated_at' => now()
            ],

            ['naam' => 'Nieuws',
            'created_at' => now(),
            'updated_at' => now()
            ],
        ];
        DB::table('categories')->insert($categories);
    }
}
