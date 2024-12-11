<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Technology', 'slug' => 'slug-1', 'description' => 'All about technology'],
            ['name' => 'Health', 'slug' => 'slug-2', 'description' => 'Health and wellness topics'],
            ['name' => 'Travel', 'slug' => 'slug-3', 'description' => 'Travel guides and tips'],
            ['name' => 'Food', 'slug' => 'slug-4', 'description' => 'Recipes and food reviews'],
            ['name' => 'Education', 'slug' => 'slug-5', 'description' => 'Educational resources and articles'],
        ]);
    }
}
