<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Movie;
use App\Rating;
use App\Comment;
use App\Review;
use App\PeopleProfession;
use App\GenreMoviesSeries;
use App\MovieStudioSeries;


class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::with('genres')->with('people')->get();

        // get the ratings
        $ratings = [];

        foreach ($movies as $movie) {
            $totalScore = 0;
            $raters = 0;
            
            $userRatings = Rating::all()
                ->where('rateable_id', $movie["id"])
                ->where('rateable_type', 'movie')
                ->toArray();

            foreach ($userRatings as $userRating)
            {
                $totalScore += $userRating["rating"];
                $raters++;
            }

            if ($raters > 0) {
                $movieRating = $totalScore / $raters;
            } else {
                $movieRating = 0;
            }

            $idAndRating = [
                'id' => $movie["id"],
                'score' => $movieRating
            ];

            array_push($ratings, $idAndRating);
        }
        // end of ratings


        // get the people
        $data = [];

        foreach ($movies as $movie) {
            $id = $movie["id"];

            $directors = PeopleProfession::with('people')->where('cast_id', $id)->where('cast_type', 'movie')->where('profession_id', 3)->get();
            $actors = PeopleProfession::with('people')->where('cast_id', $id)->where('cast_type', 'movie')->where('profession_id', 1)->get();

            $directorsArr = [];

            foreach($directors as $director) {
                $directorArr = [
                    'movie_id' => $movie["id"],
                    'job' => 'director',
                    'name' => $director["people"][0]["firstname"].' '.$director["people"][0]["lastname"],
                ];

                array_push($directorsArr, $directorArr);
            }

            $actorsArr = [];

            foreach($actors as $actor) {
                $actorArr = [
                    'movie_id' => $movie["id"],
                    'job' => 'actor',
                    'name' => $actor["people"][0]["firstname"].' '.$actor["people"][0]["lastname"],
                ];

                array_push($actorsArr, $actorArr);
            }

            array_push($data, $directorsArr);
            array_push($data, $actorsArr);
        }

        $moviePeople = [];

        foreach($data as $value) {
            foreach($value as $innerValue) {
                array_push($moviePeople, $innerValue);
            }
        }

        // end of get people

        return view('movies.index')->with('movies', $movies)->with('ratings', $ratings)->with('moviePeople', $moviePeople);
    }


    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        
        // Total rating for each id
        $totalSum = array();
        $ratings = Rating::all()
            ->where('rateable_id', $id)
            ->where('rateable_type', 'movie')
            ->toArray();

        
        // Loop ratings and push to array of total rating
        foreach($ratings as $rating) {
            $movieRating = ($rating['rating']);
            array_push($totalSum, $movieRating);
        } 

        // No votes = no rating 
        if (count($totalSum) < 1) { $avarageRating = array_sum($totalSum);}
        else { $avarageRating = number_format((array_sum($totalSum)/count($totalSum)), 1);}

        $votes = count($totalSum);
        
        // If the user is registred find userrating
        if (\Auth::user()) { 
            $userRating = Rating::where('user_id', Auth::user()->id)
                ->where('rateable_id', $id)
                ->where('rateable_type', 'movie')
                ->first();
        } 
        else { $userRating = 'Rate this!';}
        
        $reviews = Review::with('rating')
            ->with('comments')
            ->where('reviewable_id', $id)
            ->where('reviewable_type', 'movies')
            ->where('status', 1)/*->sortByDesc()*/
            ->get();
        
        // Poeple connected to movie
        $directors = PeopleProfession::with('people')->where('cast_id', $id)->where('cast_type', 'movie')->where('profession_id', 3)->get();
        $writers = PeopleProfession::with('people')->where('cast_id', $id)->where('cast_type', 'movie')->where('profession_id', 2)->get();
        $actors = PeopleProfession::with('people')->where('cast_id', $id)->where('cast_type', 'movie')->where('profession_id', 1)->get();
        $genres = GenreMoviesSeries::with('genres')->where('movie_id', $id)->get();
        $studios = MovieStudioSeries::with('studios')->where('movie_id', $id)->get();

        return view('movies.show', compact('movie', 'genres', 'studios', 'avarageRating', 'votes', 'userRating', 'reviews', 'directors', 'writers', 'actors'));
    }
}

    

