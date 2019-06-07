<?php

use Illuminate\Database\Seeder;
use App\Season;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seasons')->delete();
        
        Season::create(array(
            'series_id' => '1',
            'season_number' => '1'
        ));

        Season::create(array(
            'series_id' => '2',
            'season_number' => '1'
        ));

        Season::create(array(
            'series_id' => '3',
            'season_number' => '1'
        ));

        Season::create(array(
            'series_id' => '3',
            'season_number' => '2'
        ));

        Season::create(array(
            'series_id' => '3',
            'season_number' => '3'
        ));
    }
}

