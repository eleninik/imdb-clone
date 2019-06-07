<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Scout;
use App\Rating;

class SearchController extends Controller
{
    public function results (Request $request) {
        $input = $request->input();
        $appId = getenv('ALGOLIA_APP_ID');
        $apiKey = getenv('ALGOLIA_API_KEY');
        $client = new \AlgoliaSearch\Client($appId, $apiKey);
        $query = $input['search'];
        $filter = $input['filter']; 
        
        if ($filter === 'movies') {
            $index = $client->initIndex('movies');
            $results = $index->search($query);
        } else if ($filter === 'series') {
            $index = $client->initIndex('series');
            $results = $index->search($query);
        } else if ($filter === 'people') {
            $index = $client->initIndex('people');
            $results = $index->search($query);
        } else if ($filter === 'everything') {
            $queries = [
                ['indexName' => 'movies', 'query' => $query, 'hitsPerPage' => 10],
                ['indexName' => 'series', 'query' => $query, 'hitsPerPage' => 10],
                ['indexName' => 'people', 'query' => $query, 'hitsPerPage' => 10]
            ];

            $results = $client->multipleQueries($queries);

            $movieResults = $results["results"][0];
            $seriesResults = $results["results"][1];
            $peopleResults = $results["results"][2];

            // get the ratings
            $ratings = [];

            foreach ($movieResults["hits"] as $result) {

                $totalScore = 0;
                $raters = 0;

                $userRatings = Rating::all()
                    ->where('rateable_id', $result["id"])
                    ->toArray();

                foreach ($userRatings as $userRating)
                {
                    $totalScore += $userRating["rating"];
                    $raters++;
                }

                if ($raters > 0) {
                    $resultRating = $totalScore / $raters;
                } else {
                    $resultRating = 0;
                }

                $idAndRating = [
                    'id' => $result["id"],
                    'score' => $resultRating
                ];

                array_push($ratings, $idAndRating);
            }
            foreach ($seriesResults["hits"] as $result) {

                $totalScore = 0;
                $raters = 0;

                $userRatings = Rating::all()
                    ->where('rateable_id', $result["id"])
                    ->toArray();

                foreach ($userRatings as $userRating)
                {
                    $totalScore += $userRating["rating"];
                    $raters++;
                }

                if ($raters > 0) {
                    $resultRating = $totalScore / $raters;
                } else {
                    $resultRating = 0;
                }

                $idAndRating = [
                    'id' => $result["id"],
                    'score' => $resultRating
                ];

                array_push($ratings, $idAndRating);
            }
            // end of ratings

            return view('results')
                ->with('movieResults', $movieResults)
                ->with('seriesResults', $seriesResults)
                ->with('peopleResults', $peopleResults)
                ->with('query', $query)
                ->with('filter', $filter)
                ->with('ratings', $ratings);
        }

        // get the ratings
        $ratings = [];

        foreach ($results["hits"] as $result) {

            $totalScore = 0;
            $raters = 0;

            $userRatings = Rating::all()
                ->where('rateable_id', $result["id"])
                ->toArray();

            foreach ($userRatings as $userRating)
            {
                $totalScore += $userRating["rating"];
                $raters++;
            }

            if ($raters > 0) {
                $resultRating = $totalScore / $raters;
            } else {
                $resultRating = 0;
            }

            $idAndRating = [
                'id' => $result["id"],
                'score' => $resultRating
            ];

            array_push($ratings, $idAndRating);
        }
        // end of ratings


        return view('results')->with('results', $results['hits'])->with('query', $query)->with('filter', $filter)->with('ratings', $ratings);
    }
}
