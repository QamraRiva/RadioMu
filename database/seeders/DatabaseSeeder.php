<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();

        Category::create([
            'name' => 'Fantasy',
            'slug' => 'fantasy'
        ]);
        Category::create([
            'name' => 'Comedy',
            'slug' => 'comedy'
        ]);
        Category::create([
            'name' => 'Romance',
            'slug' => 'romance'
        ]);

        Article::factory(25)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
