<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get or create a user
        $user = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin',
                'password' => bcrypt('password'),
            ]
        );

        // Get all categories
        $categories = Category::all();

        // Ensure categories exist
        if ($categories->isEmpty()) {
            $this->command->error('No categories found. Please run the CategorySeeder first.');
            return;
        }

        // Create dummy posts
        $posts = [
            [
                'title' => 'Introduction to Laravel',
                'content' => 'Laravel is a PHP framework for web artisans.',
                'category_id' => $categories->where('name', 'Laravel')->first()->id,
                'user_id' => $user->id,
            ],
            [
                'title' => 'Getting Started with Vue.js',
                'content' => 'Vue.js is a progressive JavaScript framework.',
                'category_id' => $categories->where('name', 'Vue.js')->first()->id,
                'user_id' => $user->id,
            ],
            [
                'title' => 'React Basics',
                'content' => 'React is a JavaScript library for building user interfaces.',
                'category_id' => $categories->where('name', 'React')->first()->id,
                'user_id' => $user->id,
            ],
        ];

        // Insert posts into the database
        foreach ($posts as $post) {
            Post::create($post);
        }
    }
    
}
