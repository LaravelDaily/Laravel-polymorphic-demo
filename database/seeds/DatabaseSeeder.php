<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Product;
use App\Photo;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 10)->create();
        factory(Product::class, 10)->create();
        factory(Photo::class, 10)->create();
    }
}
