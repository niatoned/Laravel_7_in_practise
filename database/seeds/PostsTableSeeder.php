<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Post::create([
            "title"=>$name='mon premier article',
            "slug"=>\Illuminate\Support\Str::slug($name),
            "content"=>"mon premier contenu"
        ]);

        \App\Post::create([
            "title"=>$name='mon deuxieme article',
            "slug"=>\Illuminate\Support\Str::slug($name),
            "content"=>"mon deuxieme contenu"
        ]);
        \App\Post::create([
            "title"=>$name='mon troisieme article',
            "slug"=>\Illuminate\Support\Str::slug($name),
            "content"=>"mon troisieme contenu"
        ]);
    }
}
