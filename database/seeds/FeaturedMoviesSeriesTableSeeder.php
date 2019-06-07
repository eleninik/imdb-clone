<?php

use Illuminate\Database\Seeder;
use App\FeaturedMoviesSeries;

class FeaturedMoviesSeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('featured_movies_series')->delete();
    
        FeaturedMoviesSeries::create(array(
            'featured_id' => '1',
            'movie_id' => '1'   
        ));

        FeaturedMoviesSeries::create(array(
            'featured_id' => '1',
            'series_id' => '1'   
        ));

        FeaturedMoviesSeries::create(array(
            'featured_id' => '2',
            'movie_id' => '2'  
        ));
        
        FeaturedMoviesSeries::create(array(
            'featured_id' => '2',
            'series_id' => '2'  
        ));

        FeaturedMoviesSeries::create(array(
            'featured_id' => '3',
            'movie_id' => '3'  
        ));

        FeaturedMoviesSeries::create(array(
            'featured_id' => '3',
            'series_id' => '3'  
        ));
    
    }
}
