<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(TagSeeder::class);
        $this->call(CategorieSeeder::class);
        $this->call(GameSeeder::class);
        $this->call(PhotoSeeder::class);
        $this->call(ArtikelSeeder::class);

        $ninoh = User::factory()->create([
            'name' => 'Ninoh van Dijke',
            'email' => 'ninohvdijke@gmail.com',
        ]);
    }
}
