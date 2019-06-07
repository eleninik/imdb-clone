<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('MoviesTableSeeder');
        $this->call('SeriesTableSeeder');
        $this->call('PeopleTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('SeasonsTableSeeder');
        $this->call('EpisodesTableSeeder');
        $this->call('PeopleProfessionsTableSeeder');
        $this->call('ProfessionsTableSeeder');
        //$this->call('WatchlistsTableSeeder');
        $this->call('GenresTableSeeder');
        $this->call('ProductionCountriesTableSeeder');        
        $this->call('StudiosTableSeeder');  
        $this->call('FeaturedTableSeeder');
        $this->call('GenresMoviesSeriesTableSeeder');  
        $this->call('MoviesSeriesStudioTableSeeder');    
        $this->call('MovieSeriesProductionCountriesTableSeeder');
        $this->call('ReviewsTableSeeder');
        $this->call('CommentsTableSeeder');
        // $this->call('FeaturedMoviesSeriesTableSeeder');
    }
}
