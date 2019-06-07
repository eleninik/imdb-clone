@extends('layouts.app')
@section('content')

<h1 class="people-name">{{$people['firstname']}} {{$people['lastname']}}</h1>
    <div class="people">
        <div class="together">
            <img class="people-image" src="https://image.tmdb.org/t/p/original/{{$people['photo']}}">
            <div class="people--sidebaro">
                @if(!$people['born'] == null)
                <p>Born {{$people['born']}}</p>
                @endif
            </div>
        </div> 
        <div class="people-bio">   
            <p>{{$people['bio']}}</p>
                <div class="movie--card">
                    <h5> Known for </h5>

                    @foreach($people->movies as $movies)
                    <a href="/movies/{{$movies['id']}}">
                    <img class="movie-poster" src="http://image.tmdb.org/t/p/w185/{{$movies['poster']}}">
                    <p> {{$movies['title']}} </p></a>
                    @endforeach
                </div>
        </div>
    </div>            
@endsection
