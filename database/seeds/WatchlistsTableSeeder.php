<?php

use Illuminate\Database\Seeder;
use App\Watchlist;

class WatchlistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('watchlists')->delete();
        
        Watchlist::create(array(
            'user_id' => '2',
            'movie_id' => '2',
            'watched' => false
        ));

        Watchlist::create(array(
            'user_id' => '2',
            'movie_id' => '4',
            'watched' => false
        ));

        Watchlist::create(array(
            'user_id' => '2',
            'movie_id' => '6',
            'watched' => true
        ));

        Watchlist::create(array(
            'user_id' => '2',
            'movie_id' => '8',
            'watched' => true
        ));
    }
}
