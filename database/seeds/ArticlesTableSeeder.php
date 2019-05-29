<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 3.1: Factory generate 30 article seed.
        factory(App\Article::class, 30)->create();
    }
}
