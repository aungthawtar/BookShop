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
        $this->call(AuthorSeeder::class);
        $this->call(CategorySeeder::class);
        // $this->call(TranslateSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(PostSeeder::class);
        // $this->call(RoleSeeder::class);
        $this->call(userSeeder::class);       
    }
}
