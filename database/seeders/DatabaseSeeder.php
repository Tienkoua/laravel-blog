<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        // User::truncate();
        //Category::truncate();
        // Post::truncate();

        $user = User::factory()->create([
             'name'=>'Winston'
        ]);
        $posts = Post::factory(5)->create([
            'user_id'=>$user->id
        ]);

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // Post::create([
        //     'category_id' => $family->id,
        //     'user_id' => $user->id,
        //     'slug' => 'my-first-post',
        //     'title' => 'My Family Post',
        //     'excerpt' => 'Excerpt for my post',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus, voluptatibus.'
        // ]);

        // Post::create([
        //     'category_id' => $work->id,
        //     'user_id' => $user->id,
        //     'slug' => 'my-second-post',
        //     'title' => 'My Family Post',
        //     'excerpt' => 'Excerpt for my post',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus, voluptatibus.'
        // ]);

    }
}
