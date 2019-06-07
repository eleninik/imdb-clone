@extends('layouts.app') 
@section('content') 
@include('layouts.errormessage')
<div class="container">

    <div class="row index-movies">
        @foreach ($movies as $movie)
        <div class="col-md-6 p-1 mt-2">

            <div class="row">
                
                <img class="col index-poster" src="http://image.tmdb.org/t/p/w185/{{ $movie['poster'] }}" alt="Missing movie poster">

                <div class="col">

                    <div class="row">

                        <div class="col">
                            <h3 class="title">
                                <a class="gold" href="/movies/{{$movie['id']}}">{{ $movie['title'] }}</a>
                            </h3>
                            <span>
                                <h6 class="subtitle white">
                                    <span class="year">{{ $movie["released"] }}
                                        <i class="far fa-calendar-alt"></i>
                                    </span> |
                                    <span>
                                        @foreach($ratings as $rating)
                                            @if($rating["id"] === $movie["id"])
                                                {{ $rating["score"] }}
                                            @endif
                                        @endforeach
                                        <i class="fas fa-star"></i>
                                    </span> |
                                    <span>
                                        @foreach($movie["genres"] as $genre)
                                            {{ $genre["name"].' ' }}
                                        @endforeach
                                    </span>
                                </h6>
                            </span>
                        </div>

                    </div>
                    
                        <p class="white">
                            Directed by: 
                                @foreach($moviePeople as $moviePerson)
                                    @if($moviePerson["movie_id"] === $movie["id"] && $moviePerson["job"] === "director")
                                    <a class="gold" href=""> 
                                        {{ $moviePerson["name"] }}
                                    </a>  
                                    @endif
                                @endforeach
                            
                        </p>
                        <p class="white">
                            Starring: 
                            @foreach($moviePeople as $moviePerson)
                                    @if($moviePerson["movie_id"] === $movie["id"] && $moviePerson["job"] === "actor")
                                    <a class="gold" href=""> 
                                        {{ $moviePerson["name"] }}
                                    </a>  
                                    @endif
                            @endforeach
                        </p>
                    
                    <div class="row plot">
                        <span class="col white">{{ $movie["short_plot"] }}</span>
                    </div>

                </div>

            </div>

        </div>
        @endforeach
    </div>

</div>
@endsection