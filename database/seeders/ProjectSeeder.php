<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 50; $i++) {
            $post = new Project();
            $post->title = $faker->sentence(3);
            $post->description = $faker->text();
            $post->slug = Str::of($post->title)->slug('-');
            $post->image = 'https://picsum.photos/200/300';
            $post->save();
        }
    }
}
