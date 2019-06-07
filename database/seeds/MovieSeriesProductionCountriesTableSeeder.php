<?php

use Illuminate\Database\Seeder;
use App\MovieSeriesProductionCountries;

class MovieSeriesProductionCountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie_series_production_countries')->delete();

        MovieSeriesProductionCountries::create(array(
            'movie_id' => 1,
            'production_country_id' => 3
        ));
        MovieSeriesProductionCountries::create(array(
            'movie_id' => 2,
            'production_country_id' => 3
        ));
        MovieSeriesProductionCountries::create(array(
            'movie_id' => 3,
            'production_country_id' => 3
        ));
        MovieSeriesProductionCountries::create(array(
            'movie_id' => 4,
            'production_country_id' => 3
        ));
        MovieSeriesProductionCountries::create(array(
            'movie_id' => 5,
            'production_country_id' => 1
        ));
        MovieSeriesProductionCountries::create(array(
            'movie_id' => 6,
            'production_country_id' => 6
        ));
        MovieSeriesProductionCountries::create(array(
            'movie_id' => 7,
            'production_country_id' => 3
        ));
    }
}