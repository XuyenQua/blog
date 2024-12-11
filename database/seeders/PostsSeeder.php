<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'category_id' => 1,
                'title' => 'Sample Title 1',
                'short_description' => 'This is a short description for sample title 1.',
                'slug' => Str::slug('Sample Title 1'),
                'image' => 'images/sample1.jpg',
                'content' => '<p>This is the content for sample title 1.</p>',
                'views' => 10,
                'is_published' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => 2,
                'title' => 'Sample Title 2',
                'short_description' => 'This is a short description for sample title 2.',
                'slug' => Str::slug('Sample Title 2'),
                'image' => 'images/sample2.jpg',
                'content' => '<p>This is the content for sample title 2.</p>',
                'views' => 25,
                'is_published' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => 3,
                'title' => 'Sample Title 3',
                'short_description' => 'This is a short description for sample title 3.',
                'slug' => Str::slug('Sample Title 3'),
                'image' => 'images/sample3.jpg',
                'content' => '<p>This is the content for sample title 3.</p>',
                'views' => 5,
                'is_published' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
