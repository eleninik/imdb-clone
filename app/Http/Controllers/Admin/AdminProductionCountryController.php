<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductionCountry;
use App\Movie;
use App\Series;
use App\MovieSeriesProductionCountries;

class AdminProductionCountryController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        
        $productionCountries = ProductionCountry::all();
        
        $series = Series::all();
        
        $productionSeries = Series::with('productionCountries')->get();
        
        $productionMovies = Movie::with('productionCountries')->get();    

        return view('admin.indexProductionCountries', compact('movies', 'series', 'productionCountries', 'productionSeries', 'productionMovies'));
        
    }

    public function create()
    {
        return view('admin.createProductionCountries');
    }

    public function store(Request $request)
    {
        $productionCountry = $this->validate(request(), [
            'country_name' => 'required',
            'continent' => 'required'
        ]);

        ProductionCountry::create($productionCountry);
        return redirect('/admin')->with('success', 'Production Country added!');
    }

    public function attach(Request $request)
    {
        $seriesId = $request['series_id'];
        $movieId = $request['movie_id'];
        
        if (!$request->production_country_id) {
            return redirect('/admin/productioncountries')->withErrors('Forgot to choose production country?');
        }

        if(!$movieId && !$seriesId){
            return redirect('/admin/productioncountries')->withErrors('Forgot to add title?');
        }

        foreach($request->production_country_id as $countryId){
            
            $country = ProductionCountry::find($countryId);
            
            if ($movieId) {
                if (MovieSeriesProductionCountries::where('movie_id', $movieId)->where('production_country_id', $countryId)->exists()) {
                    return redirect('/admin/productioncountries')->with('success', 'Movie already listed with that production country');
                }
    
                $country->movies()->attach($movieId);
                
            }
            
            if ($seriesId) {
                if (MovieSeriesProductionCountries::where('series_id', $seriesId)->where('production_country_id', $countryId)->exists()) {
                    return redirect('/admin/productioncountries')->with('success', 'Series already listed with that production country');
                }
    
                $country->series()->attach($seriesId);
            }
            
        }

        if($seriesId){
            return redirect('/admin/productioncountries')->with('success', 'Added production country to series!');    
        }

        if($movieId){
            return redirect('/admin/productioncountries')->with('success', 'Added production country to movie!');
        }
    }

    public function detach(Request $request)
    {
        $productionCountries = $request['productioncountries'];
        $movieId = $request['movie'];
        $seriesId = $request['series'];
        
        $countryIds = explode(',', $productionCountries);
        $movie = Movie::find($movieId);
        $series = Series::find($seriesId);
        
        
        if($movieId)
        {
            foreach($countryIds as $id){
                $country = ProductionCountry::find($id);
                $country->movies()->detach($movie);
            }    
        }

        if($seriesId)
        {
            foreach($countryIds as $id){
                $country = ProductionCountry::find($id);
                $country->series()->detach($series);
            }
        }
        
       
        return redirect('/admin/productioncountries')->with('success', 'Detached');
    }

    public function destroy(Request $request)
    {
        foreach($request->production_country_id as $id){
            $country = ProductionCountry::find($id);
            $country->delete();
        }
        return redirect('admin/productioncountries')->with('success', 'Production country has been deleted!');
    }
}
