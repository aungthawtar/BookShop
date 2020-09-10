<?php

use Illuminate\Database\Seeder;
use App\author;
use Illuminate\Contracts\Validation\ImplicitRule;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        author::truncate();
        $myauthors = ['Chan Myae Win','Thint Luu','Khoon Nyo Thway','Kyaw Nyo Thway','Hpraw San','Thoe Saung'];     
            foreach($myauthors as $myauthor){
                $author = new author();
                $author->name = $myauthor;
                $author->save();
            }
        
    }
}
