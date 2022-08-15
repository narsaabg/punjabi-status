<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JokesCategory;

class JokesCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JokesCategory::create([
            'name' => 'Children',
            'slug' => 'children',
            'tags' => 'children jokes, punjabi children jokes,true children jokes'
        ]);
    }
}
