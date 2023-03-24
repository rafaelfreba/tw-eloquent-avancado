<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Details;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //criando o post
        Post::factory()->create()->each(function($post){
            //criando comentários para o post criado
            $post->comments()->saveMany(
                Comment::factory()->count(3)->make([
                    'post_id' => $post->id
                ])
            );
            //criando categorias para o post criado
            $post->categories()->save(
                Category::factory()->make()
            );
            //criando detalhes para o post criado
            $post->details()->save(
                Details::factory()->make()
            );
        });
    }
}
