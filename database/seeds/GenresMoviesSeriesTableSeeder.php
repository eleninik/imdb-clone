<?php

use Illuminate\Database\Seeder;
use App\GenreMoviesSeries;

class GenresMoviesSeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genre_movie_series')->delete();
    

        GenreMoviesSeries::create(array(
            'movie_id' => 1,
            'genre_id' => 2
        ));
        GenreMoviesSeries::create(array(
            'movie_id' => 1,
            'genre_id' => 6
        ));
        GenreMoviesSeries::create(array(
            'movie_id' => 1,
            'genre_id' => 7
        ));
        GenreMoviesSeries::create(array(
            'movie_id' => 2,
            'genre_id' => 3
        ));
        GenreMoviesSeries::create(array(
            'movie_id' => 2,
            'genre_id' => 8
        ));
        GenreMoviesSeries::create(array(
            'movie_id' => 3,
            'genre_id' => 1
        ));
        GenreMoviesSeries::create(array(
            'movie_id' => 3,
            'genre_id' => 9
        ));
        GenreMoviesSeries::create(array(
            'movie_id' => 4,
            'genre_id' => 8
        ));
        GenreMoviesSeries::create(array(
            'movie_id' => 4,
            'genre_id' => 3
        ));
        GenreMoviesSeries::create(array(
            'movie_id' => 4,
            'genre_id' => 4
        ));
        GenreMoviesSeries::create(array(
            'movie_id' => 5,
            'genre_id' => 3
        ));
        GenreMoviesSeries::create(array(
            'movie_id' => 6,
            'genre_id' => 2
        ));
        GenreMoviesSeries::create(array(
            'movie_id' => 6,
            'genre_id' => 7
        ));
        GenreMoviesSeries::create(array(
            'movie_id' => 6,
            'genre_id' => 1
        ));
        GenreMoviesSeries::create(array(
            'movie_id' => 7,
            'genre_id' => 10
        ));
        GenreMoviesSeries::create(array(
            'movie_id' => 7,
            'genre_id' => 3
        ));
        GenreMoviesSeries::create(array(
            'movie_id' => 8,
            'genre_id' => 10
        ));
        GenreMoviesSeries::create(array(
            'movie_id' => 8,
            'genre_id' => 3
        ));
        GenreMoviesSeries::create(array(
            'movie_id' => 8,
            'genre_id' => 11
        ));
        GenreMoviesSeries::create(array(
            'movie_id' => 9,
            'genre_id' => 2
        ));
        GenreMoviesSeries::create(array(
            'movie_id' => 9,
            'genre_id' => 7
        ));
        GenreMoviesSeries::create(array(
            'movie_id' => 9,
            'genre_id' => 1
        ));
        GenreMoviesSeries::create(array(
            'movie_id' => 10,
            'genre_id' => 3
        ));
        GenreMoviesSeries::create(array(
            'movie_id' => 10,
            'genre_id' => 6
        ));
        GenreMoviesSeries::create(array(
            'series_id' => 1,
            'genre_id' => 12
        ));
        GenreMoviesSeries::create(array(
            'series_id' => 2,
            'genre_id' => 2
        ));
        GenreMoviesSeries::create(array(
            'series_id' => 2,
            'genre_id' => 3
        ));
        GenreMoviesSeries::create(array(
            'series_id' => 2,
            'genre_id' => 13
        ));
        GenreMoviesSeries::create(array(
            'series_id' => 3,
            'genre_id' => 10
        ));
        GenreMoviesSeries::create(array(
            'series_id' => 3,
            'genre_id' => 3
        ));
        GenreMoviesSeries::create(array(
            'series_id' => 3,
            'genre_id' => 4
        ));
    }
}