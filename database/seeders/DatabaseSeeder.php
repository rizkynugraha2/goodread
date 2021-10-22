<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        Category::create([
            'name' => 'Comics',
            'slug' => 'comics'
        ]);

        Category::create([
            'name' => 'Science Fiction',
            'slug' => 'science-fiction'
        ]);

        Category::create([
            'name' => 'Action and Adventure',
            'slug' => 'action-and-adventure'
        ]);

        Category::create([
            'name' => 'Classics',
            'slug' => 'classics'
        ]);

        Category::create([
            'name' => 'Detective and Mystery',
            'slug' => 'detective-and-mystery'
        ]);

        Book::factory(20)->create();
    }
}
