<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // 4.1: Create the Articles Seeder
        $this->call(ArticlesTableSeeder::class);
        // 5.1: Create the Person Seeder
        $this->call(PersonTableSeeder::class);
    }
}
