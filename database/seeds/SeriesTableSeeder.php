<?php

use Illuminate\Database\Seeder;
use App\Series;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('series')->delete();

        Series::create(array(
            'title' => 'Planet Earth 2', 
            'year' => '2016', 
            'age_rating' => 'TV-G',
            'plot' => 'David Attenborough returns in this breathtaking documentary showcasing life on Planet Earth.',
            'production_country_id' => '1',
            'awards'=> 'Won 2 Primetime Emmys. Another 5 wins & 19 nominations.',
            'poster' => '/uy5QoTu8fc6fGXMCTMbpQJFUEB0.jpg',
            'backdrop' => '/xIt4DDYipMPNu2HDBrhUS4ndSYb.jpg',
            'trailer' => '3TfxHdVhz0M',
            'studio_id' => '1',
            'media_website' => 'amdb.dev'
        ));

        Series::create(array(
            'title' => 'Band Of Brothers', 
            'year' => '2001', 
            'age_rating' => 'TV-MA',
            'plot' => 'The story of Easy Company of the U.S. Army 101st Airborne Division, and their mission in World War II Europe, from Operation Overlord, through V-J Day.',
            'production_country_id' => '2',
            'awards'=> 'Won 1 Golden Globe. Another 33 wins & 24 nominations.',
            'poster' => '/yjqu0KEVAWz9eJQBvzrQMFlGD84.jpg',
            'backdrop' => '/1LrtAhWPSEetJLjblXvnaYtl7eA.jpg',
            'trailer' => '1wlYPlwjGOY',
            'studio_id' => '3',
            'media_website' => 'amdb.dev'
        ));

        Series::create(array(
            'title' => 'Gomorrah', 
            'year' => '2014', 
            'age_rating' => 'TV-MA',
            'plot' => 'Ciro disregards tradition in his attempt to become the next boss of his crime syndicate. The internal power struggle puts him and his entire family\'s life at risk.',
            'production_country_id' => '2',
            'awards'=> ' 8 wins & 2 nominations.',
            'poster' => '/hbyns1rKCL1f9l0brzmwLHv6smL.jpg',
            'backdrop' => '/szljytU8PkX9gMeMYmLp7H7zhVA.jpg',
            'trailer' => 'nkTpyc-ZgWM',
            'studio_id' => '3',
            'media_website' => 'amdb.dev'
        ));
        
    }

}


