<?php

namespace Database\Seeders;

use App\Models\Data;
use App\Models\User;
use App\Models\Book;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(5)->create();
         Book::factory(5)->create();
         Data::factory(5)->create();
    }
}
