<?php

namespace Database\Seeders;
use App\Models\Author;
use App\Models\Category;
use App\Models\Content;
use App\Models\Genre;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Author::factory(2)->create();
        Category::factory()->count(0)->create();
        Content::factory(100)->create();
        Genre::factory(2)->create();
        
    }
}
