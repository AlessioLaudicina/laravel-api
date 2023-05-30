<?php

namespace Database\Seeders;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $newPost = new Post();
            $newPost->title = $faker->sentence(4);
            $newPost->content = $faker->text(500);
            $newPost->slug = Str::slug($newPost->title , '-');
            $newPost->save();
        }
    }
}
