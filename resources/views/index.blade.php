
@extends('layouts.app')

@section('content')
    
    {{-- Popular --}}
    <div class="thumbnail">
        <h2 class="index-h2 gold">Popular</h2>
        @foreach($popularMovies as $movies)
            <div class="holder">
                <img class="index-poster" src="http://image.tmdb.org/t/p/w500/{{$movies->movies['poster']}}">
                <div id="{{$movies->movies['id']}}" class="caption post-content">
                    <h3><a href="/movies/{{$movies->movies['id']}}">{{$movies->movies['title']}}</a></h3>
                    <p>{{$movies->movies['short_plot']}}</p>
                </div>
            </div> 
        @endforeach
    </div>

    {{-- Now Playing --}}
    <div class="thumbnail">
        <h2 class="index-h2 gold">Now Playing</h2>
        @foreach($nowPlayingMovies as $movies)
            <div class="holder">
                <img class="index-poster" src="http://image.tmdb.org/t/p/w500/{{$movies->movies['poster']}}">
                <div class="caption post-content">
                    <h3><a href="/movies/{{$movies->movies['id']}}">{{$movies->movies['title']}}</a></h3>
                    <p>{{$movies->movies['short_plot']}}</p>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Coming Soon --}}
    <div class="thumbnail">
        <h2 class="index-h2 gold">Coming Soon</h2>
        @foreach($comingSoonMovies as $movies)
            <div class="holder">
                <img class="index-poster" src="http://image.tmdb.org/t/p/w500/{{$movies->movies['poster']}}">
                <div class="caption post-content">
                    <h3><a href="/movies/{{$movies->movies['id']}}">{{$movies->movies['title']}}</a></h3>
                    <p>{{$movies->movies['short_plot']}}</p>
                </div>
            </div>
        @endforeach
    </div>

@endsection
