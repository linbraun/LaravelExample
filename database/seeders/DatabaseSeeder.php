<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;
use \App\Models\Comment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // User::truncate();
        // Post::truncate();
        // Category::truncate();

        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);

        Post::factory(30)->create([
            'user_id' => $user->id
        ]);

        // $user = User::factory()->create();

        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // Category::create([
        //     'name' => 'Hobbies',
        //     'slug' => 'hobbies'
        // ]);

        // Post::create([
        //     'title' => 'My Family Post',
        //     'slug' => 'my-family-post',
        //     'excerpt' => 'Excerpt from my family post.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc laoreet nulla ut tortor ullamcorper tempor. Ut metus neque, ultrices vel nibh eu, mattis feugiat orci. Vestibulum porttitor neque ligula, quis elementum quam tristique at. Nulla sit amet ultrices est. Etiam rhoncus diam ut libero ultrices eleifend. Proin sagittis consectetur pharetra. Nunc in mattis massa, at fringilla elit.'
        // ]);
    }
}
