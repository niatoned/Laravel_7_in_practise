<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::create([
            "name"=>$name='ma categorie 1',
            "slug"=>\Illuminate\Support\Str::slug($name),
            "active"=>true
        ]);

        \App\Category::create([
            "name"=>$name='ma categorie 2',
            "slug"=>\Illuminate\Support\Str::slug($name),
            "active"=>true
        ]);
        \App\Category::create([
            "name"=>$name='ma categorie 3',
            "slug"=>\Illuminate\Support\Str::slug($name),
            "active"=>false
        ]);
    }
}
