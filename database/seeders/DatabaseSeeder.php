<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);

        Post::factory(10)->create([
            'user_id' => $user->id
        ])->each(fn ($post) => Comment::factory(5)->create(['post_id' => $post->id]));
    }
}
