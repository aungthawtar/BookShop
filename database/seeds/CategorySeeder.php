<?php

use Illuminate\Database\Seeder;
use App\category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
        $categories = ['Translate','Knowledge','Essay Poem','Enjoy'];
        foreach($categories as $category){
            $cat = new Category();
            $cat->category_name = $category;
            $cat->save();
        }
    }
}
