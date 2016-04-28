<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Sports Trivia',
            'slug' => 'sports-trivia',
            'description' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Music Trivia',
            'slug' => 'music-trivia',
            'description' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Christmas Trivia',
            'slug' => 'christmas-trivia',
            'description' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Math Trivia',
            'slug' => 'math-trivia',
            'description' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Movie Trivia',
            'slug' => 'movie-trivia',
            'description' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'History Trivia',
            'slug' => 'history-trivia',
            'description' => '',
        ]);
    }
}
