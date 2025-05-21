<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        Genre::create([
            'name' => 'Fantasy',
            'description' => 'Genre yang berisi unsur magis atau dunia khayalan.',
        ]);

        Genre::create([
            'name' => 'Dystopian',
            'description' => 'Genre yang menggambarkan masa depan yang suram dan penuh penindasan.',
        ]);

        Genre::create([
            'name' => 'Romance',
            'description' => 'Genre yang berfokus pada hubungan cinta.',
        ]);

        Genre::create([
            'name' => 'Science Fiction',
            'description' => 'Genre yang mengandung unsur teknologi dan sains masa depan.',
        ]);

        Genre::create([
            'name' => 'Historical Fiction',
            'description' => 'Genre yang mengambil latar sejarah nyata dengan cerita fiksi.',
        ]);
    }
}
