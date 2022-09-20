<?php

use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) {
            $newPost = new Post();
            $newPost->title = $faker->realtext(35);
            $newPost->author = $faker->userName();
            $newPost->post_content = $faker->paragraphs(5, true);
            $newPost->post_image = $faker->imageUrl();
            $newPost->post_date = $faker->dateTimeThisYear();
            $newPost->save();

        }
    }
}
