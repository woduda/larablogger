<?php

namespace Database\Seeders;

use App\Models\Post;
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
        foreach (range(1, 10) as $i) {
            $factory = Post::factory();
            if ($i % 2 === 0) {
                $factory = $factory->image();
            }
            $factory->create();
        }
    }
}
