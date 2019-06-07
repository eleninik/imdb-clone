<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Movie;
use App\FeaturedMoviesSeries;

class ApiController extends Controller
{
    public function api($category)
    {
        $key = 'api_key=88da7afe207b5a97c5fb37fdf7e1a53a';
        
        $url = "https://api.themoviedb.org/3/movie/$category?page=1&language=en-US&$key";

        $curl = curl_init();
        
        curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => "{}",
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $arrays = json_decode($response, true);
        }
       
        return $arrays;  
        
    }

    public function store()
    {
        $catOne = 'now_playing';
        $catTwo = 'popular';
        $catThree = 'upcoming';


        $nowPlayingMovies = $this->api($catOne);
        $popular = $this->api($catTwo);
        $upComing = $this->api($catThree);

        foreach($nowPlayingMovies['results'] as $movie){
           
                $properties = [
                    'title' => $movie['title'],
                    'year' => $movie['release_date'], 
                    'released' => $movie['release_date'],
                    'runtime' => '120min',
                    'short_plot' => $movie['overview'],
                    'full_plot' => $movie['overview'],
                    'production_country_id' => 1,
                    'poster' => $movie['poster_path'],
                    'backdrop' => $movie['backdrop_path'],
                    'trailer' => 'youtube.com',
                    'studio_id' => 1,
                ];
                
                
                $save = Movie::create($properties);
                
                $featuredProperties = [
                    'movie_id' => $save->id,
                    'featured_id' => 3
                ];
                
                FeaturedMoviesSeries::create($featuredProperties);

        }

        foreach($popular['results'] as $movie){
           
            $properties = [
                'title' => $movie['title'],
                'year' => $movie['release_date'], 
                'released' => $movie['release_date'],
                'runtime' => '120min',
                'short_plot' => $movie['overview'],
                'full_plot' => $movie['overview'],
                'production_country_id' => 1,
                'poster' => $movie['poster_path'],
                'backdrop' => $movie['backdrop_path'],
                'trailer' => 'youtube.com',
                'studio_id' => 1,
            ];
            
            
            $save = Movie::create($properties);
            
            $featuredProperties = [
                'movie_id' => $save->id,
                'featured_id' => 2
            ];
            
            FeaturedMoviesSeries::create($featuredProperties);

        }

        foreach($upComing['results'] as $movie){
            
            $properties = [
                'title' => $movie['title'],
                'year' => $movie['release_date'], 
                'released' => $movie['release_date'],
                'runtime' => '120min',
                'short_plot' => $movie['overview'],
                'full_plot' => $movie['overview'],
                'production_country_id' => 1,
                'poster' => $movie['poster_path'],
                'backdrop' => $movie['backdrop_path'],
                'trailer' => 'youtube.com',
                'studio_id' => 1,
            ];
            
            
            $save = Movie::create($properties);
            
            $featuredProperties = [
                'movie_id' => $save->id,
                'featured_id' => 1
            ];
            
            FeaturedMoviesSeries::create($featuredProperties);

        }
        
        return redirect('/admin')->with('Success', 'Database Seeded from TMDB');
    }

    
}
