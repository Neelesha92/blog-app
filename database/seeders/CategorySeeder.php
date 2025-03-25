<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create dummy categories
        $categories = [
            ['name' => 'Laravel'],
            ['name' => 'Vue.js'],
            ['name' => 'React'],
            ['name' => 'JavaScript'],
            ['name' => 'PHP'],
        ];

        // Insert categories into the database
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
