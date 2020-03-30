<?php

use Illuminate\Database\Seeder;
use App\Post;

class TestingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post;
        $post->thumbnail = "lomba.jpg";
        $post->title = "testing post";
        $post->content = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex architecto illo, earum fuga officiis distinctio tenetur unde temporibus eaque nostrum doloremque laudantium consectetur ipsa quidem voluptates, quos assumenda ad accusamus.";
        $post->slug = "testing7";
        $post->published = "1";
        $post->category_id = "4";
        $post->user_id = "1";
        $post->save();

        $post = new Post;
        $post->thumbnail = "tawuran1.jpg";
        $post->title = "testing post";
        $post->content = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex architecto illo, earum fuga officiis distinctio tenetur unde temporibus eaque nostrum doloremque laudantium consectetur ipsa quidem voluptates, quos assumenda ad accusamus.";
        $post->slug = "testing8";
        $post->published = "1";
        $post->category_id = "2";
        $post->user_id = "1";
        $post->save();

        $post = new Post;
        $post->thumbnail = "testing.jpg";
        $post->title = "testing post";
        $post->content = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex architecto illo, earum fuga officiis distinctio tenetur unde temporibus eaque nostrum doloremque laudantium consectetur ipsa quidem voluptates, quos assumenda ad accusamus.";
        $post->slug = "testing9";
        $post->published = "1";
        $post->category_id = "3";
        $post->user_id = "1";
        $post->save();
        


    }
}
