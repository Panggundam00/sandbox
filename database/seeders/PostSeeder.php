<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post ;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post ;
        $post->title = 'hello world' ;
        $post->content = 'this is first post' ;
        $post->user_id = 1 ;
        $post->save() ;

        $post = new Post ;
        $post->title = 'hello crewmate' ;
        $post->content = 'this is second post' ;
        $post->user_id = 2 ;
        $post->save() ;

    }
}
