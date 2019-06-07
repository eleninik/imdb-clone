<?php

use Illuminate\Database\Seeder;
use App\Profession;

class ProfessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professions')->delete();
        
          Profession::create(array(
              'name' => 'Actor'
          ));

          Profession::create(array(
              'name' => 'Director'
          ));

          Profession::create(array(
              'name' => 'Writer'
          ));

    }
}