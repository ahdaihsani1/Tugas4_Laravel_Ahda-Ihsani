<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create(['name' => 'J.K. Rowling']);
        Author::create(['name' => 'George Orwell']);
        Author::create(['name' => 'Haruki Murakami']);
        Author::create(['name' => 'Jane Austen']);
        Author::create(['name' => 'Tere Liye']);
    }
}
