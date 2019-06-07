<?php

use Illuminate\Database\Seeder;
use App\MovieStudioSeries;

class MoviesSeriesStudioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie_studio_series')->delete();
    
        MovieStudioSeries::create(array(
            'movie_id' => 1,
            'studio_id' => 1
        ));
        MovieStudioSeries::create(array(
            'movie_id' => 2,
            'studio_id' => 2
        ));
        MovieStudioSeries::create(array(
            'movie_id' => 3,
            'studio_id' => 3
        ));
        MovieStudioSeries::create(array(
            'movie_id' => 4,
            'studio_id' => 5
        ));
        MovieStudioSeries::create(array(
            'movie_id' => 5,
            'studio_id' => 6
        ));
        MovieStudioSeries::create(array(
            'movie_id' => 6,
            'studio_id' => 7
        ));
        MovieStudioSeries::create(array(
            'movie_id' => 7,
            'studio_id' => 8
        ));
        MovieStudioSeries::create(array(
            'movie_id' => 8,
            'studio_id' => 9
        ));
        MovieStudioSeries::create(array(
            'movie_id' => 9,
            'studio_id' => 10
        ));
        MovieStudioSeries::create(array(
            'movie_id' => 10,
            'studio_id' => 2
        ));
        MovieStudioSeries::create(array(
            'series_id' => 1,
            'studio_id' => 4
        ));
        MovieStudioSeries::create(array(
            'series_id' => 2,
            'studio_id' => 3
        ));
        MovieStudioSeries::create(array(
            'series_id' => 3,
            'studio_id' => 11
        ));
    }
}