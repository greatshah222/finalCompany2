<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user= App\User::create([
           'name'=>'Bishal Shah',
           'email'=>'great.shah222@icloud.com',
           'password'=>bcrypt('password'),
           'admin'=>1


       ]);
       App\Profile::create([
           'user_id' => $user->id,
           'avatar'=>'avatar/2.jpg',

           'about'=>' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut blanditiis exercitationem impedit veniam voluptatem? Aliquam aliquid assumenda aut error itaque laudantium modi repudiandae. Consequuntur cumque impedit iure natus quaerat velit.',
           'facebook'=>'facebook.com',
           'youtube'=>'youtube.com'



       ]);
    }
}
