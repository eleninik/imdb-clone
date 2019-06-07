<?php

use Illuminate\Database\Seeder;
use App\Studio;

class StudiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('studios')->delete();

        Studio::create(array(
            'name' => 'Walt Disney Pictures'
        ));

        Studio::create(array(
            'name' => 'Columbia Pictures'
        ));

        Studio::create(array(
            'name' => 'DreamWorks'
        ));

        Studio::create(array(
            'name' => 'BBC Nature'
        ));

        Studio::create(array(
            'name' => 'Endgame Entertainment'
        ));

        Studio::create(array(
            'name' => 'IM Global'
        ));

        Studio::create(array(
            'name' => 'K/O Paper Products'
        ));

        Studio::create(array(
            'name' => 'Miramax'
        ));
        
        Studio::create(array(
            'name' => 'Visiona Romantica'
        ));

        Studio::create(array(
            'name' => 'Twentieth Century Fox'
        ));

        Studio::create(array(
            'name' => 'Cattleya'
        ));
    }
}
