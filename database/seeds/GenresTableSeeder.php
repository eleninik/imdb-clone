<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->delete();
        
        Genre::create(array(
            'name' => 'Comedy'
        ));

        Genre::create(array(
            'name' => 'Action'
        ));

        Genre::create(array(
            'name' => 'Drama'
        ));

        Genre::create(array(
            'name' => 'Thriller'
        ));

        Genre::create(array(
            'name' => 'Romance'
        ));

        Genre::create(array(
            'name' => 'Western'
        ));

        Genre::create(array(
            'name' => 'Adventure'
        ));

        Genre::create(array(
            'name' => 'Biography'
        ));

        Genre::create(array(
            'name' => 'Sport'
        ));

        Genre::create(array(
            'name' => 'Crime'
        ));

        Genre::create(array(
            'name' => 'Mystery'
        ));

        Genre::create(array(
            'name' => 'Documentary'
        ));

        Genre::create(array(
            'name' => 'History'
        ));
    }
}
