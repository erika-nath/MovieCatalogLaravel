<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
   /**
     * Run the database seeds.
     * This command populates the movies table with 10 fake records.
     */
    public function run(): void
    {
        \App\Models\Movie::factory(10)->create();
    }
}
