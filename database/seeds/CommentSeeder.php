<?php

use Illuminate\Database\Seeder;
use App\comment;
class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $comment = Faker\Factory::create();
        for($i = 0; $i<50; $i++){
            $comments = new comment;
            $comments->comment = $comment->text(20);
            $comments->post_id = rand(1,100);
            $comments->user_id = rand(1,10);
            $comments->save();
        }
    }
}
