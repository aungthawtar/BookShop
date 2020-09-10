<?php

use Illuminate\Database\Seeder;
use App\user;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i<10; $i++){
            $user = new user;
            $user->name = 'username'.$i;
            $user->email = "username".$i."@gmail.com";
            $user->password = bcrypt('password');
            $user->save();
        }
    }
}
