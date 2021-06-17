<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 5; $i++) {
            $new_post = new Post();

            $new_post->title = 'Post title '. ($i + 1);
            $new_post->slug = Str::slug($new_post->title, '-');
            $new_post->content = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi illo dolorem consectetur quas eaque quis culpa ipsum eum aut cum. Officia laudantium consequatur mollitia animi eaque quibusdam cum cupiditate sint!';

            $new_post->save();
        }
    }
}
