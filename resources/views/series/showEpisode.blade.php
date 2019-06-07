@extends('layouts.app')
@include('layouts.errormessage')
@section('content')

<!-- Backdrop series image -->
<div class="top">
    <div class="movieImageContainer">
        <img class="img-fluid movieImage" src="http://image.tmdb.org/t/p/w1280/{{$series['backdrop']}}"  alt="series image">
    </div>

<!-- Title and description of episode -->
<section class="series-description">
    <div class="episode-info">  
        <h1> <a class="gold" href="/series/{{$series['id']}}">{{$series['title']}}</a> | Season {{$season['season_number']}} </h1>
        <h1 class="title"> Episode {{$episode['episode_number']}} | {{$episode['title']}} </h1>     
    </div>

    <ul class="series-time">
        <li class="grey">Released: {{$episode['released']}}</li>
        <li class="white">|</li>
        <li class="grey">{{$episode['runtime']}}</li>
        <li class="white">|</li>
        @foreach($genres as $genre)
        <li class="grey">{{$genre->genres->name}}</li>
        @endforeach
        <li class="white">|</li>
        @foreach ($directors as $director)  
        <li class="grey"><a class="gold" href="/people/{{$director->people->implode('id', ',')}}">{{$director->people->implode('firstname', ',')}} {{$director->people->implode('lastname', ',')}}</a></li>
        @endforeach
    </ul>

    <p class="series-plot"> {{$series['plot']}} </p>
</section>    
</div>  

<!-- Main episode content -->
<section class="series-mainContent">
    <!-- Info about episode -->
    <section class="seriesInfo">
        <!-- Episode poster-->
        <img class="moviePoster" src="http://image.tmdb.org/t/p/w185/{{$series['poster']}}" alt="series poster">
        
        <ul class="movieDataInfo">
        <div class="awards">
                @foreach ($directors as $director)  
                <li class="grey"> Director </li>
                <li class="white"> {{$director->people->implode('firstname', ',')}} {{$director->people->implode('lastname', ',')}} </li>
                @endforeach
                @foreach ($writers as $writer)
                <li class="grey"> Writer </li>
                <li class="white"> {{$writer->people->implode('firstname', ',')}} {{$writer->people->implode('lastname', ',')}} </li>
                @endforeach
            </div>  
            <div class="awards">
                <li class="grey"> Awards</li>
                <li class="white"> {{$series['awards']}}</li>
            </div>   
        </ul>    
    </section>

    <section class="trailerAndInfo">
        <!-- Movie trailer -->
        <iframe class="trailer" src="https://youtube.com/embed/{{ $series['trailer']}}" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
        
        <!-- Cast -->
        <h3>Cast</h3>
        <section class="cast">
                @foreach ($actors as $actor)
                <div class="series-actor">
                    <img class="series-actorMini" src="http://image.tmdb.org/t/p/w185/{{$actor->people->implode('photo', ',')}}" alt="actor mini">
                    <h5><a href="/people/{{$actor->people->implode('id', ',')}}">{{$actor->people->implode('firstname', ',')}} {{$actor->people->implode('lastname', ',')}}</a> as {{$actor->role}}</h5>
                </div>       
                @endforeach
        </section>

        <section class="storyline">
            <button type="button" class="btn" data-toggle="collapse" data-target="#storyline"><h3>Storyline</h3></button>
            <hr>  
            <div id="storyline" class="collapse">   
                <p>{{$episode['plot']}} </p>
            </div>
        </section>
    </section>
</section>    
    
@endsection

    
