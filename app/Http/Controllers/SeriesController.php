<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Series;
use App\Rating;
use App\Season;
use App\Episode;
use App\Comment;
use App\Review;
use App\PeopleProfession;
use App\GenreMoviesSeries;
use App\MovieStudioSeries;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Series::with('genres')->get();

        // get the ratings
        $ratings = [];

        foreach ($series as $serie) {
            $totalScore = 0;
            $raters = 0;
            
            $userRatings = Rating::all()
                ->where('rateable_id', $serie["id"])
                ->where('rateable_type', 'series')
                ->toArray();

            foreach ($userRatings as $userRating)
            {
                $totalScore += $userRating["rating"];
                $raters++;
            }

            if ($raters > 0) {
                $serieRating = $totalScore / $raters;
            } else {
                $serieRating = 0;
            }

            $idAndRating = [
                'id' => $serie["id"],
                'score' => $serieRating
            ];

            array_push($ratings, $idAndRating);
        }
        // end of ratings


        return view('series.index')->with('series', $series)->with('ratings', $ratings);
    }

    public function show($id)
    {
        $series = Series::findOrFail($id);

        $totalSum = array();
        $ratings = Rating::all()
        ->where('rateable_id', $id)
        ->where('rateable_type', 'series')
        ->toArray();
        
        foreach($ratings as $rating) {
             $seriesRating = ($rating['rating']);
             array_push($totalSum, $seriesRating);
        } 

            if (count($totalSum) < 1)  // No votes = no rating 
            {
                $avarageRating = array_sum($totalSum);
            }
            else {
                $avarageRating = number_format((array_sum($totalSum)/count($totalSum)), 1);
            }

        $votes = count($totalSum);
        
        if (\Auth::user()) {
            $userRating = Rating::where('user_id', Auth::user()->id)
            ->where('rateable_id', $id)
            ->where('rateable_type', 'series')
            ->first();
            
        } else {
            $userRating = 'Rate this!';
        }
        
        $seasons = Series::find($id)->seasons;

        $reviews = Review::with('rating')
        ->with('comments')
        ->where('reviewable_id', $id)
        ->where('reviewable_type', 'series')
        ->where('status', 1)
        ->get();

        $directors = PeopleProfession::with('people')->where('cast_id', $id)->where('cast_type', 'series')->where('profession_id', 3)->get();
        $writers = PeopleProfession::with('people')->where('cast_id', $id)->where('cast_type', 'series')->where('profession_id', 2)->get();
        $actors = PeopleProfession::with('people')->where('cast_id', $id)->where('cast_type', 'series')->where('profession_id', 1)->get();
        $genres = GenreMoviesSeries::with('genres')->where('series_id', $id)->get();
        $studios = MovieStudioSeries::with('studios')->where('series_id', $id)->get();
        
        return view('series.show', compact('series', 'genres', 'studios', 'avarageRating', 'votes', 'userRating', 'seasons', 'reviews', 'directors', 'writers', 'actors'));    
    
    }


    public function showSeason($id, $seasonNumber)
    {        
        $series = Series::findOrFail($id)->toArray();
        //Next we will get all seasons where season number from path is correct and where series id from path is correct.
        //Then pluck(pick out) the id and get it as an array
        $seasonId = Season::all()->where('season_number', $seasonNumber)->where('series_id', $id)->pluck('id')->toArray();
        
        $season = Season::find($seasonId[0])->toArray();
 
        //With the seasonid as an array, we can find that season and get all episodes related to it.
        $episodes = Season::find($seasonId[0])->episodes->sortBy('episode_number')->toArray();
    
        //dd($episodes);

        return view('series.showSeason', compact('series', $series, 'season', $season, 'episodes', $episodes));
    }


    public function showEpisode($id, $seasonNumber, $episodeNumber)
    {        
        $series = Series::findOrFail($id)->toArray();
        
        //Next we will get all seasons where season number from path is correct and where series id from path is correct.
        //Then pluck(pick out) the id and get it as an array
        $seasonId = Season::all()->where('season_number', $seasonNumber)->where('series_id', $id)->pluck('id')->toArray();
        $episodeId = Episode::all()->where('episode_number', $episodeNumber)->where('season_id', $seasonId[0])->pluck('id')->toArray();
        
        if(empty($episodeId)) {
            return redirect('/series')->with('success', 'Could not find the episode you were looking for');
        }
        
        $season = Season::find($seasonId[0])->toArray();
        
        //With the seasonid as an array, we can find that season and get all episodes related to it.
        $episode = Episode::find($episodeId[0])->toArray();

        $directors = PeopleProfession::with('people')->where('cast_id', $id)->where('cast_type', 'series')->where('profession_id', 3)->get();
        $writers = PeopleProfession::with('people')->where('cast_id', $id)->where('cast_type', 'series')->where('profession_id', 2)->get();
        $actors = PeopleProfession::with('people')->where('cast_id', $id)->where('cast_type', 'series')->where('profession_id', 1)->get();
        $genres = GenreMoviesSeries::with('genres')->where('series_id', $id)->get();
        $studios = MovieStudioSeries::with('studios')->where('series_id', $id)->get();
        
        return view('series.showEpisode', compact('series', 'genres', 'studios', 'season', 'episode', 'directors', 'writers', 'actors'));
    }
}
