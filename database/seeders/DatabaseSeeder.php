<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            Quiz_CategoriesSeeder::class,
            Quiz_yearsSeeder::class,
            QuizzesSeeder::class,
            ChoicesSeeder::class,
            usersSeeder::class,
    ]);
    }
}