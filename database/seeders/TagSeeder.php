<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Create dummy tags
         $tags = [
            ['name' => 'Web Development'],
            ['name' => 'Frontend'],
            ['name' => 'Backend'],
            ['name' => 'JavaScript'],
            ['name' => 'PHP'],
        ];

        // Insert tags into the database
        foreach ($tags as $tag) {
            Tag::create($tag);
        }
    }
}
