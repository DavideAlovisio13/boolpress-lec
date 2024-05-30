<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for( $i = 0; $i < 10; $i++ ) {
            $new_post = new Post();
            $new_post->title = $faker->sentence();
            $new_post->content = $faker->text();
            $new_post->slug = Post::generateSlug($new_post->title);
        }
    }
}
