<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        
          User::create(array(
              'name' => 'Robert',
              'username' => 'Laravel_master',
              'email' => 'tester@test.com',
              'type' => 'admin',
              'password' => bcrypt('password'),
              'profile_picture' => 'https://place-hold.it/100x100'
          ));

          User::create(array(
              'name' => 'Alve',
              'username' => 'The_Engine',
              'email' => 'example@example.com',
              'type' => 'admin',
              'password' => bcrypt('password'),
              'profile_picture' => 'https://ih0.redbubble.net/image.321050320.0769/flat,800x800,075,f.jpg'
          ));

          User::create(array(
              'name' => 'Eleni',
              'username' => 'Mood_Swing',
              'email' => 'example@admin.com',
              'type' => 'admin',
              'password' => bcrypt('password'),
              'profile_picture' => 'https://images.fineartamerica.com/images-medium-large-5/abstract-retro-geometric-pattern-atthamee-ni.jpg'
          ));

    }
}
