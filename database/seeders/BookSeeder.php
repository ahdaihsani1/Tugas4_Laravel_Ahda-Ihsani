<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Laskar Pelangi',
            'description' => 'Novel tentang perjuangan anak-anak di Belitung',
            'price' => 85000,
            'stock' => 10,
            'cover_photo' => 'laskar_pelangi.jpg',
            'genre_id' => 1,
            'author_id' => 1
        ]);

        Book::create([
            'title' => 'Negeri 5 Menara',
            'description' => 'Kisah anak pondok yang punya mimpi tinggi',
            'price' => 95000,
            'stock' => 8,
            'cover_photo' => 'negeri_5_menara.jpg',
            'genre_id' => 1,
            'author_id' => 2
        ]);

        Book::create([
            'title' => 'Bumi',
            'description' => 'Petualangan anak muda dengan kekuatan aneh',
            'price' => 78000,
            'stock' => 15,
            'cover_photo' => 'bumi.jpg',
            'genre_id' => 2,
            'author_id' => 3
        ]);

        Book::create([
            'title' => 'Dilan 1990',
            'description' => 'Cinta remaja di era 90-an antara Dilan dan Milea',
            'price' => 67000,
            'stock' => 12,
            'cover_photo' => 'dilan_1990.jpg',
            'genre_id' => 3,
            'author_id' => 4
        ]);

        Book::create([
            'title' => 'Rindu',
            'description' => 'Kisah para penumpang kapal dengan rahasia masing-masing',
            'price' => 99000,
            'stock' => 9,
            'cover_photo' => 'rindu.jpg',
            'genre_id' => 2,
            'author_id' => 5
        ]);
    }
}
